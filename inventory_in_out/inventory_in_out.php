<?php include '../view/header.php'; ?>

<div class="jumbotron">
    <div class="container">
        <h1 class="display-3">Inventory In/Out</h1>
        <p>Alpine Transition and Education Center Inventory System</p>
    </div>
</div>

<div class="container">
    <h2>Check-in or Out</h2>
    <p>Check-out an item to be used</p>
    <form action="index.php" method="post">
        <input type="hidden" name="action" value="checkout_by_item_number">
        <div class="form-group">
            Name:&nbsp;
            <select name="user_name">
                <option value="#">Select a User</option>
                <?php foreach ($users as $user) : ?>
                    <option value="<?= $user['UID'] ?>"><?= $user['name'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label for="item_number">Item Number (Barcode):</label><br>
            <input type="number" placeholder="Enter Item Number" name="item_number" required>
        </div>
        <div class="form-group">
            <label for="item_quantity">Item Quantity:</label><br>
            <input type="number" name="item_quantity" placeholder="Enter Quantity" required>
        </div>
        <div class="form-group">
            <label for="item_in_out">Select In or Out:</label>
            <input type="radio" name="item_in_out" value="1">&nbsp;In&nbsp;
            <input type="radio" name="item_in_out" value="0" checked>&nbsp;Out
            </select>
        </div>
        <p><a class="btn btn-primary btn-lg" href="checkin-out.html" role="button">Submit &raquo;</a></p>
    </form>
</div>

<div class="container">
    <h2>Item List</h2>
    <p>List of items currently on-hand that are available to check out:</p>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Item Name</th>
                <th>Item Number</th>
                <th>Item Quantity</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Cleaning Supplies</td>
                <td>0001</td>
                <td>12</td>
            </tr>
            <tr>
                <td>Notebook Paper</td>
                <td>0002</td>
                <td>85</td>
            </tr>
            <tr>
                <td>Pencils</td>
                <td>0003</td>
                <td>200</td>
            </tr>
        </tbody>
    </table>
</div>

<?php include '../view/footer.php'; ?>