<?php
session_start();
require('../model/add_inventory_db.php');

$nav_item = ['nav-item', 'nav-item', 'nav-item', 'nav-item active'];
$_SESSION['return_to_page'] = 'Location:/atec_inventory/add_inventory/';

if (!isset($_SESSION['loginID'])) {
    header("Location:/atec_inventory/user_login/");
}elseif ($_SESSION['loginID'] != 759){
    header("Location:/atec_inventory/not_authorized.php");
}

$message = '';

$action = filter_input(INPUT_POST, 'action');

if ($action == null) {
    $action = filter_input(INPUT_POST, 'action');
    if ($action == null) {
        include('add_inventory.php');
    }
} elseif ($action == 'add_inventory') {
    $item_number = filter_input(INPUT_POST, 'item_number');
    $item = filter_input(INPUT_POST, 'item');
    $item_cost = filter_input(INPUT_POST, 'item_cost');
    $item_quantity = filter_input(INPUT_POST, 'item_quantity');
    $minimum_item_quantity = filter_input(INPUT_POST, 'minimum_item_quantity');
    $consumable = filter_input(INPUT_POST, 'consumable');
    $item_color = filter_input(INPUT_POST, 'item_color');
    $purchase_store = filter_input(INPUT_POST, 'purchase_store');
    $add_inventory_item = add_inventory_item($item_number, $item, $item_cost, $item_quantity, $minimum_item_quantity, $consumable, $item_color, $purchase_store);

    if ($add_inventory_item > 0) {
        $message = 'Item Added Successfully.';
    } else {
        $message = 'Error Adding Item!';
    }
    $action = null;
    include('add_inventory.php');
}