<?php

class User{

public $conn;


function__ function __construct()
{
	$this->conn = new mysqli('localhost', 'root', '', 'user',);
}
	function register($email, $fullname){
		return "your name is $fullname and your email is $email";
	}
}


?>