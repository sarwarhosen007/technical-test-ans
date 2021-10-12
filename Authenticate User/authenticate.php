<?php

    session_start();
    include('config.php');
    if (isset($_POST['login'])) {
        $user_id = $_POST['user_id'];
        $password = $_POST['password'];

        $query = $connection->prepare("SELECT * FROM users WHERE user_id=:user_id");
        $query->bindParam("user_id", $user_id, PDO::PARAM_STR);
        $query->execute();
        $result = $query->fetch(PDO::FETCH_ASSOC);

        if (!$result) {
            echo '<p class="error">Username password combination is wrong!</p>';
        } else {
            if (md5($password) === $result['password']) {
                $_SESSION['UserCategory'] = $result['UserCategory'];
                $_SESSION['userId'] = $result['user_id'];
                header("Location: index.php");
                exit();
            } else {
                echo '<p class="error">Username password combination is wrong</p>';
                echo '<a href="login.php">Login Again</a>';
            }
        }
    }
