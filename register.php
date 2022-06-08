<?php

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require_once("includes/config.php");
    require 'vendor/autoload.php';

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $active = 0;
    $verification_token = sha1($email . time());

    // check email already exists

    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        echo "Email already exists";
        exit();
    }

    $sql = "INSERT INTO users (name, email, password, active, verification_token) VALUES ('$name', '$email', '$password', '$active', '$verification_token')";
    $result = $conn->query($sql);
    if ($result) {
        // send verification email
        $to = $email;
        $subject = "Verify your email";
        $message = "http://localhost:8080/zeeon/Intern-Projects/php-practice/verify.php?token=" . $verification_token;
        $message .= '<a href="$message">Verify</a>';
        $headers = "From:aqibjavaidabbasi@gmail.com";
        sendMail($to, $subject, $message, $headers);
        echo "email sent successfully";

    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }


    function sendMail($to, $subject, $message, $headers)
    {
        $mail = new PHPMailer();
        
        $mail->SMTPDebug = 2;                   // Enable verbose debug output
        $mail->isSMTP();                        // Set mailer to use SMTP
        $mail->Host       = 'smtp.mailtrap.io';    // Specify main SMTP server
        $mail->SMTPAuth   = true;               // Enable SMTP authentication
        $mail->Username   = '328112e54907eb';     // SMTP username
        $mail->Password   = 'd6c98f9b3e7aad';         // SMTP password
        $mail->SMTPSecure = 'tls';              // Enable TLS encryption, 'ssl' also accepted
        $mail->Port       = 587;                // TCP port to connect to

        $mail->setFrom('zeeonsolution@gmail.com', 'ZEEON');           // Set sender of the mail
        $mail->addAddress($to);           // Add a recipient

        $mail->isHTML(true);                                  
        $mail->Subject = $subject;
        $mail->Body    = $message;

        $mail->send();
    }


?>