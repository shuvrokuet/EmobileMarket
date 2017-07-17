<?php 
session_start();
if(isset($_COOKIE['id'])||(isset($_SESSION['id']) && !empty($_SESSION['id'])))
        
        {
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
     <li class=""><a href="special_offer">Offer</a></li>
	 <li class=""><a href="admin_pannel_1.php">Admin</a></li>
	  <li class="">
	 <a href="logout.php" style="padding-right:0"><span class="btn btn-large btn-success">Logout</span></a>
	</li>
     <?php 
         }
         else
         {
         	?>
         	<li class=""><a href="profile.php">Profile</a></li>
             
         	<li class=""><a href="#">Offer</a></li>
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
         <li class=""><a href="special_offer">Offer</a></li>
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
    <ul class="breadcrumb">
    <li><a href="index.php">Home</a> <span class="divider">/</span></li>
    <li><a href="products.php">Products</a> <span class="divider">/</span></li>
    <li class="active">product Details</li>
    </ul>	
	<div class="row">
	        <?php
	               $id=$_GET['id'];
                  $conn = new mysqli("localhost", "root", "", "mobile_market");
                  $sql="SELECT * FROM product e WHERE product_id=$id";
					$result=$conn->query($sql);
					while($row = $result->fetch_assoc())
					{
				?>
			<div id="gallery" class="span3">
            <a href="themes/images/products/large/f1.jpg" title="Fujifilm FinePix S2950 Digital Camera">
				<img src="<?php echo $row['img_link']; ?>" style="width:100%" alt="Fujifilm FinePix S2950 Digital Camera"/>
            </a>
			
			  
			 <div class="btn-toolbar">
			  <div class="btn-group">
				<span class="btn"><i class="icon-envelope"></i></span>
				<span class="btn" ><i class="icon-print"></i></span>
				<span class="btn" ><i class="icon-zoom-in"></i></span>
				<span class="btn" ><i class="icon-star"></i></span>
				<span class="btn" ><i class=" icon-thumbs-up"></i></span>
				<span class="btn" ><i class="icon-thumbs-down"></i></span>
			  </div>
			</div>
			</div>
			<div class="span6">

			   
				<h3><?php echo $row['product_name']; ?></h3>
				<small>- <?php echo $row['camera_resulation']; ?></small>
				<hr class="soft"/>
				<form class="form-horizontal qtyFrm" action="product_summary.php?id=<?php echo $row['product_id'];?>" method="post">
				  <div class="control-group">
					<label class="control-label"><span><?php echo $row['product_price']; ?> Tk/=</span></label>
					<div class="controls">
					<input type="number" class="span1" placeholder="Qty."/>
					  <button type="submit" value="submit" class="btn btn-large btn-primary pull-right"> Add to cart <i class=" icon-shopping-cart"></i>
					  </button>
					</div>
				  </div>
				</form>
				
				
				<hr class="soft"/>
				<h4><?php echo $row['product_quantity'];?> in store</h4>
				<form class="form-horizontal qtyFrm pull-right">
				  <div class="control-group">
					<label class="control-label"><span>Color</span></label>
					<div class="controls">
					  <select class="span2">
						  <option>Black</option>
						  <option>Red</option>
						  <option>Blue</option>
						  <option>Brown</option>
						</select>
					</div>
				  </div>
				</form>

				<?php 
                 }
				?>
				
				<hr class="soft clr"/>
				<?php 
				$id=$_GET['id'];

				if($cc=='admin'||$ss=='admin')
                 {
        	    ?>
				<a class="btn btn-small pull-right" href="edit_product.php?id=<?php echo $id; ?>">Edit</a>
				<a class="btn btn-small pull-left" href="delete_process.php?id=<?php echo $id; ?>">Delete</a>
                <?php
                }
                ?>

				<br class="clr"/>
			<a href="#" name="detail"></a>
			<hr class="soft"/>
			</div>
			
			<div class="span9">
            <ul id="productDetail" class="nav nav-tabs">
              <li class="active"><a href="#home" data-toggle="tab">Product Details</a></li>
              <li><a href="#profile" data-toggle="tab">Related Products</a></li>
            </ul>
            <div id="myTabContent" class="tab-content">
              <div class="tab-pane fade active in" id="home">
			  <h4>Product Information</h4>
                <table class="table table-bordered">
				<tbody>
				<tr class="techSpecRow"><th colspan="2">Product Details</th></tr>
                
				<?php

				  $id=$_GET['id'];

                  $conn = new mysqli("localhost", "root", "", "mobile_market");
                  $sql="SELECT * FROM product where product_id=$id";
					$result=$conn->query($sql);
					while($row = $result->fetch_assoc())
					{
				?>

				<tr class="techSpecRow"><td class="techSpecTD1">Network: </td><td class="techSpecTD2"><?php echo $row['network_type']?></td></tr>
				<tr class="techSpecRow"><td class="techSpecTD1">Battery: </td><td class="techSpecTD2"><?php echo $row['battery_type']?></td></tr>
				<tr class="techSpecRow"><td class="techSpecTD1">Camera: </td><td class="techSpecTD2"><?php echo $row['camera_resulation']?></td></tr>
				<tr class="techSpecRow"><td class="techSpecTD1">Gpu: </td><td class="techSpecTD2"><?php echo $row['gpu']?></td></tr>
				<tr class="techSpecRow"><td class="techSpecTD1">Ram: </td><td class="techSpecTD2"><?php echo $row['ram']?></td></tr>
				<tr class="techSpecRow"><td class="techSpecTD1">Rom: </td><td class="techSpecTD2"><?php echo $row['rom']?></td></tr>
				<tr class="techSpecRow"><td class="techSpecTD1">Released: </td><td class="techSpecTD2"><?php echo $row['releasedate']?></td>
				</tr>
				<tr class="techSpecRow"><td class="techSpecTD1">Display: </td><td class="techSpecTD2"><?php echo $row['display_size']?></td></tr>
				<tr class="techSpecRow"><td class="techSpecTD1">Sensor: </td><td class="techSpecTD2"><?php echo $row['sensor']?></td></tr>

				<?php 
                    }
				?>
				</tbody>
				</table>
				
              </div>
		<div class="tab-pane fade" id="profile">
		<div id="myTab" class="pull-right">
		 <a href="#listView" data-toggle="tab"><span class="btn btn-large"><i class="icon-list"></i></span></a>
		</div>
		<br class="clr"/>
        <div class="tab-content">
			<div class="tab-pane" id="listView">
					  
        <?php
                  $conn = new mysqli("localhost", "root", "", "mobile_market");
                  $sql="SELECT * FROM product";
					$result=$conn->query($sql);
					while($row = $result->fetch_assoc())
					{
				?>

		            <hr class="soft"/>
		            <div class="row">
					<div class="span2">
						<img src="<?php echo $row['img_link']; ?>" alt="">
					</div>
					<div class="span4">
						<h3>New | Available</h3>				
						<hr class="soft"/>
						<h5><?php echo $row['product_name']; ?> </h5>
						<a class="btn btn-small pull-right" href="product_details.php?id=<?php echo $row['product_id'];?>">View Details</a>
						<br class="clr"/>
					</div>
					<div class="span3 alignR">
					<form class="form-horizontal qtyFrm">
					<h3> <?php $row['product_price']; ?></h3>
					<label class="checkbox">
						<input type="checkbox">  Adds product to compair
					</label><br/>
					<div class="btn-group">
					  <a href="product_details.php?id=<?php echo $row['product_id'];?>" class="btn btn-large btn-primary"> Add to <i class=" icon-shopping-cart"></i></a>
					  <a href="product_details.php?id=<?php echo $row['product_id'];?>" class="btn btn-large"><i class="icon-zoom-in"></i></a>
					 </div>
						</form>
					</div>
			</div>

            
			<?php 
                    }
				?>
			
			
			<hr class="soft"/>
		</div>
			
				<br class="clr">
					 </div>
		</div>
          </div>

	</div>
</div>
</div> </div>
</div>
<!-- MainBody End ============================= -->
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

<?php 
}
else
{
	header('Location:products.php');
}
?>