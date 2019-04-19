<?php
session_start();
require '../model/generate_report_db.php';

$nav_item = ['nav-item', 'nav-item', 'nav-item active', 'nav-item'];
$_SESSION['return_to_page'] = 'Location:/atec_inventory/shoping_list/';

if (!isset($_SESSION['loginID'])) {
    header("Location:/atec_inventory/user_login/");
}

include 'generate_list.php';