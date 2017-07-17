<?php
ob_start();
session_start();
$user_email=trim($_POST['input_email']);
$user_password=trim($_POST['input_password']);

if($user_email=='admin'&&$user_password=='admin')
{
   			if(isset($_POST['check']))//&&$_POST['check']=='yes')
			{
			$_SESSION['id']='admin';
			setcookie('id','admin',time()+1000);
			}
			else
			{
		       $_SESSION['id']='admin';
			}
			header('Location:goto.php');
			die();
}
else
{

    $conn = new mysqli("localhost", "root", "", "mobile_market");
	$sql="SELECT * FROM register WHERE user_email='$user_email'";
	//if($sql){
	$result=$conn->query($sql);

	while($row = $result->fetch_assoc())
	{
		if($row['user_password']==$user_password)
		{
			
			//echo "come here";
			if(isset($_POST['check']))//&&$_POST['check']=='yes')
			{
			$_SESSION['id']=$row['user_id'];
			setcookie('id',$row['user_id'],time()+1000);
			}
			else
			{
		       $_SESSION['id']=$row['user_id'];
			}
			header('Location:goto.php');
			die();
		}
		else
		{
			header('Location:login.php?pass=yes');
		}
	}
	
	//}else{
	header('Location:login.php');
	
}
	
//}
?>