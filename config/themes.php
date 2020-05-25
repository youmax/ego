<?php

return [
    'default' => 'default',

    'themes' => [
        'default' => [
            'views_path' => 'resources/themes/default/views',
            'assets_path' => 'public/themes/default/assets',
            'name' => 'Default',
        ],

        'tailwind' => [
            'views_path' => 'resources/themes/tailwind/views',
            'assets_path' => 'public/themes/tailwind/assets',
            'name' => 'Tailwind',
        ],

        'velocity' => [
            'views_path' => 'resources/themes/velocity/views',
            'assets_path' => 'public/themes/velocity/assets',
            'name' => 'Velocity',
            'parent' => 'default',
        ],
    ],
];
