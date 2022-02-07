<?php

/** @phpstan-ignore-next-line */
$EM_CONF[$_EXTKEY] = [
    'title' => 'Headless Navigations',
    'description' => 'This extension enhances the EXT:headless json response with three customizable navigations.',
    'category' => 'misc',
    'author' => 'Sven Petersen',
    'author_email' => 'sven@hardanders.de',
    'state' => 'stable',
    'clearCacheOnLoad' => 0,
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '10.4.0-11.5.99',
            "headless" => "2.0.0-3.0.99",
        ],
        'conflicts' => [
        ],
        'suggests' => [
        ],
    ],
];
