<?php
session_start();
if(isset($_SESSION['userId'])){
    header("Location: index.php");
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
    <title>Login Page</title>
</head>
<body>
    <form method="post" action="authenticate.php" name="login-form">
            <label>User ID</label>
            <input type="text" name="user_id" required /><br><br>

            <label>Password</label>
            <input type="password" name="password" required /><br><br>

        <button type="submit" name="login" value="login">Log In</button>
    </form>
</body>
</html>