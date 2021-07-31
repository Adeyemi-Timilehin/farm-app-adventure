<?php
require "header.php";
require "Farmer.php";
$obj=new Farmer;
$id=$_GET['id'];
//accessing  the method
$detailed=$obj->getFarmerProduceDetails($id);
?>

   
<body>
    
    <div class="top">
        <div class="container-fluid offset-1 mt">
         
                <div class="row">
                      <?php foreach( $detailed as $d){
                           ?>
                    <div class="col-md-4">
                             <div class='card mb-4 shadow-sm'>
                                <img src="photos/<?php echo $d['pictures'] ?>" class='img-fluid'>
                                <div class='card-header'>
                                    <h6><?php  echo $d['product_name']; ?></h6>
                                </div>
                                <div class='card-body'>
                                    <p class='card-text'><?php echo $d['produce_description'] ?></p>
                                    <p class='card-text'><?php echo $d['produce_price'] ?></p>
                                </div>
                            </div>
                    </div>
                    <div class="col-md-6">
                            <div class='card mb-4 shadow-sm'>
                                <div class='card-header'>
                                    <h2>Farmer's Details</h2>
                                </div>
                                <div class='card-body'>
                                    <h5>Name: <?php echo $d['farmer_fname']?> <?php echo $d['farmer_lname']?><h5>
                                    <p>Phone: <?php echo $d['farmer_phonenum']?><p>
                                    <p>Address: <?php echo $d['farmer_address']?><p>
                                     <p>company_address: <?php echo $d['company_website']?></p>
                                     <p>company_address: <?php echo $d['company_address']?></p>
                  
                                </div>
                            </div>
                    </div>
                    <?php
}
      ?> 

                </div>
        </div>

             <button class="btn btn-danger w-75 ml-5" onclick="document.location.href='index.php'">Back</button>
    </div>
</body>
</html>
    <!--End html-->
