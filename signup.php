<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="register.php" method="post">
        <label for="">Name</label>
        <br/>
        <input type="text" name="name" placeholder="Full Name">
        <br/>
        <label for="">email</label>
        <br/>
        <input type="email" name="email" placeholder="Write Email">
        <br/>
        <label for="">password</label>
        <br/>
        <input type="password" name="password" placeholder="Write Password">
        <br/>
        <input type="submit" value="Register">
        <br/>
        <a href="index.php">Login</a>
    </form>
    
</body>
</html>