<?php
require "header.php";
require "farmer.php";
if(isset($_POST)){
    $obj=new Farmer;
    
    $output=$obj->getallProduce();
}
?>
  
<div class="mt">
<h2 class="text-center mb-5 alert alert-success w-50 ml ">All Farm Products</h2>
<div class="row offset-1">
<?php
if($output){

foreach($output as $out){?>
<div class='col-md-6 col-lg-3'>
          <div class='card mb-4 shadow-sm'>
          <img src="photos/<?php echo $out['pictures'] ?>" class='img-fluid'>
          <div class='card-header'>
                    <h6><?php  echo $out['product_name']; ?></h6>
                </div>
              <div class='card-body'>
                  <p class='card-text'><?php echo $out['produce_description'] ?></p>
                  <p class='card-text'><?php echo $out['produce_price'] ?></p>
                  <a href='detailproduct.php?id=<?php echo $out['produce_id'];?>'  class='text-light ml-auto btn btn-success'>view</a>
              </div>
            </div>
        </div>

    <?php
    }}
    else{?>
        <h4 class="text-danger">No Result Found</h4>
    <?php
    }
   
    ?>
	</div>
	</div>
