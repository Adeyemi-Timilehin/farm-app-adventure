<?php

require "farmer.php";

$id = $_GET['id'];

$obj = new Farmer();

$output = $obj->getDetails($id);

?>

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
              <a class="navbar-brand text-white col-6" href="#">FarmApp</a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto text-right ">
                  <!-- <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                  </li> -->
                  <li class="nav-item text-white">
                    <a class="nav-link text-white" href="inde.php">Home</a>
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
				<div class="col-md-6 mx-auto">
					<h2 class="text-white text-center">The Exclusive Website For Agricultural Business</h2>
					<form>
					 <div class="form-group">
<!--     <label for="exampleInputEmail1">Search</label> -->
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Search for Agro Commodity">
<!--     <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
  </div>
 <select class="custom-select">
  <option selected>Select State</option>
  <option value="1">Ondo</option>
  <option value="2">Edo</option>
  <option value="3">Lagos</option>
</select>
  <button type="submit" class="btn btn-success mt-4 w-100">Search Commodity`</button>
</form>
					<!-- <div class="jumbotron">
						<h1 class="display-4">Hello, world!</h1>
						<p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
						<hr class="my-4">
						<p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
						<a class="btn btn-primary btn-lg w-100" href="#" role="button">Learn more</a>
					</div> -->
				</div>
			</div>
		</div>
		</section>
		<h3 class="text-center mt-4">Please edit your profile</h3>
			<div class="container my-12">
			<div class="row">
				<div class="col-md-12">
					<form method= "post" action="inde.php">
					 <div class="form-group">
            <label>Gender</label><br>
              <input type="radio" id="male" name="gender" value="male">
              <label for="male">Male</label><br>
              <input type="radio" id="female" name="gender" value="female">
              <label for="female">Female</label><br>
             <input type="radio" id="other" name="gender" value="other">
             <label for="other">Other</label>
            
    <label for="exampleInputEmail1">First Name</label>
    <input type="text" class="form-control" name="fname" value="<?php echo $output['farmer_fname'] ?>" id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Last Name</label>
    <input type="text" class="form-control" name="lname" id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted"></small>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Phone Number</label>
    <input type="text" class="form-control" value="<?php echo $output['farmer_phonenum'] ?>" name="lname" id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted"></small>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Company name</label>
    <input type="email" class="form-control" name="company name id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted"></small>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">company website</label>
    <input type="text" class="form-control" name="company website"   value="<?php echo $output['company_website'] ?>"value="<?php echo $output['company_address'] ?> id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted"></small>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Address</label>
    <input type="text" class="form-control" name="addy"  value="<?php echo $output['farmer_address'] ?>"id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted"></small>
  </div>
   <div classes="form group">

			<label>password</label>
			<input type="password" name="pwd" id="pwd" class="form-control">
			</div>
      <label>Re Confirm Password</label>
      <input type="password" name="pwd" id="pwd" class="form-control">
      </div>
 
  <!-- <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1"></label>
  </div> -->
  <button type="submit" name="submit" class="btn btn-success" style="margin: 50px">Updates</button>
</form></div>
</div>
<!-- registration form for farmer ends
		

			carousel carrying image
				<div class="col-md-6"><img src="images/images8.jpg" class="img-fluid" alt=""></div>
				
			</div>
		</div>

		<!-- modal -->
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

		<!-- modal  end -->

		<!-- Modal -->
<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

		<!-- modal  end -->
		<?php
		require "footer.php";
		?>
		
		<script type="text/javascript" src="bootstrap/js/jquery-3.6.0.Js"></script>
		<script type="text/javascript" src="bootstrap/js/popper.min.js"></script>
		<script type="text/javascript" src=" bootsTrap/js/bootstrap.js"></script>
	</body>
</html>