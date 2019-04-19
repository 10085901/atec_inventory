<?php
session_start();

$nav_item = ['nav-item active', 'nav-item', 'nav-item', 'nav-item', 'nav-item', 'nav_item'];
$_SESSION['return_to_page'] = 'Location:/atec_inventory/index.php';

include 'view/header.php';

?>
    <div class="jumbotron">
        <div class="container">
            <h1 class="display-3">Alpine Transition and Education Center Inventory System</h1>
            <p>This system is designed to track paper goods in the lunchroom, cleaning supplies in the janitorial closet, and office supplies from the library.</p>
            <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h2>Check-in/out</h2>
                <p>Check-out an item to be used, or check-in an item that you are finished using</p>
                <p><a class="btn btn-secondary" href="atec_inventory/inventory_in_out" role="button">Check-in/out &raquo;</a></p>
            </div>
            <div class="col-md-4">
                <h2>Generate Shopping List or Report</h2>
                <p>Inventory running low? Time to re-order supplies? Use this section to automatically generate a shopping list of needed items. Need to know what assets are on-hand? Generate a report here. </p>
                <p><a class="btn btn-secondary" href="atec_inventory/shopping_list" role="button">Generate Shopping List &raquo;</a></p>
                <p><a class="btn btn-secondary" href="atecinventory/usage_report" role="button">Generate Usage Report &raquo;</a></p>
            </div>
            <div class="col-md-4">
                <h2>Add to Inventory</h2>
                <p>Once shopping is completed, update quantities and add new items here</p>
                <p><a class="btn btn-secondary" href="atec_inventory/add_inventory" role="button">Add New Inventory Items &raquo;</a></p>
                <p><a class="btn btn-secondary" href="atec_inventory/update_inventory" role="button">Update Inventory Items &raquo;</a></p>
            </div>
        </div>
    </div>

<?php include 'view/footer.php'; ?>