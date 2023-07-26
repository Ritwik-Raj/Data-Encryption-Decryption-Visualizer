<?php
include('db.php');
function str_openssl_enc($str,$iv){
	$key='1234567890vishal%$%^%$$#$#';
	$chiper="AES-128-CTR";
	$options=0;
	$str=openssl_encrypt($str,$chiper,$key,$options,$iv);
	return $str;
}
if(isset($_POST['submit'])){
	$iv=openssl_random_pseudo_bytes(16);
	$name=$_POST['name'];
	$email=$_POST['email'];
	
	$name=str_openssl_enc($name,$iv);
	$email=str_openssl_enc($email,$iv);
	
	$iv=bin2hex($iv);
	$sql = "INSERT INTO `hashdata` (`date`,`name`,`email`,`iv`) VALUES (NOW(),'$name','$email','$iv');";
	if ($conn->query($sql) === TRUE) {
		echo "Data stored successfully!";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
}
?>