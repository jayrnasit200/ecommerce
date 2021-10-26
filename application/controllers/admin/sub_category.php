<?php
class sub_category extends CI_Controller
{
	function index()
		{
			$login=$this->session->userdata('email');
		if($login=='')
		{
			redirect('admin/login');
		}
			
	$this->load->model('admin/dbsub_category');
	$this->form_validation->set_rules('name','enter valid name','required|is_unique[category.name]|regex_match[/^[a-zA-Z\s]+$/]');
	 if($this->form_validation->run()==false)
	 {
			 $data['alldata']=$this->dbsub_category->GetAllData();
			 $data['allcat']=$this->dbsub_category->GetAllCatData();
			 $this->load->view('admin/header');
			 $this->load->view('admin/sub_category/add',$data);
	 }
	 else
	 {
		 $abc=array(
		 'cat_id'=>$_POST['cat_id'],
		 'name'=>$_POST['name']
		 );
		  $this->dbsub_category->insert_data($abc);
		      redirect('admin/sub_category');
	 }

		}
		function delete($id)
		{
			$this->load->model('admin/dbsub_category');
			$this->dbsub_category->delete_data($id);
		      redirect('admin/sub_category');
		}
		
		function edit($id)
    {
        $this->load->model('admin/dbsub_category');
        $this->form_validation->set_rules('name','enter valid name','required|alpha');
        if($this->form_validation->run()==false)

        {
			$data['alldata']=$this->dbsub_category->GetAllData($id);
         $data['return']=$this->dbsub_category->getedit($id);
          $data['allcat']=$this->dbsub_category->GetAllCatData();
         $this->load->view('admin/header'); 
         $this->load->view('admin/sub_category/edit',$data);
        }        
        else
        {            
         $abc=array(
           	'cat_id'=>$_POST['cat_id'],
			 'name'=>$_POST['name'],
 
        );
         $this->dbsub_category->update_data($abc,$id);
         redirect('admin/sub_category');
        }
    }     
}
?>