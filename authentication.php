<?php
session_start();
require_once 'includes/config.php';

// login backend code

$email = $_POST['email'];
$password = $_POST['password'];

$sql = 'SELECT * FROM users WHERE email = "' . $email . '"';
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if (password_verify($password, $row['password'])) {
        if ($row['active'] == 1) {
            $_SESSION['user'] = $row;
            header('Location: dashboard.php');
        } else {
            header('Location: unverifed.php');
        }
    } else {
        echo "Invalid password";
    }
} else {
    echo "abc";
    header('Location: index.php');
}

?>