<?php

include 'buyerf.php';

if(isset($_POST['submit'])) {
	
	$email =$_POST['email'];
	
	$pwd=$_POST['pwd'];

	
}

$obj = new buyer();

$output = $obj->loginbuyer($email, $pwd);

	header("Location: dashboardb.php");
	exit();

echo "<pre>";
print_r($output);
echo "</pre>";


?>
