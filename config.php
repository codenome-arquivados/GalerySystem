<?php
require 'environment.php';

define("BASE_URL", "http://localhost/galeria");

global $config;
$config = array();
if(ENVIRONMENT == 'development') {
	$config['dbname'] = 'galeria';
	$config['host'] = 'localhost:3303';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '1qa2ws3ed2013';
} else {
	$config['dbname'] = 'galeria';
	$config['host'] = 'localhost:3303';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '1qa2ws3ed2013';
}
?>