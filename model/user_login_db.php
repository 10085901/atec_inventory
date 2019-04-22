<?php
session_start();
require('database.php');

$action = filter_input(INPUT_POST, 'action');

if ($action=='login') {
    $user_name=strtolower(filter_input(INPUT_POST, 'user_name'));
    $password=filter_input(INPUT_POST, 'password');
    $user=login($user_name, $password);
    if ($user==null) {
        header("Location:../view/user_login.php?errors=Missing login credentials.");
    } else {
        $_SESSION['user_name']=$user['user_name'];
        $_SESSION['loginID']=$user['loginID'];
        header($_SESSION['return_to_page']);
    }
}

function login($user_name, $password){
    global $db;
    $query = 'SELECT loginID, user_name FROM login WHERE user_name = :user_name
    AND password = md5(:password)';
    $statement = $db->prepare($query);

    $statement->bindParam(':user_name', $user_name);
    $statement->bindParam(':password', $password);

    $statement->execute();
    $user = $statement->fetch(PDO::FETCH_BOTH);
    $statement->closeCursor();

    return $user;
 }