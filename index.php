<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <header style="background-color:blueviolet;color:white;">
        <h1>ZEEON</h1>
    </header>
    <form method="post" action="authentication.php">
        <label for="">username/email</label>
        <br/>
        <input type="text" name="email" placeholder="Write Email">
        <br/>
        <label for="">password</label>
        <br/>
        <input type="password" name="password" placeholder="Write Password">
        <br/>
        <input type="submit" value="Login">
        <br/>
        <a href="signup.php">Create Account</a>
    </form>

    <footer style="background-color:blueviolet;color:white;">
        <p>&copy; Copyright ZEEON 2020</p>
    </footer>
    
</body>
</html>