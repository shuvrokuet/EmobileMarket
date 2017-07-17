<?php
ob_start();
session_start();
include 'database.php';

$product_name=$_POST['product_name'];
$product_price=$_POST['product_price'];
$product_quantity=$_POST['product_quantity'];
$product_network=$_POST['product_network'];
$product_battery=$_POST['product_battery'];
$product_camera=$_POST['product_camera'];
$product_gpu=$_POST['product_gpu'];
$product_ram=$_POST['product_ram'];
$product_rom=$_POST['product_rom'];
$product_relase=$_POST['product_relase'];
$product_display=$_POST['product_display'];
$product_sensor=$_POST['product_sensor'];
$product_identity=$_POST['product_identity'];
$product_offer=$_POST['product_offer'];

if($_FILES['product_image']['error']>0)
{
  echo 'error';
}
else
{
	$prefix=$_SESSION['id'].time();
	$link="upload/".$prefix.$_FILES['product_image']['name'];
	move_uploaded_file($_FILES['product_image']['tmp_name'],$link);
}
$img_link="http://localhost/akif/upload/".$prefix.$_FILES['product_image']['name']; 

$product_sensor=$_POST['product_sensor'];
$product_identity=$_POST['product_identity'];
status_update($product_name,$product_price,$product_quantity,$img_link,$product_network,$product_battery,$product_camera,$product_gpu,$product_ram,$product_rom,$product_relase,$product_display,$product_sensor,$product_identity,$product_offer);
header('Location:admin_pannel_1.php?status=yes');

function status_update($product_name,$product_price,$product_quantity,$img_link,$product_network,$product_battery,$product_camera,$product_gpu,$product_ram,$product_rom,$product_relase,$product_display,$product_sensor,$product_identity,$product_offer){
	$conn = new mysqli("localhost", "root", "", "mobile_market");

	$sql="INSERT INTO product(product_name,product_price,product_quantity,img_link,network_type,battery_type,camera_resulation,gpu,ram,rom,
	releasedate,display_size,sensor,identity,product_offer)VALUES('$product_name','$product_price','$product_quantity','$img_link',
	'$product_network',
	'$product_battery','$product_camera','$product_gpu','$product_ram','$product_rom','$product_relase','$product_display','$product_sensor',
	'$product_identity','$product_offer')";
	 $conn->query($sql);
}

?>