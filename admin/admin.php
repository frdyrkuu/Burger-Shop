<?php
session_start();

include "connection.php";

if (isset($_POST['username']) && isset($_POST['password'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $res = $conn->query("SELECT user_password FROM admin_account WHERE user_admin = '$username'");
    $name = $conn->query("SELECT name FROM admin_account WHERE user_admin = '$username'");

    $adminName = $name->fetch_assoc()['name'];

    $hashed_password = $res->fetch_assoc()['user_password'];

    if (password_verify($password, $hashed_password)) {

        $_SESSION['name'] = $adminName;

        header("Location: dashboard.php");
        exit();

    } else {
        header("Location: administrator.php?error=Incorrect password");
        exit();
    }
}
?>