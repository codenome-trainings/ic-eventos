<?php
require 'environment.php';

define("BASE_URL", "http://localhost/ic-eventos");
define("TITLE_SYSTEM", "IC Eventos");

global $config;
$config = array();
if(ENVIRONMENT == 'development') {
	$config['dbname'] = 'ic-eventos';
	$config['host'] = 'localhost:3303';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '1qa2ws3ed2013';
} else {
	$config['dbname'] = 'ic-eventos';
	$config['host'] = 'localhost:3306';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '1qa2ws3ed2013';
}
