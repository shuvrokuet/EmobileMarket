<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Mobile online Shopping cart</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
<!--Less styles -->
   <!-- Other Less css file //different less files has different color scheam
	<link rel="stylesheet/less" type="text/css" href="themes/less/simplex.less">
	<link rel="stylesheet/less" type="text/css" href="themes/less/classified.less">
	<link rel="stylesheet/less" type="text/css" href="themes/less/amelia.less">  MOVE DOWN TO activate
	-->
	<!--<link rel="stylesheet/less" type="text/css" href="themes/less/bootshop.less">
	<script src="themes/js/less.js" type="text/javascript"></script> -->
	
<!-- Bootstrap style --> 
    <link id="callCss" rel="stylesheet" href="themes/bootshop/bootstrap.min.css" media="screen"/>
    <link href="themes/css/base.css" rel="stylesheet" media="screen"/>
<!-- Bootstrap style responsive -->	
	<link href="themes/css/bootstrap-responsive.min.css" rel="stylesheet"/>
	<link href="themes/css/font-awesome.css" rel="stylesheet" type="text/css">
<!-- Google-code-prettify -->	
	<link href="themes/js/google-code-prettify/prettify.css" rel="stylesheet"/>
<!-- fav and touch icons -->
    <link rel="shortcut icon" href="themes/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="themes/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="themes/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="themes/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="themes/images/ico/apple-touch-icon-57-precomposed.png">
	<style type="text/css" id="enject"></style>
  </head>
<body>
<div id="header">
<div class="container">
<div id="welcomeLine" class="row">
	<div class="span6">Welcome!<strong> User</strong></div>
	
</div>
<!-- Navbar ================================================== -->
<div id="logoArea" class="navbar">
<a id="smallScreen" data-target="#topMenu" data-toggle="collapse" class="btn btn-navbar">
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
</a>
  <div class="navbar-inner">
    <a class="brand" href="index.php"><img src="themes/images/logo.png" alt="Bootsshop"/></a>
		<form class="form-inline navbar-search" method="post" action="products.php" >
		<input id="srchFld" class="srchTxt" type="text" />
		  <select class="srchTxt">
			<option>All</option>
			<option>Samsung </option>
			<option>Symphony </option>
			<option>Oppo </option>
		</select> 
		  <button type="submit" id="submitButton" class="btn btn-primary">Go</button>
    </form>
    <ul id="topMenu" class="nav pull-right">
	 <li class=""><a href="products.php">Product</a></li>
	 
	 <?php
	
	 $cc=null;
     $ss=null;
	if(isset($_COOKIE['id']))
	{
	$cc=$_COOKIE['id'];
	}
	else if(isset($_SESSION['id']))
	{
	$ss=$_SESSION['id'];
	}
	   if(isset($_COOKIE['id'])||(isset($_SESSION['id'])))
	   {
       if($cc=='admin'||$ss=='admin')
        {
     ?>
     <li class=""><a href="special_offer.php">Offer</a></li>
	 <li class=""><a href="admin_pannel_1.php">Admin</a></li>
	  <li class="">
	 <a href="logout.php" style="padding-right:0"><span class="btn btn-large btn-success">Logout</span></a>
	</li>
     <?php 
         }
         else
         {
         	?>

         	<li class=""><a href="special_offer.php">Offer</a></li>
         	<li class=""><a href="profile.php">Profile</a></li>
          <li class="">
	 <a href="logout.php" style="padding-right:0"><span class="btn btn-large btn-success">Logout</span></a>
	</li>
	<?php 
         }
       }
        else
         {
      ?>
        <li class=""><a href="Register.php">Register</a></li>
         <li class=""><a href="special_offer.php">Offer</a></li>
          <li class="">
	 <a href="login.php" style="padding-right:0"><span class="btn btn-large btn-success">Login</span></a>
	</li>
      <?php 
        }
      ?>

	 
	
    </ul>
  </div>
</div>
</div>
</div>
<!-- Header End====================================================================== -->
<div id="carouselBlk">
	<div id="myCarousel" class="carousel slide">
		<div class="carousel-inner">

		  <div class="item active">
		  <div class="container">
			<a href="register.php"><img style="width:100%" src="start/1.png" alt="special offers"/></a>
		  </div>
		  </div>

		  <div class="item">
		  <div class="container">
			<a href="register.php"><img style="width:100%" src="start/2.png" alt=""/></a>
		  </div>
		  </div>

		  <div class="item">
		  <div class="container">
			<a href="register.php"><img src="start/3.png" alt=""/></a>
		  </div>
		  </div>

		   <div class="item">
		   <div class="container">
			<a href="register.php"><img src="start/4.png" alt=""/></a>
		  </div>
		  </div>

		   <div class="item">
		   <div class="container">
			<a href="register.php"><img src="start/5.png" alt=""/></a>
		  </div>
		  </div>

		   <div class="item">
		   <div class="container">
			<a href="register.php"><img src="start/6.png" alt=""/></a>
		  </div>
		  </div>

		</div>
		<a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
		<a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
	  </div> 
</div>
<div id="mainBody">
	<div class="container">
	<div class="row">
<!-- Sidebar ================================================== -->
	<div id="sidebar" class="span3">
		
		<ul id="sideManu" class="nav nav-tabs nav-stacked">
			<li class="subMenu open"><a> SYMPHONI [230]</a>
				<ul>
                 <?php
                  $conn = new mysqli("localhost", "root", "", "mobile_market");
                  $sql="SELECT * FROM product where identity='symphony' ";
					$result=$conn->query($sql);
					while($row = $result->fetch_assoc())
					{
				?>
        		
				<li><a class="active" href="product_details.php?id=<?php echo $row['product_id'];?>"><i class="icon-chevron-right"></i><?php echo $row['product_name']; ?> </a></li>

               <?php 
                   }
               ?>

				</ul>
			</li>
			<li class="subMenu"><a> SAMSUNG [840] </a>
			<ul style="display:none">

			     <?php
                  $conn = new mysqli("localhost", "root", "", "mobile_market");
                  $sql="SELECT * FROM product where identity='samsung' ";
					$result=$conn->query($sql);
					while($row = $result->fetch_assoc())
					{
				?>
				<li><a href="product_details.php?id=<?php echo $row['product_id'];?>"><i class="icon-chevron-right"></i><?php echo $row['product_name']; ?></a></li>
				<?php 
                   }
               ?>

			</ul>
			</li>
			<li class="subMenu"><a>WALTON [1000]</a>
				<ul style="display:none">
				<?php
                  $conn = new mysqli("localhost", "root", "", "mobile_market");
                  $sql="SELECT * FROM product where identity='walton' ";
					$result=$conn->query($sql);
					while($row = $result->fetch_assoc())
					{
				?>
				<li><a href="product_details.php?id=<?php echo $row['product_id'];?>"><i class="icon-chevron-right"></i><?php echo $row['product_name']; ?></a></li>
				<?php 
                   }
				?>								
			</ul>
			</li>
			
		</ul>

		<?php
                  $conn = new mysqli("localhost", "root", "", "mobile_market");
                  $sql="SELECT * FROM product e WHERE 2=(SELECT COUNT(DISTINCT product_price) FROM product p WHERE e.product_price<=p.product_price)";
					$result=$conn->query($sql);
					while($row = $result->fetch_assoc())
					{
				?>

		<br/>
		  <div class="thumbnail">
			<img src="<?php echo $row['img_link']; ?>" alt="Bootshop panasonoc New camera"/>
			<div class="caption">
			  <h5><?php echo $row['product_name']; ?></h5>
				<h4 style="text-align:center"><a class="btn" href="product_details.php?id=<?php echo $row['product_id'];?>"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#"><?php echo $row['product_price']; ?></a></h4>
			</div>
		  </div>
		  <br/>

		  <?php 
             }
		  ?>

		  


		  <?php
                  $conn = new mysqli("localhost", "root", "", "mobile_market");
                  $sql="SELECT * FROM product e WHERE 1=(SELECT COUNT(DISTINCT product_price) FROM product p WHERE e.product_price<=p.product_price)";
					$result=$conn->query($sql);
					while($row = $result->fetch_assoc())
					{
				?>

			<div class="thumbnail">

				<img src="<?php echo $row['img_link']; ?>" title="Bootshop New Kindel" alt="Bootshop Kindel">
				<div class="caption">
				  <h5><?php echo $row['product_name']; ?></h5> 
				    <h4 style="text-align:center"><a class="btn" href="product_details.php?id=<?php echo $row['product_id'];?>"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#"><?php echo $row['product_price']; ?></a></h4>
				</div>
			  </div>
			  <br/>

			  <?php 
                 }
			  ?>


			<div class="thumbnail">
				<img src="themes/images/payment_methods.png" title="Bootshop Payment Methods" alt="Payments Methods">
				<div class="caption">
				  <h5>Payment Methods</h5>
				</div>
			  </div>
	</div>
<!-- Sidebar end=============================================== -->
		<div class="span9">		
			<div class="well well-small">
			<h4>Featured Products <small class="pull-right">200+ featured products</small></h4>
			<div class="row-fluid">
			<div id="featured" class="carousel slide">
			<div class="carousel-inner">

			  <div class="item active">
			  <ul class="thumbnails">
               <?php
                  $i=0;
                  $id=0;
                  $conn = new mysqli("localhost", "root", "", "mobile_market");
                  $sql="SELECT * FROM product";
					$result=$conn->query($sql);
					while($row = $result->fetch_assoc())
					{
						if($i==4)
						{
                            $id=$row['product_id'];
							break;
						}
				?>

				<li class="span3">
				  <div class="thumbnail">
				  <i class="tag"></i>
					<a href="product_details.php?id=<?php echo $row['product_id'];?>"><img src="<?php echo $row['img_link']; ?>" alt=""></a>
					<div class="caption">
					  <h5><?php echo $row['product_name']; ?></h5>
					  <h4><a class="btn" href="product_details.php?id=<?php echo $row['product_id'];?>">VIEW</a> <span class="pull-right">
					     <?php echo $row['product_price']; ?></span></h4>
					</div>
				  </div>
				</li>
				<?php 
				   $i++;
                  }
				?>
			  </ul>
			  </div>
              
              <div class="item">
			  <ul class="thumbnails">
               <?php
                 $i=0;
                  $conn = new mysqli("localhost", "root", "", "mobile_market");
                  $sql="SELECT * FROM product where product_id>=$id";
					$result=$conn->query($sql);
					while($row = $result->fetch_assoc())
					{
						if($i==3)
						{
                            $id=$row['product_id'];
							break;
						}
				?>
				<li class="span3">
				  <div class="thumbnail">
				  <i class="tag"></i>
					<a href="product_details.php?id=<?php echo $row['product_id'];?>"><img src="<?php echo $row['img_link']; ?>" alt=""></a>
					<div class="caption">
					  <h5><?php echo $row['product_name']; ?></h5>
					  <h4><a class="btn" href="product_details.php?id=<?php echo $row['product_id'];?>">VIEW</a> <span class="pull-right">
					     <?php echo $row['product_price']; ?></span></h4>
					</div>
				  </div>
				</li>
				<?php 
				 $i++;
                  }
				?>
			  </ul>

			  </div>
			  </div>
			  <a class="left carousel-control" href="#featured" data-slide="prev">‹</a>
			  <a class="right carousel-control" href="#featured" data-slide="next">›</a>
			  </div>
			  </div>
		</div>
		<h4>All Mobile</h4>
			  <ul class="thumbnails">
                
                <?php
                 $i=0;
                  $conn = new mysqli("localhost", "root", "", "mobile_market");
                  $sql="SELECT * FROM product order by product_id asc";
					$result=$conn->query($sql);
					while($row = $result->fetch_assoc())
					{
					
				?>

				<li class="span3">
				  <div class="thumbnail">
					<a  href="product_details.php?id=<?php echo $row['product_id'];?>"><img src="<?php echo $row['img_link']; ?>" alt=""/></a>
					<div class="caption">
					  <h5><?php echo $row['product_name']; ?></h5>
					  <h4 style="text-align:center"><a class="btn" href="product_details.php?id=<?php echo $row['product_id'];?>"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#"><?php echo $row['product_price']; ?></a></h4>
					</div>
				  </div>
				</li>

				<?php 
                   }
				?>


			  </ul>	

		</div>
		</div>
	</div>
</div>
<!-- Footer ================================================================== -->
	<div  id="footerSection">
	<div class="container">
		<div class="row">
			<div class="span3">
				<h5>ACCOUNT</h5>
				<a href="login.php">YOUR ACCOUNT</a>
				<a href="login.php">PERSONAL INFORMATION</a> 
				<a href="login.php">ADDRESSES</a> 
				<a href="login.php">DISCOUNT</a>  
				<a href="login.php">ORDER HISTORY</a>
			 </div>
			<div class="span3">
				<h5>INFORMATION</h5>
				<a href="#">CONTACT</a>  
				<a href="register.php">REGISTRATION</a>  
				<a href="#">LEGAL NOTICE</a>  
				<a href="#">TERMS AND CONDITIONS</a> 
				<a href="#">FAQ</a>
			 </div>
			<div class="span3">
				<h5>OUR OFFERS</h5>
				<a href="#">NEW PRODUCTS</a> 
				<a href="#">TOP SELLERS</a>  
				<a href="special_offer.php">SPECIAL OFFERS</a>  
				<a href="#">MANUFACTURERS</a> 
				<a href="#">SUPPLIERS</a> 
			 </div>
			<div id="socialMedia" class="span3 pull-right">
				<h5>SOCIAL MEDIA </h5>
				<a href="#"><img width="60" height="60" src="themes/images/facebook.png" title="facebook" alt="facebook"/></a>
				<a href="#"><img width="60" height="60" src="themes/images/twitter.png" title="twitter" alt="twitter"/></a>
				<a href="#"><img width="60" height="60" src="themes/images/youtube.png" title="youtube" alt="youtube"/></a>
			 </div> 
		 </div>
		<p class="pull-right">&copy; Mobileshop</p>
	</div><!-- Container End -->
	</div>
<!-- Placed at the end of the document so the pages load faster ============================================= -->
	<script src="themes/js/jquery.js" type="text/javascript"></script>
	<script src="themes/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="themes/js/google-code-prettify/prettify.js"></script>
	
	<script src="themes/js/bootshop.js"></script>
    <script src="themes/js/jquery.lightbox-0.5.js"></script>
	
	<!-- Themes switcher section ============================================================================================= -->

<span id="themesBtn"></span>
</body>
</html>