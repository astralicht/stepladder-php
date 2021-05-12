<?php

include_once 'render.php';

$elements = [
    'title' => 'Test App',
    'screens' => [
        'home' => [
            'h1' => 'Poynt PHP',
            'p' => 'This is a test.',
        ],
    ],
];

$app = new App($elements);
echo $app->render();