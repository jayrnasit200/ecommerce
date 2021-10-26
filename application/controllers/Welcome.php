<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$data['allslider']=$this->dbheader->GetAllSliderData();
		$data['allproduct']=$this->dbheader->GetAllproductData();
		$data['allcat']=$this->dbheader->GetAllCatData();
		if($this->input->post('submit'))
		{
			$login=$this->session->userdata('Email');
			if($login=='')
			{
				redirect('user/login');
			}
			else
			{
			$rate=$_POST['rate'];	
			$pro=$_POST['product_id'];
			$email=$login;
			$qty='1';
			$amount=$_POST['amount'];
			$abc=array('product_id'=>$pro,'Email'=>$email,'amount'=>$amount,'qty'=>$qty,'rate'=>$rate);
			$this->dbheader->cat_insert($abc);
			redirect(base_url());
			}
		}
		$this->load->view('user/header');
		$this->load->view('welcome_message',$data);
		$this->load->view('user/footer');
		
	}
	function cat_details($id)
		{
			
			$data['allsub']=$this->dbheader->GetAllSubCat($id);
			$this->load->view('user/header');
			$this->load->view('welcome_message',$data);
			$this->load->view('user/footer');
			
		}
		
		function search()
		{
			$data1=$_REQUEST['search'];
			
			$data['allsearchdata']=$this->dbheader->GetAllSearchData($data1);
		    $this->load->view('user/header');
			$this->load->view('user/search',$data);
			$this->load->view('user/footer');
			
		}
		
}

