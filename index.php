<?php

echo "<h1>Page in progress</h1>";
echo "<p>currently testing databases to migrate portfolio, come back soon</p>";

$config = parse_ini_file('config.ini', true);

// Database credentials from config file
$host = $config['database']['host'];
$user = $config['database']['user'];
$pass = $config['database']['pass'];
$name = $config['database']['name'];

// Create connection
$conn = new mysqli($host, $user, $pass, $name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully!";

// Test a query
$sql = "SELECT * FROM pageinfo LIMIT 10";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"] . " - Name: " . $row["name"] . "<br>";
    }
} else {
    echo "No results found.";
}

$conn->close();
?>
