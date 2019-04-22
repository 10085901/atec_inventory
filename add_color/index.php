<?php
session_start();
require('../model/add_inventory_db.php');

$nav_item = ['nav-item', 'nav-item', 'nav-item', 'nav-item active'];
$_SESSION['return_to_page'] = 'Location:/atec_inventory/add_color/';
$message = '';
$color_count = 1;
foreach ($colors as $color){
    $color_count++;
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
            include('add_color.php');
        }
    } elseif ($action == 'add_color') {
        $color_count = filter_input(INPUT_POST, 'color_count');
        $color = filter_input(INPUT_POST, 'color');
        $add_color = add_color($color_count, $color);

        if ($add_color > 0) {
            $message = '<div class="alert alert-success">
                        <strong>Success!</strong> Color added to database.
                        </div>';
        } else {
            $message = '<div class="alert alert-warning">
                        <strong>Warning!</strong> Failed to add color to database.
                        </div>';
        }
        $action = null;
        $color_count++;
        include 'add_color.php';
    }
}