<?php
//header('Content-Type: text/html; charset=iso-8859-1');
if (!isset($_SESSION['user_name'])) {
    $logged_in = '<a class="btn btn-success navbar-btn" href="/atec_inventory/user_login" role="button">Login</a>';
} else
    $logged_in = '<a class="btn btn-danger navbar-btn" href="/atec_inventory/logout.php" role="button">Logout</a>';
?>

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="description" content="Alpine Transition and Education Center Inventory System
This system is designed to track paper goods in the lunchroom, cleaning supplies in the janitorial closet, and office supplies from the library.">
    <meta name="author" content="Group 6 UVU">

    <title>ATEC Inventory System</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/jumbotron/">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="manifest" href="/manifest.json">
    <meta name="theme-color" content="#ffffff">

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">ATEC Inventory</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="<?=$nav_item[0]?>">
                    <a class="nav-link" href="/atec_inventory/">Home</a>
                </li>
                <li class="<?=$nav_item[1]?>">
                    <a class="nav-link" href="/atec_inventory/inventory_in_out/">Check-In or Out</a>
                </li>
                <li class="nav-item dropdown <?=$nav_item[2]?>">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Lists & Reports
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/atec_inventory/shopping_list/">Generate Shopping List</a>
                        <a class="dropdown-item" href="/atec_inventory/usage_report/">Generate Usage Report</a>
                    </div>
                </li>
                <li class="nav-item dropdown <?=$nav_item[3]?>">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Add or Update Item
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/atec_inventory/add_inventory/">Add an Item</a>
                        <a class="dropdown-item" href="/atec_inventory/update_inventory/">Update an Item</a>
                    </div>
                </li>
                <li class="nav-item">
                    &nbsp;
                    <?=$logged_in?>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-primary navbar-btn" type="submit">Search</button>
            </form>
        </div>
    </nav>