<?php

require "header.php";
require "farmer.php";

$obj = new Farmer();

$out=$obj->getproduceall();
// echo "<pre>";
// print_r($out);
// echo "</pre>";
?>
<!-- Jumbo -->
<section id="jumbo">
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-8 mt-5 mx-auto">
                <h2 class="text-white text-center">The Exclusive Website For Agricultural Business</h2>
               
                    <div class="form-group">

                        <input type="text" class="form-control" id="search" aria-describedby="emailHelp"
                            placeholder="Search for Agro Commodity">

                    </div>

                    <button  class="btn btn-success mt-4 w-100 text-light" id="submit">Submit</button>

            </div>
        </div>
    </div>
	
</section>
<!-- Jumbo Ends -->
<!-- Carousel -->
<div class="container py-5">
<div id="ps">
            <h2 class="search" id="s">Search Result</h2>
            <div id="searchdetail" class="row"></div>
        
        </div>
    <h3 class="text-center green"><a href="listing.php">Browse By Category</a></h3>
    <div class="row">
        <?php
			foreach($out as $g){

			
			?>
        <div class="col-md-3">
            <div class="card mb-4">
                <img src="photos/<?php echo $g['pictures']?>" class=" rounded-circle img-fluid">
                <div class="card-header">
                    <h6><?php echo $g['product_name'];  ?></h6>
                </div>
                <div class="card-body">
                    <p class="card-text"><?php echo $g['produce_description'];  ?></p>
                    <h5 class="text-muted">#<?php echo $g['produce_price'];  ?></h5>
                </div>
            </div>

        </div>
        <?php 
			}
			?>
    </div>
</div>

<!-- listing End-->


<!-- Expertise -->
<div class="container my-4">
    <h3 class="text-center green">Expertise</h3>
    <div class="row">
        <div class="col-md-4">helping buyers to get the ideal farm produce.
            display your farm produce and become rich.
            bye pass middlemen and get value for your money..</div>
        <div class="col-md-4">Curious about the opportunities in agriculture? Find out what you can earn as a farmer
        </div>
        <div class="col-md-4">Helping farmers farm better with tailored agricultural expertise and access to market
        </div>
    </div>
</div>
<!-- Expertise Ends -->
<!-- Testimonial -->
<div class="container my-4">
    <h3 class="text-center green">What people say about FarmApp</h3>
    <div class="row">
        <div class="col-md-4">Today's world is digitized and there is no better time to use Farmapp than now. It
            effectively flows information on product and service providers to farmers and buyers.... Martin Arnod</div>
        <div class="col-md-4"></div>
        <div class="col-md-4">The platform is OK for me. I find it easy to use and it makes me get the right
            produce...Tope Badmus</div>
    </div>
</div>

<div id="searchdetail"></div>
<!-- Testimonial Ends -->
<!-- Testimonial -->
<div class="container my-4">
    <div class="row">
        <div class="col-md-6">
            <form>
                <div class="form-group">
                    <h3>Contact Us</h3>
                    <hr>
                    <label for="exampleInputEmail1">Full Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                        else.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                        else.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Phone Number</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                        else.</small>
                </div>

                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" class="btn btn-success">Submit</button>
            </form>
        </div>
        <div class="col-md-6"><img src="images/images8.jpg" class="img-fluid" alt=""></div>

    </div>
</div>
<!-- Testimonial Ends -->
<script src="bootstrap/js/jquery-3.6.0.js"></script>
<script>
$(document).ready(function(){
	$("#submit").click(function(){
	var search=$("#search").val();
	$.ajax({
		type:"GET",
		url:"searchprocess.php",
		data:
			"search="+search
		,success:function(data){
			$("#searchdetail").html(data);
            $("#s").removeClass("search");
             $("#ps").addClass("parentsearch");
             $("#s").addClass("searchadd");
		}
	})
	//alert(search);
	})
})
</script>
<?php
require "footer.php";
?>