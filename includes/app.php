<?php

// Database Init
use Medoo\Medoo;
 
$db = new Medoo([

	'database_type' => DB_TYPE,
	'database_name' => DB_NAME,
	'server' => DB_HOST,
	'username' => DB_USERNAME,
	'password' => DB_PASSWORD,
	'charset' => 'utf8',
	'collation' => 'utf8mb4_unicode_ci',
 
]);

// Fpdi
use setasign\Fpdi\Fpdi; 

// Friendly URL
$request = $_SERVER['REQUEST_URI']; // If subdirectory: str_replace('','',$_SERVER['REQUEST_URI']);
$request = str_replace('/crm-zugueme','',$_SERVER['REQUEST_URI']);

// Routes
switch ($request) {
	case ''  :
	case '/' :
	case '/index.php' :
	case (preg_match("/^\/\?[^=]+\=[^&]+/",$request) ? true : false) :
		require dirname(__DIR__) . '/views/index.php';
		break;

		
	// Main / Dashboard
	case '/main' :
		require dirname(__DIR__) . '/views/main.php';
		break;

	
	case '/logout' :
		require dirname(__DIR__) . '/views/logout.php';
		break;

	default:
		require dirname(__DIR__) . '/views/404.php';
		break;
}


