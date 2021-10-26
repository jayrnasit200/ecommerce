<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>




<meta name="viewport" content="width=device-width, initial-scale=1">

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


<link href="<?php echo base_url();?>css/user_css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />

<link href="<?php echo base_url();?>css/user_css/style.css" rel="stylesheet" type="text/css" media="all" />

<link href="<?php echo base_url();?>css/user_css/font-awesome.css" rel="stylesheet"> 

<link href="<?php echo base_url();?>css/user_css/easy-responsive-tabs.css" rel='stylesheet' type='text/css'/>


<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">

<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic' rel='stylesheet' type='text/css'>

<title>Elite Shoppy an Ecommerce Online Shopping Category Flat Bootstrap Responsive Website Template |Men's :: w3layouts</title>
<!--/tags -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Elite Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

</head>
<body>
<!-- header -->

<!-- //header -->
<!-- header-bot -->

<!-- //header-bot -->
<!-- banner -->

<!-- //banner-top -->
<!-- Modal1 -->
		
<!-- //Modal1 -->
<!-- Modal2 -->
		
<!-- //Modal2 -->
<!-- /banner_bottom_agile_info -->


  <!-- banner-bootom-w3-agileits -->
	<div class="banner-bootom-w3-agileits">
	<div class="container">
         <!-- mens -->
		<div class="col-md-4 products-left">
			<div class="filter-price">
				<h3>Filter By <span>Price</span></h3>
					<ul class="dropdown-menu6">
						<li>                
							<div id="slider-range"></div>							
							
						</li>			
					</ul>
			</div>
			<div class="css-treeview">
				<h4>Categories</h4>
				<ul class="tree-list-pad">
                <?php 
				  $AllCatData=$this->dbproduct->Getallcatdata();
				  foreach($AllCatData as $row)
				  {
					  $GetSubCat=$this->dbproduct->GetAllSubCat($row->cat_id);
					  ?>
					<li><input type="checkbox" checked="checked" id="item-0" /><label for="item-0"><i class="fa fa-long-arrow-right" aria-hidden="true"></i><?php echo $row->name;?></label>
						<ul>
                        <?php
						  foreach($GetSubCat as $sub)
						  {
							  ?>
							<li><input type="checkbox" id="item-0-0" /><label for="item-0-0"><i class="fa fa-long-arrow-right" aria-hidden="true"></i><a href="<?php echo base_url();?>index.php/user/product/getcatsubcat/<?php echo $sub->cat_id;?>/<?php echo $sub->sub_category_id?>"><?php echo $sub->Name;?></a></label>
							</li>
							<?php
						  }
							?>
						</ul>
					</li>
					<?php
				  }
					?>
				</ul>
			</div>
			<div class="community-poll">
				<h4>Community Poll</h4>
				<div class="swit form">	
					<form>
					<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio" checked=""><i></i>More convenient for shipping and delivery</label> </div></div>
					<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>Lower Price</label> </div></div>
					<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>Track your item</label> </div></div>
					<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>Bigger Choice</label> </div></div>
					<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>More colors to choose</label> </div></div>	
					<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>Secured Payment</label> </div></div>
					<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>Money back guaranteed</label> </div></div>	
					<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>Others</label> </div></div>		
					<input type="submit" value="SEND">
					</form>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="col-md-8 products-right">
			<h5>Product <span>Compare(0)</span></h5>
			<div class="sort-grid">
				<div class="sorting">
					<h6>Sort By</h6>
                    <script type="text/javascript">
function handleSelect(elm)
{
window.location = elm.value+"";
}
</script>
					<select id="country1" onchange="javascript:handleSelect(this)" class="frm-field required sect">
						<option value="<?php echo base_url();?>index.php/user/product">Default</option>
						<option value="<?php echo base_url();?>index.php/user/product/nameasc">Name(A - Z)</option> 
						<option value="<?php echo base_url();?>index.php/user/product/namedesc">Name(Z - A)</option>
						<option value="<?php echo base_url();?>index.php/user/product/highprice">Price(High - Low)</option>
						<option value="<?php echo base_url();?>index.php/user/product/lowprice">Price(Low - High)</option>	
										
					</select>
					<div class="clearfix"></div>
				</div>
				<div class="sorting">
					<h6>Showing</h6>
					<select id="country2" onchange="change_country(this.value)" class="frm-field required sect">
						<option value="null">7</option>
						<option value="null">14</option> 
						<option value="null">28</option>					
						<option value="null">35</option>								
					</select>
					<div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="men-wear-top">
				
				
				<div class="clearfix"></div>
			</div>
			
				
                   <?php
				   $allprodata=$this->dbproduct->Getallprodata();
					//$allprodata=$this->dbproduct->Getallprodata();
				   
foreach($allprodata as $row)

 {
	

?>
<div class="col-md-4 product-men">

								<div class="men-pro-item simpleCart_shelfItem">
									<div class="men-thumb-item">
										<img src="<?php echo base_url();?>upload_img/product/<?php echo $row->image;?>" alt="" class="pro-image-front" style="height:250px !important">
											<div class="men-cart-pro">
                                            
												<div class="inner-men-cart-pro">
													<a href="<?php echo base_url();?>index.php/product/" class="<?php echo $row->product_id;?>"> </a>
												</div>
											</div>
											<span class="product-new-top">New</span>
											
									</div>
									<div class="item-info-product ">
										<h4><a href="<?php echo base_url();?>index.php/user/product/pro_details/<?php echo $row->product_id;?>"><?php echo $row->name?></a></h4>
										<div class="info-product-price">
											<span class="item_price"><?php echo $row->sell_price ?></span>
											<del><?php echo $row->price ?></del>
										</div>
										<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
															<form  method="post">
																<fieldset>
                                                                                                                  <input type="hidden" name="product_id" value="<?php echo $row->product_id;?>" />
           <input type="hidden" name="rate" value="<?php echo $row->sell_price;?>" />                                                                                                       			<input type="hidden" name="qty" value="1" />
                                                                                                                 <input type="hidden" name="amount" value="<?php echo $row->sell_price;?>" />
                
																	
                    <input type="submit" name="submit" value="Add to cart" class="button" onclick="alert(your Item Successfully in cart)"/>
																</fieldset>
															</form>
														</div>
																			
									</div>
								</div>
                                </div>
                                <?php
 }
 ?>
							
			
			
				
				<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>
		
		
	</div>
</div>	
<!-- //mens -->
<!--/grids-->
<div class="coupons">
		<div class="coupons-grids text-center">
			<div class="w3layouts_mail_grid">
				<div class="col-md-3 w3layouts_mail_grid_left">
					<div class="w3layouts_mail_grid_left1 hvr-radial-out">
						<i class="fa fa-truck" aria-hidden="true"></i>
					</div>
					<div class="w3layouts_mail_grid_left2">
						<h3>FREE SHIPPING</h3>
						<p>Lorem ipsum dolor sit amet, consectetur</p>
					</div>
				</div>
				<div class="col-md-3 w3layouts_mail_grid_left">
					<div class="w3layouts_mail_grid_left1 hvr-radial-out">
						<i class="fa fa-headphones" aria-hidden="true"></i>
					</div>
					<div class="w3layouts_mail_grid_left2">
						<h3>24/7 SUPPORT</h3>
						<p>Lorem ipsum dolor sit amet, consectetur</p>
					</div>
				</div>
				<div class="col-md-3 w3layouts_mail_grid_left">
					<div class="w3layouts_mail_grid_left1 hvr-radial-out">
						<i class="fa fa-shopping-bag" aria-hidden="true"></i>
					</div>
					<div class="w3layouts_mail_grid_left2">
						<h3>MONEY BACK GUARANTEE</h3>
						<p>Lorem ipsum dolor sit amet, consectetur</p>
					</div>
				</div>
					<div class="col-md-3 w3layouts_mail_grid_left">
					<div class="w3layouts_mail_grid_left1 hvr-radial-out">
						<i class="fa fa-gift" aria-hidden="true"></i>
					</div>
					<div class="w3layouts_mail_grid_left2">
						<h3>FREE GIFT COUPONS</h3>
						<p>Lorem ipsum dolor sit amet, consectetur</p>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>

		</div>
</div>
<!--grids-->
<!-- footer -->

<!-- //footer -->

<!-- login -->
			<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body modal-spa">
							<div class="login-grids">
								<div class="login">
									<div class="login-bottom">
										<h3>Sign up for free</h3>
										<form method="post">
											<div class="sign-up">
												<h4>Email :</h4>
												<input type="text" value="Type here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Type here';}" required>	
											</div>
											<div class="sign-up">
												<h4>Password :</h4>
												<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required>
												
											</div>
											<div class="sign-up">
												<h4>Re-type Password :</h4>
												<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required>
												
											</div>
											<div class="sign-up">
												<input type="submit" value="REGISTER NOW" >
											</div>
											
										</form>
									</div>
									<div class="login-right">
										<h3>Sign in with your account</h3>
										<form>
											<div class="sign-in">
												<h4>Email :</h4>
												<input type="text" value="Type here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Type here';}" required>	
											</div>
											<div class="sign-in">
												<h4>Password :</h4>
												<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required>
												<a href="#">Forgot password?</a>
											</div>
											<div class="single-bottom">
												<input type="checkbox"  id="brand" value="">
												<label for="brand"><span></span>Remember Me.</label>
											</div>
											<div class="sign-in">
												<input type="submit" value="SIGNIN" >
											</div>
										</form>
									</div>
									<div class="clearfix"></div>
								</div>
								<p>By logging in you agree to our <a href="#">Terms and Conditions</a> and <a href="#">Privacy Policy</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
<!-- //login -->
<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<script src="js/responsiveslides.min.js"></script>
				<script>
						// You can also use "$(window).load(function() {"
						$(function () {
						 // Slideshow 4
						$("#slider3").responsiveSlides({
							auto: true,
							pager: true,
							nav: false,
							speed: 500,
							namespace: "callbacks",
							before: function () {
						$('.events').append("<li>before event fired.</li>");
						},
						after: function () {
							$('.events').append("<li>after event fired.</li>");
							}
							});
						});
				</script>
<script src="js/modernizr.custom.js"></script>
	<!-- Custom-JavaScript-File-Links --> 
	<!-- cart-js -->
	<script src="js/minicart.min.js"></script>
<script>
	// Mini Cart
	paypal.minicart.render({
		action: '#'
	});

	if (~window.location.search.indexOf('reset=true')) {
		paypal.minicart.reset();
	}
</script>

	<!-- //cart-js --> 
	<!---->
							<script type='text/javascript'>//<![CDATA[ 
							$(window).load(function(){
							 $( "#slider-range" ).slider({
										range: true,
										min: 0,
										max: 9000,
										values: [ 1000, 7000 ],
										slide: function( event, ui ) {  $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
										}
							 });
							$( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) + " - $" + $( "#slider-range" ).slider( "values", 1 ) );

							});//]]>  

							</script>
						<script type="text/javascript" src="js/jquery-ui.js"></script>
					 <!---->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/jquery.easing.min.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->

<!-- for bootstrap working -->
<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>
