<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<?php include('functions.php');?>

<?php include("db.php"); ?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title> ONLONINE SHOPPING </title>

<link rel="stylesheet" href="style.css"  media="all" />
<style>
.text_box {
	border:2px solid red;
	border-radius:10px;
	height: 22px;
	width: 230px;
}


.btn {
  background: #3498db;
  background-image: -webkit-linear-gradient(top, #3498db, #2980b9);
  background-image: -moz-linear-gradient(top, #3498db, #2980b9);
  background-image: -ms-linear-gradient(top, #3498db, #2980b9);
  background-image: -o-linear-gradient(top, #3498db, #2980b9);
  background-image: linear-gradient(to bottom, #3498db, #2980b9);
  -webkit-border-radius: 28;
  -moz-border-radius: 28;
  border-radius: 28px;
  font-family: Arial;
  color: #ffffff;
  font-size: 10px;
  padding: 10px 20px 10px 20px;
  text-decoration: none;
}

.btn:hover {
  background: #3cb0fd;
  background-image: -webkit-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -moz-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -ms-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -o-linear-gradient(top, #3cb0fd, #3498db);
  background-image: linear-gradient(to bottom, #3cb0fd, #3498db);
  text-decoration: none;
}
</style>

</head>

<body>
 
<div class="main_wapper"> 

		
		<div class="header_wrapper"> 
		
				<img id="logo" src="images/logo.png" width="200px" height="150px" />
				<img  id="banner" src="images/banner.gif" width="790px" height="150px"   />
		
		</div>
		 
		<div class="menubar" > 
				<ul id="menu">
					<li> <a href="index.php">Home</a></li>
					<li> <a href="allproduct.php">All Products</a></li>
					<li> <a href="signup.php">Sign Up</a></li>
					<li> <a href="contact.php"> Contact Us</a></li>
					
					
					<li style="float:right" > <a href="admin.php" > Admin login </a></li>
				<div id="form">
			 	<form action="result.php" method="get" enctype="multipart/form-data">
				<input class="text_box" type="text" name="user_query" placeholder="search for product" />
				<input class="btn" type="submit" name="search" value="search" />
			 </form> 
			
			</div>
				</ul>
					
		</div>
						
					
		
		<div id="slide_img">
        	
            <?php include'slide.php';?>
        	
        </div>			
						
		<div class="contetnt_wrapper">
						
				<div id="sidebar"> 
								 
							<div id="sidebar_title" align="center" style="color: #000000;"> catagrories  </div>
									<ul id="cats">
									
										<?php getcats();  ?>
									
									</ul>
									
							<div id="sidebar_title" align="center" style="color: #000000;"> Brands  </div>
									<ul id="cats">
									
										<?php getbrands(); ?>
									
									</ul>
								
					</div>
								
								
						<div id="content_area">
						
						       <?php cart(); ?>
						
								<div id="shopping_cart">
								
									<span style=" float:right; padding:5px; line-height:50px; font-size:25px;">
									Welcome guest:<b style="color:#FF0000">Shopping cart</b> Tolal Item:<?php total_items();?> Total Price:
									<?php total_price();?>
									<a href="cart.php" style=" color:#FFFF00;">Add cart</a>
                                     <a href="login.php">  login</a>
                                    </span>
									
								</div> 
								
								<div id="products_box">
									<?php getpro(); ?>
									
									<?php getcatpro(); ?>
									
									<?php getbrandpro(); ?>
									
									
								</div>
                               
							</div>
						
		</div>	
		
        <div id="scroll_img">
        
        	<div id="scroll_img"> <?php include 'scroll.php' ?> </div>
        	
        </div>
		
        <div id="footer"> 
        
		<h1 align="center" style="color: #FFFF00; float:left; line-height:45px; "> Developed by :obulesu.kuraku@gmail.com</h1>	
		<h1   style="color: #FFFF00; float:right" >
			
			<a href="https://www.facebook.com/obulesu.kuraku"><img src="images/icons/fb-icon.png" width="42" height="42" /></a>
			<a href="https://mail.google.com/mail/?tab=wm#inbox"><img src="images/icons/gmail-icon.png" width="42" height="42" /></a>
			<a href="https://twitter.com/obulesuking"><img src="images/icons/twitter-icon.png" width="42" height="42"/></a>
			<a href="https://www.linkedin.com/profile/view?id=AAIAAAu1_FMBfu6l2hweFOJyOEEOa-cUM0uqGPE&trk=nav_responsive_tab_profile_pic"><img 
            src="images/icons/linkedin-icon.png" width="42" height="42"/></a>
			
		</h1>
		
		</div>

</div>

</body>
</html>
 
