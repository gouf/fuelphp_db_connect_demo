<?php
/**
 * The development database settings. These get merged with the global settings.
 */

return array(
    'default' => array(
        'connection'  => array(
            'type' => 'pdo',
            'dsn'        => 'mysql:host=localhost;dbname=fuel_dev',
            'username'   => getenv('FUEL_DB_DEV_USER'),
            'password'   => getenv('FUEL_DB_DEV_PASSWORD'),
        ),
    ),
);
