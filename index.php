<?php

echo "<h1>Page in progress</h1>";
echo "<p>currently testing databases to migrate portfolio, come back soon</p>";
// Database credentials
$servername = "localhost";
$username = "branqspi_kdqn";
$password = "CMO4mysql!";
$dbname = "branqspi_portfolio";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully!";

// Test a query
$sql = "SELECT * FROM your_table_name LIMIT 10";
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
