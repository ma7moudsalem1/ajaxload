<?php 
require 'init.php'; 
require  LAYOUTS . 'header.php'; 
?>
<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$name 	  = $_POST['name'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$act 	  = $_POST['act'];
	$subcat   = $_POST['subcat'];

	$stmt = $conn->prepare("INSERT INTO users(name, username, password, act_id, subact_id) VALUES( :zname, :zusername, :zpassword, :zact, :zsub )");
	$stmt->execute(array(
		'zname' 	=> $name,
		'zusername' => $username,
		'zpassword' => $password,
		'zact' 		=> $act,
		'zsub' 		=> $subcat
		));
?>
<div class="alert alert-success">Added succefully</div>
<?php } ?>
<form class="login" method="POST" action="<?= $_SERVER['PHP_SELF'] ?>" >
        <h1 class="text-center">Add</h1>
        <input type="text" name="name" class="form-control" placeholder="name" />
        <input type="text" name="username" class="form-control" placeholder="Username" />
        <input type="password" name="password" class="form-control" placeholder="Password" />
        <!--<input type="password" name="repass" class="form-control" placeholder="ConfirmPassword" />-->
        <select name="act" id="act" class="form-control" style="margin-top: 10px;" onchange="change_active()">
        <option selected="">Select</option>
	        <?php 
	        	$stmt = $conn->prepare("SELECT * FROM act");
	        	$stmt->execute();
	        	$acts = $stmt->fetchAll();
	        	foreach($acts as $act){
	        ?>
        	<option value="<?= $act['id'] ?>"><?= $act['name'] ?></option>

        	<?php } ?>
        </select>
        <div id="sel_sub">
        	<select name="sub" class="form-control" style="margin-top: 10px;">
        		<option>select</option>
        	</select>
        </div>
        
        <input type="submit" name="submit" class="btn btn-primary btn-block" vlue="Join now" />
</form>
<?php  require  LAYOUTS . 'footer.php';  ?>