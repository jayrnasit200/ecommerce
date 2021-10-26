<?php
class product extends CI_Controller
{
	function index()
		{
			$this->load->view('user/header');
			$this->load->model('user/dbproduct');
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
			$this->load->view('user/product');
			$this->load->view('user/footer');
		}
	
	function pro_details($id)
		{
			
			$this->load->model('user/dbproduct');
			$data['allprodata']=$this->dbproduct->GetProData($id);
			$this->load->view('user/header');
			
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
			//redirect(base_url());
			}
		}
			
			$this->load->view('user/single_form',$data);
			$this->load->view('user/footer');
			
		}
	function getcatsubcat($cat,$subs)
		{
			$this->load->model('user/dbproduct');
			$data['cat_id']=$cat;
			$data['sub_cat_id']=$subs;
			$data['allprodata']=$this->dbproduct->getmenudata($cat,$subs);
			$this->load->view('user/header');
			
			$this->load->view('user/menu_form',$data);
			$this->load->view('user/footer');
		}
		function lowprice()
		{
			$this->load->view('user/header');
			$this->load->model('user/dbproduct');
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
			$this->load->view('user/product_lowprice');
			$this->load->view('user/footer');
		}
		
		function highprice()
		{
			$this->load->view('user/header');
			$this->load->model('user/dbproduct');
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
			$this->load->view('user/product_highprice');
			$this->load->view('user/footer');
		}
		
		
		function nameasc()
		{
			$this->load->view('user/header');
			$this->load->model('user/dbproduct');
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
			$this->load->view('user/product_nameasc');
			$this->load->view('user/footer');
		}
		function namedesc()
		{
			$this->load->view('user/header');
			$this->load->model('user/dbproduct');
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
			$this->load->view('user/product_namedesc');
			$this->load->view('user/footer');
		}
		
		

}
?>