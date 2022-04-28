<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="process.php" method="get">
        <label for="username">Username</label><br>
        <input type="text" name="username"><br>
        <br>
        <label for="">Password</label><br>
        <input type="password" name="password"><br>
        <button type="submit">Login</button><br>
    </form>
</body>
</html>