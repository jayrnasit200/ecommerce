<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="<?php echo base_url();?>css/bootstrap.css" rel='stylesheet' type='text/css' />

<!-- Custom CSS -->
<link href="<?php echo base_url();?>css/style.css" rel='stylesheet' type='text/css' />

<!-- font-awesome icons CSS -->
<link href="<?php echo base_url();?>css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons CSS -->

</head>

<body>

<div id="page-wrapper">
			<div class="main-page login-page ">
				<h2 class="title1">Login</h2>
				<div class="widget-shadow">
					<div class="login-body">
						<form action="#" method="post">
							<input type="email" class="user"  name="email" placeholder="Enter Your Email" required>
							<input type="password"  name="password" class="lock" placeholder="Password" required>
							<div class="forgot-grid">
								<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Remember me</label>
								<div class="forgot">
									<a href="#">forgot password?</a>
								</div>
								<div class="clearfix"> </div>
							</div>
							<input type="submit" name="submit" value="Sign In">
							
						</form>
					</div>
				</div>
				
			</div>
		</div>




</body>
</html>