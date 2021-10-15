<?php
include_once 'dbh.inc.php';
$first =$_POST['fName'];
$last =$_POST['lName'];
$whtsapp =$_POST['wNum'];
$facebook =$_POST['FacebookName'];
$email =$_POST['eMail'];
$acc =$_POST['areaCode'];
$phone =$_POST['phoneNumber'];
$str1 =$_POST['add_line1'];
$str2 =$_POST['add_line2'];
$city =$_POST['city'];
$district =$_POST['dis'];
$web1 =$_POST['website1'];

$sql="INSERT INTO consultant(f_name,l_name,w_num,FacebookName,website1,ac,pn,st01,st02,city,spni,eMail)
VALUES('$first','$last','$whtsapp','$facebook','$web1','$acc','$phone','$str1','$str2','$city,'$district','$email');";	
mysqli_query($conn,$sql);

header("location:consultant.php?signup=success");
?>	