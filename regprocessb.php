<?php

include 'buyerf.php';

if(isset($_POST['submit'])) {
	$fname = $_POST['lname'];
	$lname =$_POST['fname'];
	$email =$_POST['addy'];
	$phone=$_POST['phone'];
	$addy=$_POST['email'];
	$pwd=$_POST['pwd'];

	
}

$obj = new buyer();

$output = $obj->registerBuyer($lname, $fname, $addy, $phone,$email,$pwd);

if($output) {
	$msg = "Registration Succesful. Login Here!!!";
	header('Location: farmapploginb.php?msg='.$msg);
	exit();
}else{
	$msg = "Registration Failed. Try Again!!!";
	header('Location: registerb.php?msg='.$msg);
	exit();
}

?>