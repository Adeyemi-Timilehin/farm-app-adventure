<?php

echo'<pre>';
print_r($_FILES);

echo '</pre>';
$allowed = array('image/jpeg','image/jpg','image/png' );
$ext = pathinfo($filename,PATHINFO_EXTENSION);


if(in_array($filetype,$allowed)){

$file = $_FILES['pix']['name'];
$tmp_name = $_FILES['pix']['tmp_name'];
$filestype = $_FILES['pix']['type'];
$size = $_FILES['pix']['size'];
if($filestype == 'image/jpg' || $filestype =='image/png'){
	if($size <=10240)
	move_uploaded_file($tmp_name, "photos/$filename");
}else{
	echo 'invalid File Type';
}

move_uploaded_file($tmp_name, "fileupload/$file");




?>