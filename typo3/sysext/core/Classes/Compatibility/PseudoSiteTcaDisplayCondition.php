<?php
declare(strict_types = 1);
namespace TYPO3\CMS\Core\Compatibility;

/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

use TYPO3\CMS\Core\Routing\SiteMatcher;
use TYPO3\CMS\Core\Site\Entity\Site;
use TYPO3\CMS\Core\Utility\GeneralUtility;

/**
 * A display condition that returns true if the page we are dealing
 * with is in a page tree that is represented by a PseudoSite object.
 *
 * This is used to suppress the 'slug' field in pseudo site page trees
 * when editing page records and to show the alias field.
 *
 * Both "Pseudo sites" and "alias" db field will bite the dust in v10,
 * so this is a temporary display condition for v9 only and thus marked internal.
 *
 * @internal Implementation and class will probably vanish in v10 without further notice
 */
class PseudoSiteTcaDisplayCondition
{
    /**
     * Takes the given page id of the record and verifies if the page has
     * a pseudo site object or a site object attached.
     *
     * @param array $parameters
     * @return bool
     * @throws \InvalidArgumentException
     */
    public function isInPseudoSite(array $parameters): bool
    {
        if (!isset($parameters['conditionParameters'][0])
            || $parameters['conditionParameters'][0] !== 'pages'
            || !isset($parameters['conditionParameters'][1])
            || (!in_array($parameters['conditionParameters'][1], ['true', 'false'], true))
            || empty($parameters['record']['uid'])
        ) {
            // Validate arguments
            throw new \InvalidArgumentException(
                'Invalid arguments using isInPseudoSite display condition',
                1535055415
            );
        }

        $defaultLanguagePageId = (int)$parameters['record']['uid'];
        if (!empty($parameters['record']['l10n_parent'][0])) {
            $defaultLanguagePageId = (int)$parameters['record']['l10n_parent'][0];
        }

        // Catch all: If not a "Site" object, it must be a PseudoSite or NullSite or whatever
        // we may have invented. To be as robust as possible we just say "yes pseudo" here.
        $isInPseudoSite = true;
        $site = GeneralUtility::makeInstance(SiteMatcher::class)->matchByPageId($defaultLanguagePageId);
        if ($site instanceof Site) {
            $isInPseudoSite = false;
        }

        if ($parameters['conditionParameters'][1] === 'false') {
            // Negate if requested
            return !$isInPseudoSite;
        }

        return $isInPseudoSite;
    }
}
