<?php
require 'init.php'; 
if(isset($_POST['act']) && is_numeric($_POST['act'])){
	$id = intval($_POST['act']);
	$stmt = $conn->prepare("SELECT * FROM subact WHERE act_id = ?");
	$stmt->execute(array($id));
	$subacts = $stmt->fetchAll();
	echo "<select name='subcat' class='form-control'>";
	foreach($subacts as $sub){
		
		echo "<option value='". $sub['id'] . "'>" . $sub['name'] . "</option>";
		
	}
	echo "</select>";
	exit();
}