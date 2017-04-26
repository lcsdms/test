<?php
return [
    'propel' => [
        'paths' => [
            // The directory where Propel expects to find your `schema.xml` file.
            'schemaDir' => '.',

            // The directory where Propel should output generated object model classes.
            'phpDir' => '.',
        ],
        'database' => [
            'connections' => [
                'default' => [
                    'adapter' => 'mysql',
                    'dsn' => 'mysql:host=localhost;port=3306;dbname=test',
                    'user' => 'root',
                    'password' => 'root',
                    'settings' => [
                        'charset' => 'utf8'
                    ]
                ]
            ]
        ]
    ]
];
