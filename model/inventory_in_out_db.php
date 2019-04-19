<?php
require('database.php');

global $db;
$query = 'SELECT * FROM users';
$statement = $db->prepare($query);
$statement->execute();
$users = $statement->fetchAll();

$query_2 = 'SELECT * FROM colors';
$statement = $db->prepare($query_2);
$statement->execute();
$colors = $statement->fetchAll();

$query_3 = 'SELECT * FROM store';
$statement = $db->prepare($query_3);
$statement->execute();
$stores = $statement->fetchAll();

function inventory_out(){

}

function inventory_in(){

}