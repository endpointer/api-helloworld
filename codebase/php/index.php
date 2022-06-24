<?php

require_once 'vendor/autoload.php';

// M 	= Module
// EP	= Endpoint

$_ENV[HelloWorldApi\Constants::CONFIG_ID] = parse_ini_file('.config.ini');

require_once	'src/HelloWorldApi' .

	'/Endpoint' .

	'/' . $_GET['M'] .

	'/' . $_GET['EP'] .

	'Endpoint.php';
