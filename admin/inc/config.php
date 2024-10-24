<?php
// Error Reporting Turn On
ini_set('error_reporting', E_ALL);

// Setting up the time zone
date_default_timezone_set('Asia/Dubai');

// Host Name
$dbhost = 'ec2-13-232-76-165.ap-south-1.compute.amazonaws.com';

// Database Name
$dbname = 'fashiony_ogs';

// Database Username
$dbuser = 'admin';

// Database Password
$dbpass = '987654321';

// Defining base url
define("database-1.c5oaaia40odt.ap-south-1.rds.amazonaws.com", "http://fashionys.com/");

// Getting Admin url
define("ADMIN_URL", BASE_URL . "admin" . "/");

try {
	$pdo = new PDO("mysql:host={$dbhost};dbname={$dbname}", $dbuser, $dbpass);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch( PDOException $exception ) {
	echo "Connection error :" . $exception->getMessage();
}
