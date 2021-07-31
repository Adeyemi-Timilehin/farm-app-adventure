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


// echo "<pre>";
// print_r($output);
// echo "</pre>";

$pix=$output['picture'];
if(empty($pix)){

    $pix='avatar.png';

}

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
								
									<li class="nav-item text-white">
										<a class="nav-link text-white" href="index.php">Home</a>
									</li>
									<li class="nav-item text-white">
										<a class="nav-link text-white" href="listing.php">Pricing</a>
									</li>
									
									<li class="nav-item text-white">
										<a class="nav-link text-white" href="listing.php">Category</a>
									</li>
									<li class="nav-item text-white">
										<a class="nav-link text-white" href="inde.php">Blog</a>
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

	<h3 class="text-center green mt-5">Congratulations! Your account has been created successfully.
	You can now go ahead to upload your agricultural images.<a href="plan.php" class="btn btn-succes btn-lg active" role="button" aria-pressed="true"></a></h3>
	
</div>
	<div class="row">

		<div class="col-md-4 border">
			<form action="uploadimage.php" method="post" enctype="multipart/form-data">
			<label for="exampleFormControlFile1">Add your profile picture</label>
			<input type="file" name="file" id="imagy"><br>
			<button type="submit" name="submit">UPLOAD</button>
		</form>
	<ul>
		<li><a href="logout.php">Logout</a></li>
		<li><a href="edit.php?id=<?php echo $output['farmer_id'];  ?>">Edit Profile</a></li>
		<li><a href="load.php?id=<?php echo $output['farmer_id'];  ?>">Load Produce</a></li>
		
		
	</ul></div>
		<div class="col-md-4 border"><h3>Profile details <label for="imagy"> <div><img class="mt-5" src="photos/<?php echo $pix;?>"  width="300"></div></label></h3>
		
	</div>
	<div class="col-md-4 border">
			<p>name : <?php echo $output['farmer_fname']; ?></p>
		<p>Email:<?php echo $output['farmer_email']; ?></p>
		<p>Company address:<?php echo $output['company_address']; ?></p>
		<p>Company Website:<?php echo $output['company_website']; ?></p>
	</div>
	</div>
</div>
<?php
require "footer.php";
?>