<?php
session_start();
require('../model/add_inventory_db.php');

$nav_item = ['nav-item', 'nav-item', 'nav-item', 'nav-item active'];
$_SESSION['return_to_page'] = 'Location:/atec_inventory/add_store/';
$message = '';
$store_count = 1;
foreach($stores as $store){
    $store_count++;
}
$action = filter_input(INPUT_POST, 'action');

if (!isset($_SESSION['loginID'])) {
    include '../view/user_login.php';
}elseif ($_SESSION['loginID'] != 759){
    include '../view/not_authorized.php';
}elseif ($_SESSION['loginID'] == 759){
    if ($action == null) {
        $action = filter_input(INPUT_POST, 'action');
        if ($action == null) {
            include('add_store.php');
        }
    } elseif ($action == 'add_store') {
        $store = filter_input(INPUT_POST, 'store');
        $store_count = filter_input(INPUT_POST, 'store_count');
        $add_store = add_store($store_count, $store);

        if ($add_store > 0) {
            $message = '<div class="alert alert-success">
                        <strong>Success!</strong> Store added to database.
                        </div>';
        } else {
            $message = '<div class="alert alert-warning">
                        <strong>Warning!</strong> Failed to add store to database.
                        </div>';
        }
        $action = null;
        $store_count++;
        include 'add_store.php';
    }
}