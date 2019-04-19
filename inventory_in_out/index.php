<?php
session_start();
require '../model/inventory_in_out_db.php';

$nav_item = ['nav-item', 'nav-item active', 'nav-item', 'nav-item',];
$_SESSION['return_to_page'] = 'Location:/atec_inventory/inventory_in_out/';

if (!isset($_SESSION['loginID'])) {
    header("Location:/atec_inventory/user_login/");
}

include 'inventory_in_out.php';