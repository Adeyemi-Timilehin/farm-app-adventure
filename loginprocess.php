<?php

include 'farmer.php';

if(isset($_POST['submit'])) {
	
	$email =$_POST['email'];
	
	$pwd=$_POST['pwd'];

	
}

$obj = new farmer();

$output = $obj->loginFarmer($email, $pwd);

if($output){
	$_SESSION['user']=$output;
	header("Location: dashboard.php");

}
else{
	header("location:farmapplogin.php?msg='incorrect Password'");
}


// echo "<pre>";
// print_r($output);
// echo "</pre>";


?>
