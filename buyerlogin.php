
		<?php
		require "header.php";
			?>

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
 <!-- <select class="custom-select">
  <option selected>Select State</option>
  <option value="1">Ondo</option>
  <option value="2">Edo</option>
  <option value="3">Lagos</option>
</select> -->
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
		<h3 class="text-center mt-4">farmer Login</h3>
			<div class="container my-12">
			<div class="row">
				<div class="col-md-12">
					<form method= "post" action="loginprocess.php">
					
    
  
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  
  
   <div classes="form group">

			<label>password</label>
			<input type="password" name="pwd" id="pwd" class="form-control">
			</div>
			<div classes="form group">
  </div>
  <button type="submit" name="submit" class="btn btn-success">Submit</button>
</form></div>
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