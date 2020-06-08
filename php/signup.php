<?php

if (isset($_POST['signup-submit'])) {

    require "./db.php";

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "INSERT INTO users(usernameUsers, emailUsers, passUsers) VALUES('$username', '$email', '$password');";
    header("Location: ../login-out.php");
    $conn->query($sql);
} else {
    header("Location: ../signup.php");
    exit();
}