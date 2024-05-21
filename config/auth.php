<?php

return [
    'guards' => [
        'user' => [
            'driver' => 'session',
            'provider' => 'users',
        ],

        'distributor' => [
            'driver' => 'session',
            'provider' => 'distributors',
        ],
    ],

    'providers' => [
        'users' => [
            'driver' => 'eloquent',
            'model' => App\User::class,
        ],

        'distributors' => [
            'driver' => 'eloquent',
            'model' => App\Distributor::class,
        ],
    ],
];
