<?php

    $user_email = $_POST['user_email'];
    $user_pass = $_POST['user_pass'];

    $check_user_email = filter_var(trim($user_email), FILTER_SANITIZE_STRING);
    $check_user_pass = filter_var(trim($user_pass), FILTER_SANITIZE_STRING);

    $check_user_pass = md5($check_user_pass . "asndkasj81329as");

    require_once '../Scripts/connect.php';

    $query = "SELECT * FROM `custom_users` WHERE `email` = '$check_user_email' AND `pass` = '$check_user_pass'";

    $result = $db->query($query);

    $user = $result->fetch_assoc();

    if (!$user) {
        header('Location: /?error=invalid_user');
        exit();
    }

    session_start();

    if(!isset($_SESSION['user'])) {
        $_SESSION['user_name'] = $user['name'];
        $_SESSION['user_email'] = $user['email'];
        $_SESSION['user_pass'] = $user['pass'];
    }

    $db->close();

    header('Location: /lk-test/');