 <?php
//  if (isset($_POST['submit'])){
//  	$file = $_FILES['file'];

//  	print_r($file);
//  	$fileName =$_FILES['file']['name'];
//  	$fileTmpName =$_FILES['file']['tmp_name'];
//  	$fileSize =$_FILES['file']['size'];
//  	$fileError =$_FILES['file']['error'];
//  	$fileType =$_FILES['file']['type'];


//  	$fileExt = explode('.', $fileName);
//  	$fileActualExt = strtolower(end($fileExt));

//  	$allowed = array('jpg', 'jpeg', 'png', 'pdf');
//  	if (in_array($fileActualExt, $allowed)) {
//  		if ($fileError === 0) {
//  			if ($fileSize <1000000) {
//  				$fileNameNew = uniqid('', true).".".$fileActualExt;
//  				$fileDestination = 'upload/'.$fileNameNew;
//  				move_uploaded_file($fileTmpName, $fileDestination);
//  				header("Location: uploadimage.php?uploadsuccessful");
//  			}else{
//  				echo "your file is too large!";
//  			}
//  		} else{
//  			echo "There was an error uploading your file!";
//  		}
//  	}else{
//  		echo "you cannot upload fies of this type!";
//  	}


//  }
 ?>
 
 <?php
	
	session_start ();
	
	
	require "farmer.php";
	$obj=new Farmer;
	
	//Preventing unwanted visits
	if(isset($_POST['submit']) && isset($_SESSION['id'])) {
		
		//main location
		$pix = $_FILES['file'];
		


        $output=$obj->uploadPix($pix);
        if($output){
            header("Location: dashboard.php?msg=Upload Successful!");
        }
        else{
            header("Location: dashboard.php?msg=error, unsuccessful uploadl!");
        }
	} 


?>

































