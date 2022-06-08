<?php
$name = $_SESSION['user']['name'];
$email = $_SESSION['user']['email'];

?>

<div>
    <h1>Welcome <?php echo $name; ?></h1>
    <p>Your email is <?php echo $email; ?></p>
</div>