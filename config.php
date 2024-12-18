<?php

$config = parse_ini_file('config.ini', true);
define('URL_ROOT', $config['DEVELOPMENT']['root']);
// define other constants as needed

// Load the config file
$config = parse_ini_file('config.ini', true);

// Extract database settings
$host = $config['database']['host'];
$user = $config['database']['user'];
$pass = $config['database']['pass'];
$name = $config['database']['name'];

// Test database connection
$conn = new mysqli($host, $user, $pass, $name);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully to the database!";
$conn->close();
