<?php

return [

    'default' => env('DIRECTUS_CONNECTION', 'default'),

    'connections' => [

        'default' => [

            'base_url' => env('DIRECTUS_URL', 'https://database.account.directus.io'),
            'auth_prefix' => env('AUTH_PREFIX', ''),
            'auth_token' => env('DIRECTUS_AUTH_TOKEN', ''),
        ],

    ],
    
];