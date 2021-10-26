<?php
class signup extends CI_Controller
{
	function index()
	{
		$this->load->model('user/dbsignup');
	  $this->form_validation->set_rules('Name','enter valid Name','required|alpha');
	  $this->form_validation->set_rules('Email','enter valid Email','required|valid_email');
	  $this->form_validation->set_rules('Mobile','enter valid Mobile','required|is_numeric');
	  $this->form_validation->set_rules('password','enter valid password','required');
	  
	
	if($this->form_validation->run()==false)
		{
		
		$this->load->view('user/header');
		
		$this->load->view('user/footer');
			
		}
	else
	{
		 $abc=array(
			 'Name'=>$_POST['Name'],
			 'Email'=>$_POST['Email'],
			 'Mobile'=>$_POST['Mobile'],
			 'password'=>$_POST['password']
			// 'password'=>md5($_POST['password'])
			 );
			  $this->dbsignup->insert_data($abc);
                redirect('welcome');		      
	}
	
	
	}
}
?>