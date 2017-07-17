<?php
session_start();
ob_start();


$user_name=trim($_POST['input_name']);
$user_email=trim($_POST['input_email']);
$user_password=trim($_POST['input_password']);
$user_city=trim($_POST['input_city']);
$user_postcode=trim($_POST['input_postcode']);
$user_country=trim($_POST['input_country']);
$user_mobile=trim($_POST['input_mobile']);

insert_user($user_name,$user_email,$user_password,$user_city,$user_postcode,$user_country,$user_mobile);
header('Location:register.php');
 
 function insert_user($user_name,$user_email,$user_password,$user_city,$user_postcode,$user_country,$user_mobile){
 	 $id=$_SESSION['id'];
 	 $conn = new mysqli("localhost", "root", "", "mobile_market");
	 $user_information="UPDATE register SET user_name='$user_name',user_email='$user_email',user_password='$user_password',user_city='$user_city',user_zip='$user_postcode',user_country='$user_country',user_phone='$user_mobile' WHERE user_id=$id";
	 $conn->query($user_information);
 }
?>