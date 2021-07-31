<?php
class Guest{

    public $db;

    function __construct(){
        //connect to db by instantiating 
       $this->db= new Mysqli('localhost','root','','birthdaydb');


    }


    function get_State($selected=''){
        


   $q="SELECT  * FROM state";
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
