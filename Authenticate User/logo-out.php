<?php
session_start();
unset($_SESSION["userId"]);
unset($_SESSION["UserCategory"]);
header("Location:login.php");
?>