 <?php
class dbimage extends CI_model
{
function insert_data($xyz)
{
$this->db->insert('product_image_master',$xyz);

}
function GetAllData()
{
$sql=$this->db->get('product_image_master');
return $sql->result();
}
function getallprodata()
{
$sql=$this->db->get('product');
return $sql->result();
}
}
?>