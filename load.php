<?php

session_start();

if(!isset($_SESSION['user'])) {
	header("Location: register.php");
exit();

}

$id = $_SESSION['user'];

require "farmer.php";

$obj = new Farmer();

$output = $obj->getDetails($id);
$out=$obj->getproduce($id);
// echo "<pre>";
// print_r($out);
// echo "</pre>";
?>

<!doctype html>
<html lang="eng">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,
		initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
	<!-- 	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css"> -->
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/style.css">
		<style type="text/css">
			.produce{
				display:none;
			}
		</style>
		<title>FARMAPP</title>
	</head>
	<body>
		<!-- Header -->
		<section id="head" class="bg-success">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<nav class="navbar navbar-expand-lg navbar-light ">
							<a class="navbar-brand text-white col-6" href="index.php">FarmApp</a>
							<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
							</button>
							<div class="collapse navbar-collapse" id="navbarSupportedContent">
								<ul class="navbar-nav mr-auto text-right ">
									<!-- <li class="nav-item active">
												<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
									</li> -->
									<li class="nav-item text-white">
										<a class="nav-link text-white" href="index.php">Home</a>
									</li>
									<li class="nav-item text-white">
										<a class="nav-link text-white" href="listing.php">Pricing</a>
									</li>
									<!-- <li class="nav-item text-white">
										<a class="nav-link text-white" href="listing.php">Menu</a>
									</li> -->
									<li class="nav-item text-white">
										<a class="nav-link text-white" href="listing.php">Category</a>
									</li>
									<li class="nav-item text-white">
										<a class="nav-link text-white" href="inde.php">Blog</a>
									</li>
									<li class="nav-item text-white ml-5">
									<a class="nav-link text-white"  href="logout.php">Logout</a>
									</li>
									
								</ul>
								
							</div>
						</nav>
					</div>
				</div>
			</div>
		</section>
		<!-- Header Ends -->
<div class="container"><br>
	<div class="row mt-5" >

</div> 
	<h3 class="text-center green">Congratulations! Your account is active
	You can now go ahead to upload your agricultural images.<a href="plan.php" class="btn btn-succes btn-lg active" role="button" aria-pressed="true"></a></h3>
	<?php
	// if(isset($_GET['result'])){
	// 	echo $_GET['result'];
	// }
	?>
</div>
	<div class="row offset-1 mt-5 mb-5">

		<div class="col-md-5 border produce" id="prod">
			<form action="farmprocess.php" method="post" enctype="multipart/form-data">
			<div class="form-group">
			<label for="">Produce</label>
			<input type="text" class="form-control" name="produce_name">
			</div>
			<div class="form-group">
			<textarea class="form-control" row="10" col="30" placeholder="Produce Discription" name="description" id="floatingTextarea"></textarea>
			</div>
		
			<div class="form-group">
			<input type="file" name="picture" class="form-control" placeholder="Add farm Produce here">
			</div>
			<div class="form-group">
			<input type="number" name="quantity" class="form-control" placeholder="Add Quantity of produce">
			</div>
			<div class="form-group">
			<label for="">Price</label>
			<input type="number" name="price" class="form-control">
			</div>
			<button type="submit" name="submit" class="btn btn-success mb-2 w-75 ml-5">UPLOAD Produce</button>
		</form>
		
		</div>
		<div class= "col-md-5">

		
		<table class="table table-striped">
       <thead>
       <tr>
       <th colspan="4"><?php if(!$out){ echo "<div class='badge badge-info'>No Produce listed yet</div>";}?></th>
       <td colspan="4"><button id="myproduce" class="btn btn-success">Add produce</button> </td>
       </tr>
				
       <tr class="table-secondary">
                 <th scope="col">Produce ID</th>
					<th scope="col">Property name</th>
					<th scope="col">Quantity</th>
					<th scope="col">description</th>
					<th scope="col">Price</th>
					<th scope="col">Action</th>
                    
				</tr>
				</thead>
				
				<?php
                    //for serial number
              $counter=1;
                    // for($i=0;$i<count($output);$i++){

                   foreach($out as $res){
					
                    ?>
                   
				<tbody>
                <tr>
                <td><?phpecho $counter;?> </td>
                <td><?php echo $res['product_name']."<br>"; ?> </td>
                <td><?php echo $res['produce_qty']."<br>"; ?> </td>
                <td><?php echo $res['produce_description']."<br>"; ?> </td>
                <td>#<?php echo $res['produce_price']."<br>"; ?> </td>
					
					<td> <a href="delete.php?id=<?php echo $res['produce_id']; ?>" onclick='return confirm("Are you sure you want to delete this produce")' type="button" class="btn btn-danger"> Delete</a> 
				
				</tr>
                <?php
                $counter++;
				 }
           		
            ?>
                
					</tbody>
			
		
       </table>
		</div>
	
	</div>
</div>
<script src="bootstrap/js/jquery-3.6.0.js"></script>
<script>
$(document).ready(function(){
$("#myproduce").click(function(){
$("#prod").removeClass('produce');
})
})
</script>
<?php
require "footer.php";
?>