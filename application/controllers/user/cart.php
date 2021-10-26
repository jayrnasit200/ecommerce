<?php
class cart extends CI_Controller
{
	function index()
	{
		$login=$this->session->userdata('Email');
		if($login=='')
		{
			redirect('user/login');
		}
		else
		{
			$this->load->model('user/dbcart');
			$this->load->view('user/header');
			$data['allcart']=$this->dbcart->getcart($login);
			$this->load->view('user/cart_form',$data);
		    $this->load->view('user/footer');
		}
	}
	 function delete($id)
		{
			$this->load->model('user/dbcart');
			$this->dbcart->delete_data($id);
		    $this->session->set_flashdata('msg','Cart Data SuccessFully Deleted');
			redirect('user/cart');
		}
	
	function update()
	{
		$this->load->model('user/dbcart');
		$id=$this->input->post('cart_id');
		$qty=$this->input->post('qty');
		$sub=$this->input->post('amount');
		$data=array('amount'=>$sub,'qty'=>$qty);
		$this->dbcart->cart_update($id,$data);
		$this->session->set_flashdata(array('msg'=>'success','type'=>'Your Cart SuccesFully Update !!'  ));
		//redirect("checkout",'refresh');
	}
}
?>