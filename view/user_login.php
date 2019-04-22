<?php
$errors = filter_input(INPUT_GET, 'errors');
include '../view/header.php';
?>
<div class="jumbotron">
<div class="container">
<h2>User Login:</h2>
<form action="/atec_inventory/model/user_login_db.php" method="post">
<input type="hidden" name="action" value="login" />
<div class="form-group">
User Name:
&nbsp;
<input type="text" name="user_name" placeholder="User Name" size="10">
&nbsp;
Password:
&nbsp;
<input type="password" name="password" placeholder="Password" size="10">
</div><br>
<button type="submit" class="btn btn-primary btn-lg">Login</button>
<div class="errors"><?=$errors?></div>
</form>
</div>
</div>
<?php include '../view/footer.php';?>