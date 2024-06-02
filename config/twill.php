<?php

return [
    'locale' => 'pl',
    'fallback_locale' => 'en',
    'block_editor' => [
        'use_twill_blocks' => [],
        'crops' => [ 
            'highlight' => [
                'desktop' => [
                    [
                        'name' => 'desktop',
                        'ratio' => 16 / 9,
                    ],
                ],
                'mobile' => [
                    [
                        'name' => 'mobile',
                        'ratio' => 1,
                    ],
                ],
            ],
        ],
    ]
];
