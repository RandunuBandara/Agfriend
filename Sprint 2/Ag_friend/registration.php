<?php

session_start();
header('location:login.php');

$con = mysqli_connect('localhost','root','Thushan5483');
mysqli_select_db($con,'user_registration');

$name = $_POST['user'];
$pass = $_POST['Password'];

$s = "select * from usertable where name = '$name'";

$result = mysqli_query($con,$s);
$num = mysqli_num_rows($result);



if($num == 1){
	echo" Username Already Taken";
	header('location:tt.php');
}else
{
	$reg = "insert into usertable(name,password)values ('$name','$pass')";
	mysqli_query($con,$reg);
	echo" Registration Successful";
	header('location:tttt.php');
}

?>