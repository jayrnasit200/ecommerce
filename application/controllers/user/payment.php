<?php
class payment extends CI_Controller
{
	function index()
		{
			$this->load->model('user/dbpayment');
			$data['alldata']=$this->dbpayment->GetData();
			
			$this->load->view('user/payment_form',$data);
			
			
		}
}
?>