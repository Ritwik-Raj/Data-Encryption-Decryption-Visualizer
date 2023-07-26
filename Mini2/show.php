<?php
include('db.php');
function str_openssl_dec($str,$iv){
	$key='1234567890vishal%$%^%$$#$#';
	$chiper="AES-128-CTR";
	$options=0;
	$str=openssl_decrypt($str,$chiper,$key,$options,$iv);
	return $str;
}
$date = $_POST['date'];
$res=mysqli_query($conn,"select * from HashData WHERE date = '$date'");
if ($res->num_rows > 0) {
echo "<table style='margin-left: auto; margin-right: auto;' border='1'>";
	echo "<tr><td>Id</td><td>Name</td><td>Email</td></tr>";
	while($row=mysqli_fetch_assoc($res)){
		$iv=hex2bin($row['iv']);
		$name=str_openssl_dec($row['name'],$iv);
		$email=str_openssl_dec($row['email'],$iv);
		echo "<tr><td>".$row['id']."</td><td>".$name."</td><td>".$email."</td></tr>";
	}
echo "</table>";
} else {
    echo "No data found for the selected date.";
}
?>