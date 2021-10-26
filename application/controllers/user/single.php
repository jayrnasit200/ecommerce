<?php

class single extends CI_Controller
{
	
	function index ()
	{
							
		$this->load->model('user/dbsingle');
		$data['alldata']=$this->dbsingle->GetAllData();		

		$this->load->view('user/header');
		$this->load->view('user/single_form',$data);
		
		$this->load->view('user/footer');
		
	}
}
?>