<?php
class Farmer{

	public $conn;

	public function __construct() {
		$this->conn = new mysqli('localhost', 'root', '', 'farmapp');

		}

		public function registerFarmer($fname, $lname, $email, $phone, $addy, $pwd, $company_address, $company_website) {
			$pwd = md5($pwd);
			$sql = "INSERT INTO farmer(farmer_fname, farmer_lname, farmer_email,farmer_phonenum,farmer_address,farmer_password,company_address,company_website) VALUES ('$fname', '$lname', '$email', '$phone', '$addy', '$pwd', '$company_address', '$company_website')";
			//die($sql);

			$result = $this->conn->query($sql);

			return $result;
		}


	public function loginFarmer($email, $pwd) {
			$pwd = md5($pwd);
			$sql = "SELECT * FROM farmer WHERE farmer_email = '$email' AND farmer_password = '$pwd'";

			//die($sql);

			$result = $this->conn->query($sql);

			$row = $result->fetch_assoc();

			if($result) {
				if(is_array($row)) {
					$farmer_id = $row['farmer_id'];
					session_start();
				$_SESSION['id'] = $row['farmer_id'];

				return $farmer_id;

				}
			}
			

}





    function get_State($selected=''){
        


   $q="SELECT  * FROM states";
   $result= $this->db->query($q);

echo "<select name='state' class='custom-select '>";


while($data=$result->fetch_assoc()){



    $state=$data['state_name'];
    $stateid=$data['state_id'];
    
    if($selected ==$stateid){
        echo "<option class='bg-success' value='$stateid' selected>$state</option>";

    }

    echo "<option class='bg-success' value='$stateid'>$state</option>";

   
}

echo "</select>";
}


function getDetails($id) {
	$sql = "SELECT * FROM farmer WHERE farmer_id = '$id'";

	$result= $this->conn->query($sql);

	$row = $result->fetch_assoc();

	return $row;




}
//upload images
public function uploadPix($pix_array) {
	// echo "<pre>";
	// 	print_r($pix_array);
	// 	echo "</pre>";
		
		//echo $pix_array['name'];
		
		$imgname =  $pix_array['name'];
		$tmp_loc = $pix_array['tmp_name'];
		$filetype = strtolower ($pix_array['type']);
		$imgsize = $pix_array['size'];
		
		//retrieve the extension
		$ext = pathinfo ($imgname, PATHINFO_EXTENSION);
		
		//New file name
		//$newname = rand(100000000,900000000).".$ext";
		$newname = time().".$ext";
		
		//check allowed extension
		if($ext == strtolower('JPG') || $ext == 'jpeg' || $ext == 'png') {
			move_uploaded_file ($tmp_loc, "photos/$newname");
			$id = $_SESSION['id'];
			//CHANGE IMAGE
			$sql = "UPDATE farmer SET picture = '$newname' WHERE farmer_id = '$id'";
            $result = $this->conn->query ($sql);
            
            if($result){
                return true;
            }
            return false;
        }
        else{
            header('location:dashboard.php?msg=upload failed');
        }
}
function insertproduce($product,$description,$produce_qty,$price,$farmer_id,$pictures){

	$imgname =  $pictures['name'];
	$tmp_loc = $pictures['tmp_name'];
	
	
	//retrieve the extension
	$ext = pathinfo ($imgname, PATHINFO_EXTENSION);
	
	$newname = time().".$ext";
	
	//check allowed extension
	if($ext == strtolower('JPG') || $ext == 'jpeg' || $ext == 'png') {
		move_uploaded_file ($tmp_loc, "photos/$newname");
		

$sql="INSERT INTO produce(product_name,produce_description,produce_qty,produce_price,farmer_id,pictures) VALUES('$product','$description','$produce_qty','$price','$farmer_id','$newname')";
$output=$this->conn->query($sql);

if($output){
    $property_id = $this->conn->insert_id;

return  $property_id;
}
else{
   return 0;
}

}
}
function getproduce($id){
	$q="SELECT * FROM produce where farmer_id='$id'";
	
	$output=$this->conn->query($q);
    
	$data=array();
			while($row = $output->fetch_assoc()) {
				$data[] = $row;
			}
				return $data;
			
}
function getproduceall(){
	$q="SELECT * FROM produce ";
	
	$output=$this->conn->query($q);
    
	$data=array();
			while($row = $output->fetch_assoc()) {
				$data[] = $row;
			}
				return $data;
			
}
function delete_property($id){
    $q="DELETE FROM produce WHERE produce_id='$id'"; 
    $out=$this->conn->query($q);
  
}
//function to search for produce 
function selectProduce($produce){
	$sql="SELECT * FROM produce WHERE product_name='$produce'"; 
	$out=$this->conn->query($sql);
	
	$output=array();
	while($row=$out->fetch_assoc()){
		$output[]=$row;
	}
	
	return $output;
}
//function to get the farmer details and produce details
function getFarmerProduceDetails($id){
	$q="SELECT * FROM produce JOIN farmer ON farmer.farmer_id=produce.farmer_id  WHERE produce_id='$id'";
	$result=$this->conn->query($q);
	$output=array();
	while($row=$result->fetch_assoc()){
		$output[]=$row;
	}
	return $output;
}
//functio to get all farm produce
function getallProduce(){
	$q="SELECT * FROM produce ";
	$result=$this->conn->query($q);
	$output=array();
	while($row=$result->fetch_assoc()){
		$output[]=$row;
	}
	return $output;
}
}

?>





