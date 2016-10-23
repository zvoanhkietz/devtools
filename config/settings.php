<?php
return [
    'settings' => [
        'displayErrorDetails'               => true, // set to false in production
        'addContentLengthHeader'            => false, // Allow the web server to send the content-length header
        'determineRouteBeforeAppMiddleware' => false,
        // Renderer settings
        'renderer'                          => [
            'template_path' => APP . '/templates/',
        ],
        // Monolog settings
        'logger'                            => [
            'name'  => 'slim-app',
            'path'  => LOGS . '/app.log',
            'level' => \Monolog\Logger::DEBUG,
        ],
        // Database connection settings           
        "db"                                => [
            'driver'    => 'mysql',
            'host'      => 'localhost',
            'database'  => 'devtools',
            'username'  => 'root',
            'password'  => getenv('DB_PASSS'),
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
        ],
    ],
];
