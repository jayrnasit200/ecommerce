<?php
class order extends CI_Controller
{
	function index()
	{
			$this->load->model('admin/dborder');
			$data['alldata']=$this->dborder->GetAllData();
			 $this->load->view('admin/header');
			 $this->load->view('admin/order_form',$data);
			 $this->load->view('admin/footer');
	}
}
	?>