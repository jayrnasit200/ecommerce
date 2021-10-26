<!DOCTYPE html>
<html>
<head>
<title>Elite Shoppy an Ecommerce Online Shopping Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>



<meta name="viewport" content="width=device-width, initial-scale=1">

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


<link href="<?php echo base_url();?>css/user_css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />

<link href="<?php echo base_url();?>css/user_css/style.css" rel="stylesheet" type="text/css" media="all" />

<link href="<?php echo base_url();?>css/user_css/font-awesome.css" rel="stylesheet"> 

<link href="<?php echo base_url();?>css/user_css/easy-responsive-tabs.css" rel='stylesheet' type='text/css'/>


<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">

<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic' rel='stylesheet' type='text/css'>

<style>

.top_nav_right
{
width:auto !important;
}
.item-info-product h4
{
	height:50px !important;
}
</style>

</head>


<body>

<div class="header" id="home">
	<div class="container">
		<ul>
		 <?php
		 date_default_timezone_set("Asia/Calcutta");
		     $login=$this->session->userdata('Email');
             if($login)
			 {
				 ?>
                   <li> <a href="#"><i class="fa fa-user" aria-hidden="true"></i> Welcome : <?php echo $login;?> </a></li>
                   
                   <li> <a href="<?php echo base_url();?>index.php/user/login/logout"><i class="fa fa-unlock-alt" aria-hidden="true"></i> Logout </a></li> 
                   
                 <?php
			 }
			 else
			 {
				 ?>
            <li> <a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-unlock-alt" aria-hidden="true"></i> Sign In </a></li>
			<li> <a href="#" data-toggle="modal" data-target="#myModal2"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Sign Up </a></li>
                  <?php
			 }
			 ?>
			<li><i class="fa fa-phone" aria-hidden="true"></i> Call : 01234567898</li>
			<li><i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="mailto:info@example.com">info@example.com</a></li>
		</ul>
	</div>
</div>


<div class="header-bot">
	<div class="header-bot_inner_wthreeinfo_header_mid">
		<div class="col-md-4 header-middle">
			<form action="<?php echo base_url();?>index.php/welcome/search" method="post">
					<input type="search" name="search" placeholder="Search here..." required>
					<input type="submit" value=" ">
				<div class="clearfix"></div>
			</form>
		</div>
		<!-- header-bot -->
			<div class="col-md-4 logo_agile">
				<h1><a href="index.html"><span>E</span>lite Shoppy <i class="fa fa-shopping-bag top_logo_agile_bag" aria-hidden="true"></i></a></h1>
			</div>
        <!-- header-bot -->
		<div class="col-md-4 agileits-social top_content">
						<ul class="social-nav model-3d-0 footer-social w3_agile_social">
						                                   <li class="share">Share On : </li>
															<li><a href="#" class="facebook">
																  <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="twitter"> 
																  <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="instagram">
																  <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="pinterest">
																  <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div></a></li>
														</ul>



		</div>
		<div class="clearfix"></div>
	</div>
</div>

<div class="ban-top">
	<div class="container">
		<div class="top_nav_left">
			<nav class="navbar navbar-default">
			  <div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse menu--shylock" id="bs-example-navbar-collapse-1">
				  <ul class="nav navbar-nav menu__list">
					<li class="active menu__item menu__item--current"><a class="menu__link" href="<?php echo base_url();?>">Home <span class="sr-only">(current)</span></a></li>
					<li class=" menu__item"><a class="menu__link" href="about.html">About</a></li>
                    <li class=" menu__item"><a class="menu__link" href="<?php echo base_url();?>index.php/user/product">Shop</a></li>
                    
                 <?php 
				   $AllCategory=$this->dbheader->GetAllCatData();
				   
				   foreach($AllCategory as $cat)
				   {
				      $AllSubCat=$this->dbheader->GetAllSubCat($cat->cat_id);
				 ?>   
                    
					<li class="dropdown menu__item">
						<a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $cat->name;?><span class="caret"></span></a>
							<ul class="dropdown-menu multi-column columns-3">
								<div class="agile_inner_drop_nav_info">
									
									<div class="col-sm-3 multi-gd-img">
										<ul class="multi-column-dropdown">
                                        
                                        <?php  
                                          foreach($AllSubCat as $row)
										  {
											  ?>
											<li><a href="<?php echo base_url();?>index.php/user/product/getcatsubcat/<?php echo $row->cat_id;?>/<?php echo $row->sub_category_id?>"><?php echo $row->Name; ?></a></li>
                                            
                                                     
											  <?php
										  }
										  ?>
										</ul>
									</div>
									
									<div class="clearfix"></div>
								</div>
							</ul>
					</li>
					  <?php
				   }
				   ?>
					
					<li class=" menu__item"><a class="menu__link" href="contact.html">Contact</a></li>
				  </ul>
				</div>
			  </div>
			</nav>	
		</div>
		<div class="top_nav_right">
        <?php
		$login=$this->session->userdata('Email');
		$allcartdat=$this->dbheader->getallcartdata($login);
		
		
		?>
			<div class="wthreecartaits wthreecartaits2 cart cart box_1"> 
						<form  method="post" class="last"> 
						
						<input type="hidden" name="display" value="1">
						
                       <a href="<?php echo base_url();?>index.php/user/cart"> 
                        <button class="w3view-cart" type="button" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button></a>
                        <span class badge><?php echo $allcartdat; ?></span>
					</form>  
  
						</div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
			<div class="modal-dialog">
				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
						<div class="modal-body modal-body-sub_agile">
						<div class="col-md-8 modal_body_left modal_body_left1">
						<h3 class="agileinfo_sign">Sign In <span>Now</span></h3>
									
                        <form action="<?php echo base_url();?>index.php/user/login/" method="post">
							
							<div class="styled-input">
								<input type="email" name="Email" required> 
								<label>Email</label>
                              
								<span></span>
                                  <?php echo form_error('Email');?>
							</div> 
							<div class="styled-input agile-styled-input-top">
								<input type="password" name="password" required>
								<label>Password</label>
                               
								<span></span>
                                 <?php echo form_error('password');?>
							</div>
							<input type="submit" value="Sign In">
						</form>
						  <ul class="social-nav model-3d-0 footer-social w3_agile_social top_agile_third">
															<li><a href="#" class="facebook">
																  <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="twitter"> 
																  <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="instagram">
																  <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="pinterest">
																  <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div></a></li>
														</ul>
														<div class="clearfix"></div>
														<p><a href="#" data-toggle="modal" data-target="#myModal2" > Don't have an account?</a></p>

						</div>
						<div class="col-md-4 modal_body_right modal_body_right1">
							<img src="images/log_pic.jpg" alt=" "/>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<!-- //Modal content-->
			</div>
		</div>
        
        <div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
			<div class="modal-dialog">
				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
						<div class="modal-body modal-body-sub_agile">
						<div class="col-md-8 modal_body_left modal_body_left1">
						<h3 class="agileinfo_sign">Sign Up <span>Now</span></h3>
						 
					 	<form action="<?php echo base_url();?>index.php/user/signup/" method="post">
							<div class="styled-input agile-styled-input-top">
								<input type="text" name="Name"  required>
								<label>Name</label>
								<span></span>
                                <?php echo form_error('Name');?>
							</div>
							<div class="styled-input">
								<input type="email" name="Email" required> 
								<label>Email</label>
								<span></span>
                                <?php echo form_error('Email');?>
							</div> 
                            <div class="styled-input">
								<input type="text" value="+91" name="Mobile" required> 
								<label>Mobile</label>
								<span></span>
                                <?php echo form_error('Mobile');?>
							</div> 
							<div class="styled-input">
								<input type="password" name="password" required> 
								<label>Password</label>
								<span></span>
                                <?php echo form_error('password');?>
							</div> 
							<div class="styled-input">
								<input type="password" name="Confirm Password" required> 
								<label>Confirm Password</label>
								<span></span>
							</div> 
							<input type="submit" value="Sign Up">
						</form>
						  <ul class="social-nav model-3d-0 footer-social w3_agile_social top_agile_third">
															<li><a href="#" class="facebook">
																  <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="twitter"> 
																  <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="instagram">
																  <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="pinterest">
																  <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div></a></li>
														</ul>
														<div class="clearfix"></div>
														<p><a href="#">By clicking register, I agree to your terms</a></p>

						</div>
						<div class="col-md-4 modal_body_right modal_body_right1">
							<img src="images/log_pic.jpg" alt=" "/>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
			</div>
		

</body>
</html>