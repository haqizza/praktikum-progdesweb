<?php
    session_start();

    if(!isset($_SESSION['username'])){
        header('Location: index.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h1>Home</h1>
    <p>Selamat datang <?php echo $_SESSION['nama'] ?></p>
    <a href="logout.php">
        <button>Logout</button>
    </a>
</body>
</html>

