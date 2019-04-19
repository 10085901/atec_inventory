<?php
include '../view/header.php';
?>
<div class="jumbotron">
    <div class="container">
        <h1 class="display-3">Update Existing Inventory</h1>
        <p>Alpine Transition and Education Center Inventory System</p>
    </div>
</div>

<div class="container">
<h2>Update Item:</h2>
<?=$message?>
<form action="index.php" method="post">
<input type="hidden" name="action" value="fetch_item" />
<div class="form-group">
Item Number (Barcode):
&nbsp;
<input type="text" class='form-control' name="item_number" placeholder="Enter Item Number or Barcode"><br>
<div class="form-group">
<button type="submit" class="btn btn-primary btn-lg">Search &raquo;</button>
</div>
</form>
</div>
<?php include '../view/footer.php';?>