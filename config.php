<?php

return [
    'baseUrl' => '',
    'production' => false,
    'collections' => [
        'posts' => [
            'path' => 'blog/{date|Y-m-d}/{-title}',
            'author' => 'Taco',
        ],
        'projects' => [
            'path'  => '{collection}/{-title}',
        ],
    ],
];
