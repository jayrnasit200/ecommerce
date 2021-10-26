<?php
class product extends CI_Controller
{
	function index()
	{
		
		
		$login=$this->session->userdata('email');
		if($login=='')
		{
			redirect('admin/login');
		}
		
		 $this->load->model('admin/dbproduct');
	  $this->form_validation->set_rules('product_number','enter valid product_number','required');
	  
	  $this->form_validation->set_rules('name','enter valid name','required');


	$this->form_validation->set_rules('cat_id','enter valid cat_id','required');
	
	$this->form_validation->set_rules('subcat_id','enter valid subcat Name','required');

	$this->form_validation->set_rules('type_id','enter valid type_id','required');

	
	$this->form_validation->set_rules('price','enter valid price','required|is_numeric');

	$this->form_validation->set_rules('discount','enter valid discount','required|is_numeric');
	
	$this->form_validation->set_rules('discount_price','enter valid discount_price','required|is_numeric');

	$this->form_validation->set_rules('sell_price','enter valid sell_price','required|is_numeric');

	$this->form_validation->set_rules('stoke','enter valid stoke','required');

	$this->form_validation->set_rules('description','enter valid description','required');
	
	$this->form_validation->set_rules('short_description','enter valid short_description','required');


$this->form_validation->set_rules('date','enter valid date','required');



	 if($this->form_validation->run()==false)
		 {
			 $data['alldata']=$this->dbproduct->GetAllData();
			 $data['allcat']=$this->dbproduct->GetAllCatData();
			 $data['alltype']=$this->dbproduct->GetAlltypeData();
			 $data['Allsub']=$this->dbproduct->GetAllsubcat();
			 
			 $this->load->view('admin/header');
			 $this->load->view('admin/product/add',$data);


		 }
		else
		 {
		 	 $img['upload_path']='upload_img/product/';
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
			 'product_number'=>$_POST['product_number'],
			 'name'=>$_POST['name'],
			'cat_id'=>$_POST['cat_id'],
			'subcat_id'=>$_POST['subcat_id'],
			'type_id'=>$_POST['type_id'],
			'image'=>$file,
				
				 
			 'price'=>$_POST['price'],
			 'discount'=>$_POST['discount'],
			 'discount_price'=>$_POST['discount_price'],
			 'sell_price'=>$_POST['sell_price'],
			 'stoke'=>$_POST['stoke'],
			 'description'=>$_POST['description'],
			 'short_description'=>$_POST['short_description'],
			 'date'=>$_POST['date']
			 
			 );
			  $this->dbproduct->insert_data($abc);
		     
             $ins_id=$this->db->insert_id();
			
			if (count($_FILES['simage']['name'])>0)
			 {
			 	for($i=0;$i<count($_FILES['simage']['name']);$i++)
			 	{
			 		
			$_FILES['file']['name']       = $_FILES['simage']['name'][$i];
            $_FILES['file']['type']       = $_FILES['simage']['type'][$i];
            $_FILES['file']['tmp_name']   = $_FILES['simage']['tmp_name'][$i];
            $_FILES['file']['error']      = $_FILES['simage']['error'][$i];
            $_FILES['file']['size']       = $_FILES['simage']['size'][$i];


				 	$config['upload_path']          = 'upload_img/product/';
	                $config['allowed_types']        = 'gif|jpg|png';
	                $config['max_size']             = 1000;


	                $this->load->library('upload', $config);
	                 if(!$this->upload->do_upload('file'))
		                {
		                        $error = array('error' => $this->upload->display_errors());

		                        //$this->load->view('upload_form', $error);
		                        print_r($error);
		                }
	                else
		                {
		                        $data = array('upload_data' => $this->upload->data());

		                       // $this->load->view('upload_success', $data);
		                        //print_r($data);
		                        $data2=$this->upload->data();
		                        //echo $data2["file_name"];
                            $file=$this->upload->file_name;

                          //$data['alldata']=$this->dbproduct->GetAllData();
                            	 $no=1;
                            $abc=array(
                            	'status'=>$no++,
                                'simage'=>$file,
                                'product_id'=>$ins_id

                            );
                            $this->dbproduct->insert_id($abc);
                      
                         
   

		                }
 
			}
			  redirect('admin/product/');
			}
			}
			}
			 			 			 
			
	  
	
	 function delete($id)
		{
			$this->load->model('admin/dbproduct');
			$this->dbproduct->delete_data($id);
		      redirect('admin/product');
		}
		function edit($id)
    {
        $this->load->model('admin/dbproduct');
        $this->form_validation->set_rules('name','enter valid name','required|alpha');
        if($this->form_validation->run()==false)

        {
			$data['alldata']=$this->dbproduct->GetAllData($id);
            $data['return']=$this->dbproduct->getedit($id);
		 	$data['alltype']=$this->dbproduct->GetAlltypeData();
            $data['allcat']=$this->dbproduct->GetAllCatData();
         $this->load->view('admin/header'); 
         $this->load->view('admin/product/edit',$data);
        }        
        else
        {
         $img['upload_path']='upload_img/product';
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
			 'product_number'=>$_POST['product_number'],
			 'name'=>$_POST['name'],
			'cat_id'=>$_POST['cat_id'],
			'subcat_id'=>$_POST['subcat_id'],
			'type_id'=>$_POST['type_id'],
			 'image'=>$file,
			 'price'=>$_POST['price'],
			 'discount'=>$_POST['discount'],
			 'discount_price'=>$_POST['discount_price'],
			 'sell_price'=>$_POST['sell_price'],
			 'stoke'=>$_POST['stoke'],
			 'description'=>$_POST['description'],
			 'short_description'=>$_POST['short_description'],
			 'date'=>$_POST['date']
			 
			 );
         $this->dbproduct->update_data($abc,$id);
         redirect('admin/product');
        }
    }     
	
	
	function GetSubCat($id)
	{
		 $this->load->model('admin/dbproduct');
		$GetSubCat=$this->dbproduct->GetAllCatSubCatData($id);
		?>
          <select name="subcat_id" id="subcat" class="form-control">
                <option hidden>Select sub category name</option>
                <?php 
            foreach($GetSubCat as $row)
                {
               ?>
                 <option value="<?php echo $row->sub_category_id;?>" ><?php echo $row->Name;?></option>
               <?php
                }
               ?>
            </select>
        <?php
	}

}
?>