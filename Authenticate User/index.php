<?php
session_start();
if(!isset($_SESSION['userId'])){
    header("Location: login.php");
    exit();
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Page</title>
</head>
<body>
    <h1 class="text-center">Welcome Back</h1>
    <ul style="list-style: none">
        <?php

            if(isset($_SESSION['UserCategory']) && $_SESSION['UserCategory'] === 'Admin'){
                echo '<li><a href="user-create.php">New User</a></li>';
            }
        ?>
        <li><a href="logo-out.php">Log Out</a></li></ul>
</body>
</html>