<?php include '../view/header.php'; ?>

<div class="jumbotron">
    <div class="container">
        <h1 class="display-3">Add New Store to Database</h1>
        <p>Alpine Transition and Education Center Inventory System</p>
    </div>
</div>

<div class="container">
    <h2>Add Store:</h2>
    <form action="/atec_inventory/add_store/index.php" method="post">
        <input type="hidden" name="action" value="add_store">
        <input type="hidden" name="store_count" value="<?=$store_count?>">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Enter New Store" name="store" required>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-lg">Add to Database &raquo;</button>
        </div>
    </form>
    <?=$message?>
</div>

<?php include '../view/footer.php'; ?>