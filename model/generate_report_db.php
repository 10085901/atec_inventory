<?php
require('database.php');

global $db;
$query = 'SELECT * FROM colors';
$statement = $db->prepare($query);
$statement->execute();
$colors = $statement->fetchAll();

$query_2 = 'SELECT * FROM store';
$statement = $db->prepare($query_2);
$statement->execute();
$stores = $statement->fetchAll();

function shopping_list(){

}

function usage_report(){

}

//select i.item as "We need to buy more of", i.quantity, i.min_quantity, c.color from inventory as  i left join colors as c on i.colorID = c.colorID where quantity < min_quantity;