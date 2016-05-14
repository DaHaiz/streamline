<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Development Environment
    |--------------------------------------------------------------------------
    |
    | This part configures your dev environment. Just uncomment the name
    | of the service and recreate the docker files using
    |
    | artisan streamline:dev:setup
    |
    */

    'dev' => [
        'services' => [
            'laravel', // always required
            'nginx', // always required
            //'mysql',
        ]
    ]
];