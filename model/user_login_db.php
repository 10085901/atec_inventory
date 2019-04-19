<?php
require('database.php');

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