<?php 
class dbcart extends CI_model
{
	function getcart($id)
	{
		$this->db->where('Email',$id);
		$sql=$this->db->get('cart');
		return $sql->result();
	}
	
	function GetAllProData($id)
	{
		$sql=$this->db->query("select *from product where product_id='$id'");
		return $sql->result();
	}
	
	function cart_update($id,$abc)
	{
		$this->db->where('cart_id',$id);
		$this->db->update('cart',$abc);
	}
	function delete_data($id)
	{
		$this->db->where('cart_id',$id);
		$this->db->delete('cart');
	}
}
?>