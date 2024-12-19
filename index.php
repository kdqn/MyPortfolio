<h1>hello sunshine!</h1>
<p>this is my portfolio page (not yet but yk what I mean)</p>
  

<?php
$servername = "162.0.209.84";
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
?>
