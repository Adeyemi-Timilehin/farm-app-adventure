<?php
require("farmer.php");
$obj=new Farmer;
if(isset($_GET['id'])){
	$id=$_GET['id'];
	$output=$obj->delete_property($id);
  
 header("Location: load.php");
}

?>