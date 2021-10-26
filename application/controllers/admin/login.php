<?php
class login extends CI_controller
{
		function index()
	   {
	   
	   	
		 $this->load->model('admin/dblogin');
         $this->form_validation->set_rules('email','enter valid email','required');
		 $this->form_validation->set_rules('password','enter valid Password','required');
	     if($this->form_validation->run()==false)
		 {
			 $this->load->view('admin/login_form');
		 }
		 else
		 {
			 $login=$this->dblogin->chklogin($_POST['email'],$_POST['password']);
			 if($login)
			 {
				 $this->session->set_userdata('email',$_POST['email']);
				 redirect('admin/category');
				 echo "Success";
			 }
			 else
			 {
				 echo "Invalid";
			 }
		 }
	  }
	   function logout()
		  {
			  $this->session->unset_userdata('email');
			  redirect('admin/login');
		  }
	  
}
	
?>