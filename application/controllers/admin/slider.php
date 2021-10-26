<?php 
class slider extends CI_Controller
	{
		function index()
		{

		$this->load->model('admin/dbslider');
					 
		$this->form_validation->set_rules('name','enter valid name','required');
		 if($this->form_validation->run()==false)
		 {
			  $data['alldata']=$this->dbslider->GetAllData();
			  $this->load->view('admin/header');
			 $this->load->view('admin/slider/add',$data);
		 }
		else
		 {
			 $img['upload_path']='upload_img/slider/';
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
			  $this->dbslider->insert_data($abc);
		      redirect('admin/slider');
	     }
		}
		 function delete($id)
			{
				$this->load->model('admin/dbslider');
				
				$DelImg=$this->dbslider->getedit($id);
				unlink('upload_img/slider/'.$DelImg->image);
				
				$this->dbslider->delete_data($id);
				redirect('admin/slider');
			}
		function edit($id)
    {
        $this->load->model('admin/dbslider');
					 
		$this->form_validation->set_rules('name','enter valid name','required');
		 if($this->form_validation->run()==false)
		 {
			 $data['return']=$this->dbslider->getedit($id);
			  $data['alldata']=$this->dbslider->GetAllData($id);
			  $this->load->view('admin/header');
			 $this->load->view('admin/slider/edit',$data);
		   }        
        else
        {
			
			
			 $img['upload_path']='upload_img/slider/';
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
			  $this->dbslider->update_data($abc,$id);
		      redirect('admin/slider');
	     
        }
    }     

	}
?>