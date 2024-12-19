<?php
phpinfo();

$servername = "162.0.209.84";
$username = "branqspi_kdqn";
$password = "CMO4mysql!";
$dbname = "branqspi_portfolio";
echo "<h1> hello sunshine!</h1>";
echo "<p>this is my portfolio page (not yet but it works for now)</p>";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
print($conn);
// Check connection
if ($conn->connect_error) {
    echo"Connection failed: " . $conn->connect_error;
}
echo "Connected successfully!";
?>
