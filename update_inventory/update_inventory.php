<?php
include '../view/header.php'; ?>

<div class="jumbotron">
    <div class="container">
        <h1 class="display-3">Update Existing Inventory</h1>
        <p>Alpine Transition and Education Center Inventory System</p>
    </div>
</div>

<div class="container">
    <?= $message ?>
    <h2>Update Item:</h2>
    <form action="index.php" method="post">
        <input type="hidden" name="action" value="update_inventory"/>
        <div class="form-group">
            <label for="item_number">Item Number (Barcode):</label>
            <input type="text" class="form-control" value="<?=$fetch_item_by_item_number['barcode']?>" name="item_number" required>
        </div>

        <div class="form-group">
            <label for="item">Item:</label>
            <input type="text" class="form-control" value="<?=$fetch_item_by_item_number['item']?>" name="item" required>
        </div>

        <div class="form-group">
            <label for="item_cost">Cost: $</label>
            <input type="text" class="form-control" value="<?=$fetch_item_by_item_number['cost']?>" name="item_cost" required>
        </div>

        <div class="form-group">
            <label for="purchase_store">Store:</label>
            <select name="purchase_store">
                <?php foreach ($stores as $store) : ?>
                    <option value="<?= $store['SID'] ?>" <?php echo ($fetch_item_by_item_number['SID'] == $store['SID'])? 'selected' : ''?>><?= $store['store'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="form-group">
            <label for="item_quantity">Quantity:</label>
            <input type="text" class="form-control" value="<?=$fetch_item_by_item_number['quantity']?>" name="item_quantity"required>
        </div>

        <div class="form-group">
            <label for="minimum_item_quantity">Minimum Quantity:</label>
            <input type="text" class="form-control" value="<?=$fetch_item_by_item_number['min_quantity']?>" name="minimum_item_quantity" required>
        </div>

        <div class="form-group">
            <label for="consumable">Consumable:</label><br>
            <input type="radio" name="consumable" value="1" <?php echo ($fetch_item_by_item_number['consumable'] == 1)? 'checked' : ''?> >Yes<br>
            <input type="radio" name="consumable" value="0" <?php echo ($fetch_item_by_item_number['consumable'] == 0)? 'checked' : ''?> >No<br>
        </div>

        <div class="form-group">
            <label for="item_color">Color:</label>
            <select name="item_color">
                <?php foreach ($colors as $color) : ?>
                    <option value="<?= $color['colorID'] ?>"><?= $color['color'] ?> <?php echo ($fetch_item_by_item_number['colorID'] == $color['colorID'])? 'selected' : ''?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-lg">Update Item &raquo;</button>
        </div>
    </form>
</div>

<?php include '../view/footer.php'; ?>