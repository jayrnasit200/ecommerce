<?php
class category extends CI_Controller
{
	function index()
	{
	  $this->load->model('admin/dbcat');
	  $this->form_validation->set_rules('name','enter valid name','required|is_unique[category.name]|regex_match[/^[a-zA-Z\s]+&/]');

	 if($this->form_validation->run()==false)
		 {
			 $data['alldata']=$this->dbcat->GetAllData();
			 $this->load->view('admin/header');
			 $this->load->view('admin/category/add',$data);
		 }
		else
		 {
			 $img['upload_path']='upload_img/category/';
			 $img['allowed_types']='gif|png|jpeg|jpg|';
             $this->load->library('upload',$img);
             
			 if(!$this->upload->do_upload('image'))
			 {
				 $file='';
			 }
			 else
			 {
				 $file=$this->upload->file_name;
			 }
			 
			 			 
			 $abc=array(
			 'name'=>$_POST['name'],
			 'image'=>$file
			 );
			  $this->dbcat->insert_data($abc);
		      redirect('admin/category');
	     }
		}
	 function delete($id)
		{
			$this->load->model('admin/dbcat');
			$this->dbcat->delete_data($id);
		      redirect('admin/category');
		}
		 function edit($id)
		 {
		
		 $this->load->model('admin/dbcat');
	 	 $this->form_validation->set_rules('name','enter valid name','required|alpha');


		 if($this->form_validation->run()==false)
		 {
			 $data['return']=$this->dbcat->getedit($id);
			 $data['alldata']=$this->dbcat->GetAllData();
			 $this->load->view('admin/header');
			 $this->load->view('admin/category/cat_edit',$data);
		 }
		else
		 {
			 $img['upload_path']='upload_img/category/';
			 $img['allowed_types']='gif|png|jpeg|jpg|';
             $this->load->library('upload',$img);
             
			 if(!$this->upload->do_upload('image'))
			 {
				 $file=$_POST['old_img'];
			 }
			 else
			 {
				 $file=$this->upload->file_name;
			 }
			 			 
			 $abc=array(
			 'name'=>$_POST['name'],
			 'image'=>$file
			 );
			  $this->dbcat->update_data($abc,$id);
		      redirect('admin/category');
	     }
}
}
?>