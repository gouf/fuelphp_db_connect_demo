<?php
/**
 * The production database settings. These get merged with the global settings.
 */

return array(
	'default' => array(
		'connection'  => array(
			'dsn'        => 'mysql:host=localhost;dbname=fuel_prod',
			'username'   => getenv('FUEL_DB_PROD_USER'),
			'password'   => getenv('FUEL_DB_PROD_PASSWORD'),
		),
	),
);
