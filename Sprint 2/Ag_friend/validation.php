<?php

session_start();

$con = mysqli_connect('localhost','root','Thushan5483');
mysqli_select_db($con,'user_registration');

$name = $_POST['user'];
$pass = $_POST['Password'];


$s = "select * from usertable where name = '$name' && Password = '$pass'";

$result = mysqli_query($con,$s);
$num = mysqli_num_rows($result);


if($num == 1){
	header('location:about.html');
	
}else{
	header('location:login.php');
	echo" wrong password or user name";
    header('location:ttt.php');

}

?>