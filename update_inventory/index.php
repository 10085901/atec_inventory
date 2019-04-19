<?php
session_start();
require('../model/add_inventory_db.php');

$nav_item = ['nav-item', 'nav-item', 'nav-item', 'nav-item active'];
$_SESSION['current_page'] = 'Location:/atec_inventory/update_inventory/';

if (!isset($_SESSION['loginID'])) {
    header("Location:/atec_inventory/user_login/");
}elseif ($_SESSION['loginID'] != 759){
    header("Location:../not_authorized.php");
}

$message = '';

$action = filter_input(INPUT_POST, 'action');

if ($action == null) {
    $action = filter_input(INPUT_POST, 'action');
    if ($action == null) {
        include 'fetch_item.php';
    }
} elseif($action == 'fetch_item') {
    $item_number = filter_input(INPUT_POST, 'item_number');
    $fetch_item_by_item_number = fetch_item_by_item_number($item_number);
    include 'update_inventory.php';

} elseif ($action == 'update_inventory') {
    $item_number = filter_input(INPUT_POST, 'item_number');
    $item = filter_input(INPUT_POST, 'item');
    $item_cost = filter_input(INPUT_POST, 'item_cost');
    $item_quantity = filter_input(INPUT_POST, 'item_quantity');
    $minimum_item_quantity = filter_input(INPUT_POST, 'minimum_item_quantity');
    $consumable = filter_input(INPUT_POST, 'consumable');
    $item_color = filter_input(INPUT_POST, 'item_color');
    $purchase_store = filter_input(INPUT_POST, 'purchase_store');
    $update_inventory_item = update_inventory_item($item_number, $item, $item_cost, $item_quantity, $minimum_item_quantity, $consumable, $item_color, $purchase_store);

    if ($update_inventory_item > 0) {
        $message = 'Item Udated Successfully.';
        $action = null;
        header('Location:index.php');
    } else {
        $message = 'Error Updating Item!';
        $action = null;
        header('Location:index.php');
    }
}