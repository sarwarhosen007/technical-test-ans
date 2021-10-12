<?php
session_start();
if(($_SESSION['UserCategory'] ?? '') !== 'Admin'){
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
    <title>Home Page</title>
</head>
<body>
    <form method="post" action="submit-user.php" name="submit-form">
        <label>User Name</label>
        <input type="text" name="user_name" required /><br><br>
        <label>User ID</label>
        <input type="text" name="user_id" required /><br><br>
        <label>Password</label>
        <input type="password" name="password" required /><br><br>

        <label>User Category</label>
        <select name="UserCategory" required>
            <option value="Admin">Admin</option>
            <option value="Customer">Customer</option>
        </select><br><br>
        <button type="submit" name="user" value="Save User">Save User</button>
    </form>
</body>
</html>