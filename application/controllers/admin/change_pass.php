<?php 
class change_pass extends CI_controller
	{
		function index()
		{
			
			
		  $change=$this->session->userdata('email');
		  if($change=='')
		  {
			  redirect('admin/login');
		  }
			
   		 $this->load->model('admin/dbchange');
         $this->form_validation->set_rules('email','enter valid email','required');
		 $this->form_validation->set_rules('current_password','Current_Password valid Password','required');    
		 $this->form_validation->set_rules('new_password','enter valid New_Password','required|matches[confirm_password]');
		 $this->form_validation->set_rules('confirm_password','enter valid confirm_Password','required');
		 
		 if($this->form_validation->run()==false)
		 {
			$data['msg']='';
		 }
		 else
		 {
			 $Chklogin=$this->dbchange->chklog($_POST['email'],$_POST['current_password']);
			 if($Chklogin)
			 {
				 $PassUpdate=$this->dbchange->GetPassUpdate($_POST['new_password'],$_POST['email']);
				 $data['msg']="Password SuccessFully Updated";
				 redirect('admin/login');
			 }
			 else
			 {
				 $data['msg']="Invalid";
			 }
			 
		 }
		 $this->load->view('admin/change_form',$data);
	  }
 }
?>