<?php

session_start();

$con = mysqli_connect('localhost','root','Thushan5483');
mysqli_select_db($con,'userregistration');

$name = $_POST['user'];
$pass = $_POST['Password'];

$s = "select * from usertable where name = '$name' && Password = '$pass'";

$result = mysqli_query($con,$s);
$num = mysqli_num_rows($result);

if($num == 1){
	header('location:homePage.html');
	
}else{
	header('location:login.php');
}

?>