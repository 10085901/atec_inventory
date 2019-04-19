<?php include '../view/header.php'; ?>

<div class="jumbotron">
    <div class="container">
        <h1 class="display-3">Add Item to Inventory</h1>
        <p>Alpine Transition and Education Center Inventory System</p>
    </div>
</div>

<div class="container">
    <?= $message ?>
    <h2>Add Item:</h2>
    <form action="/atec_test/add_inventory/index.php" method="post">
        <input type="hidden" name="action" value="add_inventory" />
        <div class="form-group">
            <label for="item_number">Item Number (Barcode):</label>
            <input type="text" class="form-control" placeholder="Enter Item Number" name="item_number" required>
        </div>

        <div class="form-group">
            <label for="item">Item:</label>
            <input type="text" class="form-control" placeholder="Enter Item Name" name="item" required>
        </div>

        <div class="form-group">
            <label for="item_cost">Cost: $</label>
            <input type="text" class="form-control" placeholder="Enter Item Cost" value="0.00" name="item_cost" required>
        </div>

        <div class="form-group">
            <label for="purchase_store">Store:</label>
            <select name="purchase_store">
                <?php foreach ($stores as $store) : ?>
                    <option value="<?= $store['SID'] ?>"><?= $store['store'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="form-group">
            <label for="item_quantity">Quantity:</label>
            <input type="text" class="form-control" placeholder="Enter Quantity" name="item_quantity" required>
        </div>

        <div class="form-group">
            <label for="minimum_item_quantity">Minimum Quantity:</label>
            <input type="text" class="form-control" placeholder="Enter Minimum Quantity" value="1" name="minimum_item_quantity" required>
        </div>

        <div class="form-group">
            <label for="consumable">Consumable:</label>
            <input type="radio" name="consumable" value="1" checked>&nbsp;Yes&nbsp;
            <input type="radio" name="consumable" value="0">&nbsp;No
        </div>

        <div class="form-group">
            <label for="item_color">Color:</label>
            <select name="item_color">
                <?php foreach ($colors as $color) : ?>
                    <option value="<?= $color['colorID'] ?>"><?= $color['color'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-lg">Add Inventory Item &raquo;</button>
        </div>
    </form>
</div>

<?php include '../view/footer.php'; ?>