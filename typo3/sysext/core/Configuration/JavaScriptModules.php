<?php

return [
    'dependencies' => [],
    'imports' => [
        '@typo3/core/' => [
            'path' => 'EXT:core/Resources/Public/JavaScript/',
            'exclude' => [
                'EXT:core/Resources/Public/JavaScript/Contrib/',
            ],
        ],
        'autosize' => 'EXT:core/Resources/Public/JavaScript/Contrib/autosize.js',
        'bootstrap' => 'EXT:core/Resources/Public/JavaScript/Contrib/bootstrap.js',
        'broadcastchannel.js' => 'EXT:core/Resources/Public/JavaScript/Contrib/broadcastchannel.js',
        'cropperjs' => 'EXT:core/Resources/Public/JavaScript/Contrib/cropperjs.js',
        'd3-dispatch' => 'EXT:core/Resources/Public/JavaScript/Contrib/d3-dispatch.js',
        'd3-drag' => 'EXT:core/Resources/Public/JavaScript/Contrib/d3-drag.js',
        'd3-selection' => 'EXT:core/Resources/Public/JavaScript/Contrib/d3-selection.js',
        'ev-emitter' => 'EXT:core/Resources/Public/JavaScript/Contrib/ev-emitter.js',
        'flatpickr/' => 'EXT:core/Resources/Public/JavaScript/Contrib/flatpickr/',
        'imagesloaded' => 'EXT:core/Resources/Public/JavaScript/Contrib/imagesloaded.js',
        'interactjs' => 'EXT:core/Resources/Public/JavaScript/Contrib/interact.js',
        'jquery' => 'EXT:core/Resources/Public/JavaScript/Contrib/jquery.js',
        'jquery/' => 'EXT:core/Resources/Public/JavaScript/Contrib/jquery/',
        'jquery/autocomplete.js' => 'EXT:core/Resources/Public/JavaScript/Contrib/jquery.autocomplete.js',
        'jquery-ui/' => 'EXT:core/Resources/Public/JavaScript/Contrib/jquery-ui/',
        '@lit/reactive-element' => 'EXT:core/Resources/Public/JavaScript/Contrib/@lit/reactive-element@1.0.0/reactive-element.js',
        '@lit/reactive-element/' => 'EXT:core/Resources/Public/JavaScript/Contrib/@lit/reactive-element@1.0.0/',
        'lit' => 'EXT:core/Resources/Public/JavaScript/Contrib/lit@2.0.0/index.js',
        'lit/' => 'EXT:core/Resources/Public/JavaScript/Contrib/lit@2.0.0/',
        'lit-element' => 'EXT:core/Resources/Public/JavaScript/Contrib/lit-element@3.0.0/index.js',
        'lit-element/' => 'EXT:core/Resources/Public/JavaScript/Contrib/lit-element@3.0.0/',
        'lit-html' => 'EXT:core/Resources/Public/JavaScript/Contrib/lit-html@2.0.0/lit-html.js',
        'lit-html/' => 'EXT:core/Resources/Public/JavaScript/Contrib/lit-html@2.0.0/',
        'moment' => 'EXT:core/Resources/Public/JavaScript/Contrib/moment.js',
        'moment-timezone' => 'EXT:core/Resources/Public/JavaScript/Contrib/moment-timezone.js',
        'nprogress' => 'EXT:core/Resources/Public/JavaScript/Contrib/nprogress.js',
        'sortablejs' => 'EXT:core/Resources/Public/JavaScript/Contrib/sortablejs.js',
        'tablesort.dotsep.js' => 'EXT:core/Resources/Public/JavaScript/Contrib/tablesort.dotsep.js',
        'tablesort' => 'EXT:core/Resources/Public/JavaScript/Contrib/tablesort.js',
        'taboverride' => 'EXT:core/Resources/Public/JavaScript/Contrib/taboverride.js',
    ],
];
