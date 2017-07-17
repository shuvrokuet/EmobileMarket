<?php
ob_start();
session_start();

$product_name=$_POST['product_name'];
$product_price=$_POST['product_price'];
$product_quantity=$_POST['product_quantity'];
$product_network=$_POST['product_network'];
$product_battery=$_POST['product_battery'];
$product_camera=$_POST['product_camera'];
$product_gpu=$_POST['product_gpu'];
$product_ram=$_POST['product_ram'];
$product_rom=$_POST['product_rom'];
$product_display=$_POST['product_display'];
$product_sensor=$_POST['product_sensor'];
$product_identity=$_POST['product_identity'];
$product_offer=$_POST['product_offer'];
$product_sensor=$_POST['product_sensor'];
$product_identity=$_POST['product_identity'];

status_update($product_name,$product_price,$product_quantity,$product_network,$product_battery,$product_camera,$product_gpu,$product_ram,$product_rom,$product_display,$product_sensor,$product_identity,$product_offer);
header('Location:admin_pannel_1.php?status=yes');

function status_update($product_name,$product_price,$product_quantity,$product_network,$product_battery,$product_camera,$product_gpu,$product_ram,$product_rom,$product_display,$product_sensor,$product_identity,$product_offer){
	$conn = new mysqli("localhost", "root", "", "mobile_market");
	 $id=$_GET['id'];


	$sql="UPDATE product SET product_name='$product_name',product_price='$product_price',product_quantity='$product_quantity',network_type='$product_network',battery_type='$product_battery',camera_resulation='$product_camera',gpu='$product_gpu',ram='$product_ram',rom='$product_rom',display_size='$product_display',sensor='$product_sensor',identity='$product_identity',product_offer='$product_offer' where product_id=$id";
	 $conn->query($sql);
}

?>