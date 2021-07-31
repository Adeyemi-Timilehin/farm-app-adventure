<?php
session_start();
require "farmer.php";
$obj=new Farmer;
if(isset($_POST['submit'])){
    $farmerid=$_SESSION['id'];
    $produce_name=$_POST['produce_name'];
    $description=$_POST['description'];
    $picture=$_FILES['picture'];
    $quantity=$_POST['quantity'];
    $price=$_POST['price'];
    $price=$_POST['price'];
    $output=$obj->insertproduce($produce_name,$description, $quantity,$price,$farmerid,$picture);
    if($output){
        header("Location: load.php?result='$output'");
    }
    
}

?>



   

