<?php
session_start();
error_reporting(0);
if (isset($_SESSION['is_login']) || $_SESSION['is_login'] == 'yes') {
    header("Location: /home/home.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <?php 
        include_once('layout/header.php');
    ?>

    <form action="home.php" method="post">
        Username: <input type="text" name="username" id="name" placeholder="Username" Required />
        <br />
        Password: <input type="password" name="password" id="password" placeholder="Password" Required />
        <br />
        <button>Login</button>
    </form>
    Do not have account?
    <a href="/home/signup.php">Register</a>
    <?php
        include_once('layout/footer.php');
    ?>
</body>

</html>