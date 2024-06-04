<?php
include 'connectionDB.php';

$name = $_POST['name'];
$email = $_POST['email'];

if (!isset($_POST['id'])) {
    $sql = "INSERT INTO users (name, email) VALUES ('$name', '$email')";
    echo "Record created successfully";
} else {
    $userid = $_POST['id'];    
    $sql = "UPDATE users SET name='$name', email='$email' WHERE id=$userid";
    echo "Record updated successfully";
}

if ($conn->query($sql) != TRUE) {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>