<?php
session_start();
if (!isset($_SESSION['user']))
{
	header('location: ../pages/admin.php');
};

$config = parse_ini_file('../config.ini', true);
$environment = $config['ENVIRONMENT'];
$URL_BASE = $config[$environment]['root'];
define('URL_ROOT', "$URL_BASE");
define('APP_ROOT', dirname(__FILE__,2));
include_once(APP_ROOT . '/services/database.controller.php');

//Pull database credentials from config.ini
$user = $config[$environment]['user'];
$pass = $config[$environment]['pass'];
$host = $config[$environment]['host'];
$name = $config[$environment]['name'];

try
{
	$conn = new PDO("mysql:host=$host;dbname=$name", $user, $pass);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	echo "Connected Successfully", PHP_EOL;
    $database = new DatabaseService($conn);
} 
catch(PDOException $e)
{
	echo "Connection failed: " . $e->getMessage();
}

if (isset($database))
{
  $controller = new DatabaseController($database);
  if (isset($_POST['page']))
  {
  try
    {
        $controller->createInfo($_POST['page'], $_POST['title'], $_POST['content'], $_POST['languages'], $_POST['link']);
        header('location: ../pages/admin.php');
    }
    catch(PDOException $e)
    {
        echo "Entry Failed: " . $e->getMessage();
        echo "<br><a href=\"../pages/admin.php\">Admin Page</a>";
    }
  }
  else
  {
    exit;
  }
}
$conn = null;
?>