<?php
ob_start();
session_start();

     $conn = new mysqli("localhost", "root", "", "mobile_market");
	 $id=$_GET['id'];
	 $sql = "DELETE FROM product WHERE product_id=$id";
	 $conn->query($sql);

	 header('Location:products.php');

?>