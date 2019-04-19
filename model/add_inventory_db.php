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

function fetch_item_by_item_number($item_number){
    global $db;
    $query = 'SELECT *
                FROM inventory
                WHERE barcode = :item_number';
    $statement = $db->prepare($query);
    $statement->bindParam(':item_number', $item_number);
    $statement->execute();
    $fetched_item = $statement->fetch();

    return $fetched_item;
}

function add_inventory_item($item_number, $item, $item_cost, $item_quantity, $minimum_item_quantity, $consumable, $item_color, $purchase_store){
    global $db;
    $query = 'INSERT INTO inventory (barcode, colorID, consumable, cost, item, min_quantity, quantity, SID)
                VALUES (:item_number, :item_color, :consumable, :item_cost, :item, :minimum_item_quantity, :item_quantity, :purchase_store)';
    $statement = $db->prepare($query);
    $statement->bindParam(':item_number', $item_number);
    $statement->bindParam(':item_color', $item_color);
    $statement->bindParam(':consumable', $consumable);
    $statement->bindParam(':item_cost', $item_cost);
    $statement->bindParam(':item', $item);
    $statement->bindParam(':minimum_item_quantity', $minimum_item_quantity);
    $statement->bindParam(':item_quantity', $item_quantity);
    $statement->bindParam(':purchase_store', $purchase_store);
    $statement->execute();

    return $statement->rowCount();
}

function update_inventory_item($item_number, $item, $item_cost, $item_quantity, $minimum_item_quantity, $consumable, $item_color, $purchase_store){
    global $db;
    $query = 'UPDATE inventory
            SET item = :item,
                cost = :item_cost,
                quantity = :item_quantity,
                min_quantity = :minimum_item_quantity,
                consumable = :consumable,
                colorID = :item_color,
                SID = :purchase_store
            WHERE barcode = :item_number';
    $statement = $db->prepare($query);
    $statement->bindParam(':item_number', $item_number);
    $statement->bindParam(':item_color', $item_color);
    $statement->bindParam(':consumable', $consumable);
    $statement->bindParam(':item_cost', $item_cost);
    $statement->bindParam(':item', $item);
    $statement->bindParam(':minimum_item_quantity', $minimum_item_quantity);
    $statement->bindParam(':item_quantity', $item_quantity);
    $statement->bindParam(':purchase_store', $purchase_store);
    $statement->execute();

    return $statement->rowCount();
}