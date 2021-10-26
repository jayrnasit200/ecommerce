<?php
class login extends CI_controller
{
		function index()
	   {
		 $this->load->model('user/dblogin');
         $this->form_validation->set_rules('Email','enter valid Email','required');
		 $this->form_validation->set_rules('password','enter valid password','required');
	     if($this->form_validation->run()==false)
		 {
			 $this->load->view('user/header');
			 $this->load->view('user/login_form');
			 $this->load->view('user/footer');
		 }
		 else
		 {
			 $login=$this->dblogin->chklogin($_POST['Email'],$_POST['password']);
			 if($login)
			 {
				 $this->session->set_userdata('Email',$_POST['Email']);
				 redirect('welcome');
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
		  $this->session->unset_userdata('Email');
		  redirect('user/login');
	  }
}
	  ?>