<?php
$servername = "127.0.0.1";
$username = "root"; // MySQL username
$password = ""; // MySQL password
$dbname = "sampeldb"; //MySQL database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>