<?php
include 'connectionDB.php';

$id = isset($_POST['userid']);

if ($id == '') {
    $sql = "SELECT * FROM users";
    $result = $conn->query($sql);
    $users = [];
    if ($result->num_rows > 0 ) {
        while ($row = $result->fetch_assoc()) {
            $users[] = $row;        
        }
        echo json_encode($users);    
    } else {
        return "User not found";
    }

} else {
    $userid = $_POST['userid'];
    $sql = "SELECT * FROM users WHERE id='$userid'";        
    $result = $conn->query($sql)->fetch_object();
    echo json_encode($result);
}

$conn->close();
?>