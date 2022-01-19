<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Cache Purger',
    'description' => 'Purge cached URLs within Varnish instances',
    'category' => 'misc',
    'version' => '1.0.0',
    'state' => 'stable',
    'clearCacheOnLoad' => 0,
    'constraints' => [
        'depends' => [
            'typo3' => '9.5.0-10.4.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];