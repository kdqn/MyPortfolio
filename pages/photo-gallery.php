<?php

$config = parse_ini_file('../config.ini', true);
$environment = $config['ENVIRONMENT'];
$URL_BASE = $config[$environment]['root'];
define('URL_ROOT', "$URL_BASE");
define('APP_ROOT', dirname(__FILE__,1));
// include_once(APP_ROOT . '/services/database.controller.php');

//Pull database credentials from config.ini
$user = $config[$environment]['user'];
$pass = $config[$environment]['pass'];
$host = $config[$environment]['host'];
$name = $config[$environment]['name'];

// try
// {
// 	$conn = new PDO("mysql:host=$host;dbname=$name", $user, $pass);
// 	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// 	echo "Connected Successfully", PHP_EOL;
//   $database = new DatabaseService($conn);
// } 
// catch(PDOException $e)
// {
// 	echo "Connection failed: " . $e->getMessage();
// }

// if (isset($database))
// {
//   $controller = new DatabaseController($database);
// }



include_once('../views/nav.view.php');
$data = [
    'pageTitle' => 'Cayden | Photo Gallery',
    'header' => 'IN PROGRESS - testing... CONTENT ADDED SOON',
];
include_once('../views/head.view.php');
include_once('../views/header.view.php');

?>


<?php 
include_once('../views/footer.view.php');


?>
