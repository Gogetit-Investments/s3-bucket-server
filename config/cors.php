<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Cross-Origin Resource Sharing (CORS) Configuration
    |--------------------------------------------------------------------------
    |
    | Here you may configure your settings for cross-origin resource sharing
    | or "CORS". This determines what cross-origin operations may execute
    | in web browsers. You are free to adjust these settings as needed.
    |
    | To learn more: https://developer.mozilla.org/en-US/docs/Web/HTTP/CORS
    |
    */

    // 'paths' => ['api/*', 'sanctum/csrf-cookie'],
    'paths' => ['api/*', 'api/admin/*', 'api/users/*', '*'],

    // 'allowed_methods' => ['*'],
    'allowed_methods' => ['POST', 'GET', 'DELETE', 'PUT', '*'],

    // 'allowed_origins' => ['*'],
    'allowed_origins' => ['http://localhost:3002','*'],

    'allowed_headers' => ['X-Custom-Header', 'Upgrade-Insecure-Requests', '*'],

    'allowed_origins_patterns' => [],

    // 'allowed_headers' => ['*'],

    'exposed_headers' => [],

    'max_age' => 0,

    'supports_credentials' => false,

    'Access-Control-Allow-Origin' => ['*'],

    'Access-Control-Allow-Methods' => ['GET, POST, PUT, DELETE, OPTIONS']

];



