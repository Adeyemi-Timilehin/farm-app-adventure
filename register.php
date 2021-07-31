<!doctype html>
<html lang="eng">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,
    initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
  <!--  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css"> -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
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
                  <!-- <li class="nav-item text-white">
                    <a class="nav-link text-white" data-toggle="modal" data-target="#exampleModal2" href="farmapplogin">Login</a>
                  </li>
                  <li class="nav-item text-white">
                    <a class="nav-link text-white" data-toggle="modal" data-target="#exampleModal" href="reister.php">Register</a>
                  </li> -->
                  
                  
                </ul>
                
              </div>
            </nav>
          </div>
        </div>
      </div>
    </section>
    <!-- Header Ends -->
	
		<!-- Jumbo -->
		<section id="jumbo">
		<div class="container">
			<div class="row">
				<div class="col-md-8 mx-auto">
					<h2 class="text-white text-center mt-5">The Exclusive Website For Agricultural Business</h2>
	
				</div>
			</div>
		</div>
		</section>
		<h3 class="text-center mt-4">Registration form for farmer</h3>

			<div class="container my-12">
			<div class="row">
				<div class="col-md-12">
					<?php

					if(isset($_GET['msg'])) {
						echo "<h2>" . $_GET['msg'] . "</h2>";
					}

					?>
					<form method= "post" action="regprocess.php">
					 <div class="form-group">
              <label for="exampleInputEmail1">First Name</label>
              <input type="text" class="form-control" name="fname" id="exampleInputEmail1" aria-describedby="emailHelp">
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Last Name</label>
              <input type="text" class="form-control" name="lname" id="exampleInputEmail1" aria-describedby="emailHelp">
              <small id="emailHelp" class="form-text text-muted"></small>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
              <small id="emailHelp" class="form-text text-muted"></small>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Phone Number</label>
              <input type="text" class="form-control" name="phone" id="exampleInputEmail1" aria-describedby="emailHelp">
              <small id="emailHelp" class="form-text text-muted"></small>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Address</label>
              <input type="text" class="form-control" name="addy" id="exampleInputEmail1" aria-describedby="emailHelp">
              <small id="emailHelp" class="form-text text-muted"></small>
            </div>
            <div class="form-group">
               <label for="exampleInputEmail1">company Address</label>
              <input type="text" class="form-control" name="company_addy" id="exampleInputEmail1" aria-describedby="emailHelp">
               <small id="emailHelp" class="form-text text-muted"></small>
            </div>
             <div class="form-group">
               <label for="exampleInputEmail1">company website</label>
                <input type="text" class="form-control" name="company_website" id="exampleInputEmail1" aria-describedby="emailHelp">
                <small id="emailHelp" class="form-text text-muted"></small>
              </div>
            <div classes="form group">

                <label>password</label>
			          <input type="password" name="pwd" id="pwd" class="form-control">
            </div>
            <div class="mb-5">
                  <label>Re Confirm Password</label>
                  <input type="password" name="pwd" id="pwd" class="form-control">
             </div>
             <button type="submit" name="submit" class="btn btn-success mx-auto w-50" style="margin-bottom: 50px">Submit</button>
          </form> 
        </div>
      </div>
    </div>

		
		<?php
		require "footer.php";
		?>
		<script type="text/javascript" src="bootstrap/js/jquery-3.6.0.Js"></script>
		<script type="text/javascript" src="bootstrap/js/popper.min.js"></script>
		<script type="text/javascript" src=" bootsTrap/js/bootstrap.js"></script>
    
	</body>
</html>