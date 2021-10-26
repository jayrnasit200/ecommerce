<?php
class order extends CI_Controller
{
	function index()
	{
		$user=$this->session->userdata('Email');
		
		  if($user=='')
		  {
			  redirect('user/login');
		  }
		
		date_default_timezone_set("Asia/Calcutta");
		
		$this->load->model('user/dborder');
		$this->form_validation->set_rules('order_id');
		$this->form_validation->set_rules('Full_name','enter valid Full name','required');
		$this->form_validation->set_rules('Mobile_number','enter valid Mobile number','required');
		$this->form_validation->set_rules('Pincode','enter valid Pincode','required');
		$this->form_validation->set_rules('House_no','enter valid ','required');
		$this->form_validation->set_rules('Colony','enter valid Area, Colony, Street, Sector, Village','required');
		$this->form_validation->set_rules('Landmark','enter valid Landmark e.g. near apollo hospital','required');
		$this->form_validation->set_rules('Town_City','enter valid Town/City','required');
		$this->form_validation->set_rules('State','enter valid State','required');
		//$this->form_validation->set_rules('Address_Type','enter valid Address Type','required');
		
		 if($this->form_validation->run()==false)
		 {
		    $data['allorder']=$this->dborder->GetAllUserOrderData($user);
			$this->load->view('user/header');
			$this->load->view('user/order_form',$data);
			$this->load->view('user/footer');
		 }
		else
		 {
			$date=date('Y-m-d');
			$cratedate= date('Y-m-d H:i:s');
			
			$data=$this->input->post();
			for($i=0;$i<count($data['order_id']);$i++)
			{
			 $abc[]=array(
			 'Full_name'=>$_POST['Full_name'],
			 'Mobile_number'=>$_POST['Mobile_number'],
			 'Pincode'=>$_POST['Pincode'],
			 'House_no'=>$_POST['House_no'],
			 'Colony'=>$_POST['Colony'],
			 'Landmark'=>$_POST['Landmark'],
			 'Town_City'=>$_POST['Town_City'],
			 'State'=>$_POST['State'],
			 'Address_Type'=>$_POST['Address_Type'],
			 'date'=>$date,
			 'create_date'=>$cratedate,
			 'Email'=>$_POST['Email'],
			 'order_id'=>$_POST['order_id'][$i],
			 'product_id'=>$_POST['product_id'][$i],
			 'Qty'=>$_POST['Qty'][$i],
			 'Rate'=>$_POST['Rate'][$i],
			 'Amount'=>$_POST['Amount'][$i]
			 
			 );
			
			}
			
			  //$this->dborder->insert_data($abc);
			 $this->db->insert_batch('order_address',$abc,'order_id');
			  
			 $this->session->set_flashdata('msg','Your Order is Successfully Confirm !!!');
			 redirect('user/order');
			
		      
	     
		}
		
		
			
			
			
	}
}
?>