<?php

    include('config.php');
    if (isset($_POST['user_id']) && isset($_POST['user_name']) && isset($_POST['password']) && isset($_POST['UserCategory']) ) {

        $user_id = $_POST['user_id'];
        $user_name = $_POST['user_name'];
        $password = $_POST['password'];
        $UserCategory = $_POST['UserCategory'];

        $pdoQuery = "INSERT INTO `users`(`user_id`, `user_name`, `password`,`UserCategory`)
        VALUES (:user_id,:user_name,:password,:UserCategory)";
        $pdoResult = $connection->prepare($pdoQuery);

        $pdoExec = $pdoResult->execute(array(":user_id"=>$user_id,":user_name"=>$user_name,":password"=>md5
        ($password),":UserCategory"=>$UserCategory));
         
        if($pdoExec)
        {
            echo '<p class="success">User Created Successfully</p>';
        }else{
            echo '<p class="error">Server Error</p>';
        }
    }else{
        echo '<p class="success">Data Validation Failed</p>';
    }

echo '<a href="index.php">Back To Home</a>';
