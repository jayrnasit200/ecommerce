<?php
class type extends CI_Controller
{
	function index()
	{
	  $this->load->model('admin/dbtype');
	  $this->form_validation->set_rules('name','enter valid name','required|is_unique[category.name]|regex_match[/^[a-zA-Z\s0-9]*[^!@%~?:#$%^&*()0]/]');

	 if($this->form_validation->run()==false)
		 {
			 $data['alldata']=$this->dbtype->GetAllData();
			 $this->load->view('admin/header');
			 $this->load->view('admin/type/add',$data);
		 }
		else
		 {
			
			 $abc=array(
			 'name'=>$_POST['name'],
			
			 );
			  $this->dbtype->insert_data($abc);
		      redirect('admin/type');
	     }
		}
	 function delete($id)
		{
			$this->load->model('admin/dbtype');
			$this->dbtype->delete_data($id);
		      redirect('admin/type');
		}
	function edit($id)
	{
	  $this->load->model('admin/dbtype');
	  $this->form_validation->set_rules('name','enter valid name','required|is_unique[type.name]|regex_match[/^[a-zA-Z\s]+$/]');

	 if($this->form_validation->run()==false)
		 {
		 	 $data['return']=$this->dbtype->getedit($id);
			 $data['alldata']=$this->dbtype->GetAllData();
			 $this->load->view('admin/header');
			 $this->load->view('admin/type/add',$data);
		 }
		else
		 {
			
			 $abc=array(
			 'name'=>$_POST['name'],
			
			 );
			  $this->dbtype->update_data($abc,$id);
		      redirect('admin/type');
	     }
	
}
}
?>