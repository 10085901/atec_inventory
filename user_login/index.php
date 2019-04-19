<?php
session_start();
require('../model/user_login_db.php');

$action = filter_input(INPUT_POST, 'action');

if ($action=='login') {
    $user_name=strtolower(filter_input(INPUT_POST, 'user_name'));
    $password=filter_input(INPUT_POST, 'password');
    $user=login($user_name, $password);
    if ($user==null) {
        header("Location:login.php?errors=Missing login credentials.");
    } else {
        $_SESSION['user_name']=$user['user_name'];
        $_SESSION['loginID']=$user['loginID'];
        header($_SESSION['return_to_page']);
    }
}

include('login.php');