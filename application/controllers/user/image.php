<?php
class image extends CI_Controller
{
function index()
{
$this->load->model('dbimage');

$this->form_validation->set_rules('stutus','enter valid date','required');
$this->form_validation->set_rules('is_created','enter valid date','required');
$this->form_validation->set_rules('is_deleted','enter valid date','required');

if($this->form_validation->run()==false)
{
$data['Alldata']=$this->dbimage->GetAllData();
$data['Allpro']=$this->dbimage->getallprodata();
$this->load->view('user/image',$data);
}
else
{
$img['upload_path']='upload_img/product';
$img['allowed_types']='jpg|gif|png|jpeg|jpg';
$this->load->library('upload',$img);
if(!$this->upload->do_upload('image'))
{
$file="";
}
else
{
$file=$this->upload->file_name;
}

$abc=array
(
'stutus'=>$_POST['stutus'],
'is_created'=>$_POST['is_created'],
'is_deleted'=>$_POST['is_deleted'],
'product_id'=>$_POST['product_id'],
'image'=>$file
);
$this->dbimage->insert_data($abc);
redirect('user/image');
print_r($abc);
}	
}
}
?>