<?php include '../view/header.php'; ?>

<div class="jumbotron">
    <div class="container">
        <h1 class="display-3">Add New Color to Database</h1>
        <p>Alpine Transition and Education Center Inventory System</p>
    </div>
</div>

<div class="container">
    <h2>Add Color:</h2>
    <form action="/atec_inventory/add_color/index.php" method="post">
        <input type="hidden" name="action" value="add_color">
        <input type="hidden" name="color_count" value="<?=$color_count?>">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Enter New Color" name="color" required>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-lg">Add to Database &raquo;</button>
        </div>
    </form>
</div>

<?php include '../view/footer.php'; ?>