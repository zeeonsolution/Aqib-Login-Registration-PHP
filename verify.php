<?php
require_once 'includes/config.php';

//verify email

$token = $_GET['token'];

$sql = "SELECT * FROM users WHERE verification_token = '$token'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $sql = "UPDATE users SET active = 1, verification_token = null WHERE verification_token = '$token'";
    $result = $conn->query($sql);
    if ($result) {
        echo "Account verified successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "Invalid token";
}

?>