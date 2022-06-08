<?php

// datbase connection

$conn = new mysqli("localhost", "root", "", "zi_php_practice");

// check connection status

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$messages = [
    '1' => 'Successfully registered',
    '2' => 'Email already exists',
    '3' => 'Invalid email or password',
    '4' => 'Email not verified',
    '5' => 'Invalid token',
    '6' => 'Account verified successfully',
]

?>