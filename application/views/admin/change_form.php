<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>change_pass</title>
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
				<h2 class="title1">change password</h2>
				<div class="widget-shadow">
					<div class="login-body">
                    
<form method="post">
<?php echo $msg;?>
            <div>Email</div>
            <div><input type="email" name="email" class="user" readonly="readonly" value="<?php echo $this->session->userdata('email');?>"><?php echo form_error('email');?></div>
    
            <div>Current Password</div>
            <div><input type="password" class="lock" name="current_password" placeholder="Current Password" value="<?php echo set_value('current_password');?>"><?php echo form_error('current_password');?></div>
    
            <div>New Password</div>
            <div><input type="password" class="lock" name="new_password" placeholder="New Password" value="<?php echo set_value('new_password');?>"><?php echo form_error('new_password');?></div>
    
            <div>confirm password</div>
            <div><input type="password" class="lock" placeholder="confirm password" name="confirm_password"  value="<?php echo set_value('confirm_password');?>"><?php echo form_error('confirm_password');?></div>
    
        <div>
            	<input type="submit" name="submit" value="Update"/>
        </div>
    
</form>
				</div>
               </div>
              </div>
             </div>
 
</body>
</html>