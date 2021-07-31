<?php

include 'farmer.php';

if(isset($_POST['submit'])) {
	$fname = $_POST['fname'];
	$lname =$_POST['lname'];
	$email =$_POST['email'];
	$phone=$_POST['phone'];
	$addy=$_POST['addy'];
	$pwd=$_POST['pwd'];
	$comp=$_POST['company_addy'];
	$web=$_POST['company_website'];

	
}

$obj = new farmer();

$output = $obj->registerFarmer($fname, $lname, $email, $phone,$addy,$pwd,$comp,$web);

if($output) {
	$msg = "Registration Succesful. Login Here!!!";
	header('Location: farmapplogin.php?msg='.$msg);
	exit();
}else{
	$msg = "Registration Failed. Try Again!!!";
	header('Location: register.php?msg='.$msg);
	exit();
}

?>