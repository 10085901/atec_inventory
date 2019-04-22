<?php
require('database.php');

global $db;
$query_colors = "SELECT * FROM colors
                    WHERE color NOT LIKE 'Not Applicable'
                    ORDER BY color ASC";
$statement = $db->prepare($query_colors);
$statement->execute();
$colors = $statement->fetchAll();

$query_store = 'SELECT * FROM store
                    ORDER BY store ASC';
$statement = $db->prepare($query_store);
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

function add_store($store_count, $store){
    global $db;
    $query = 'INSERT INTO store (SID, store)
                VALUES (:store_count, :store)';
    $statement = $db->prepare($query);
    $statement->bindParam(':store_count', $store_count);
    $statement->bindParam(':store', $store);
    $statement->execute();

    return $statement->rowCount();
}

function add_color($color_count, $color){
    global $db;
    $query = 'INSERT INTO colors (colorID, color)
                VALUES (:color_count, :color)';
    $statement = $db->prepare($query);
    $statement->bindParam(':color_count', $color_count);
    $statement->bindParam(':color', $color);
    $statement->execute();

    return $statement->rowCount();
}