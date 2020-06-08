<?php

if (isset($_POST['login-submit'])) {

    require "./db.php";

    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM users WHERE usernameUsers = '$username' AND passUsers = '$password'";
    
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    if ($result->num_rows > 0) {
        session_start();
        $_SESSION['username'] = $row['usernameUsers'];
        header("Location: ../login-out.php");
    } else {
        exit();
    }
} 
