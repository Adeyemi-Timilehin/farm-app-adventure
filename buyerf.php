<?php
class Buyer{

	public $conn;

	public function __construct() {
		$this->conn = new mysqli('localhost', 'root', '', 'farmapp');

		}

		public function registerBuyer($lname, $fname, $addy, $phone, $email, $pwd) {
			$pwd = md5($pwd);
			$sql = "INSERT INTO buyer(buyer_lname, buyer_fname, buyer_address,buyer_phonenum,buyer_email,buyer_password) VALUES ('$lname', '$fname', '$addy', '$phone', '$email', '$pwd')";

			//die($sql);

			$result = $this->conn->query($sql);

			return $result;
		}


	public function loginbuyer($email, $pwd) {
			$pwd = md5($pwd);
			$sql = "SELECT * FROM buyer WHERE buyer_email = '$email' AND buyer_password = '$pwd'";

			//die($sql);

			$result = $this->conn->query($sql);

			if($result->num_rows > 0) {
				return true;
			}else{
				return false;
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


?>