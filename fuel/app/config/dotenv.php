<?php

if(\Fuel::$env == \Fuel::DEVELOPMENT) {
    echo __DIR__;
    // Refer project root directory
    $envFilePath = realpath(dirname(__DIR__ . '/..' . '/..' . '/..'. '/..'));
    echo $envFilePath;
    $dotenv = new Dotenv\Dotenv($envFilePath);$dotenv->load();
    $dotenv->required('FUEL_DB_DEV_USER')->notEmpty();
}

return array();
