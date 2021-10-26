<?php
class dbheader extends CI_Model
{
	function GetAllSliderData()
	{
		$sql=$this->db->get('slider');
		return $sql->result();
	}
	function GetAllproductData()
	{
		$sql=$this->db->get('product');
		return $sql->result();
	}
	function GetAllCatData()
	{
		$sql=$this->db->get('category');
		return $sql->result();
	}
	function GetAllSubCat($id)
	{
		$sql=$this->db->query("select *from sub_category where cat_id='$id'");
		return $sql->result();
	}
	function GetAllpro($ids)
	{
		$sql=$this->db->query("select *from product where cat_id='$ids'");
		return $sql->result();
	}
	function cat_insert($abc)
	{
		$sql=$this->db->insert('cart',$abc);
		
	}
	
	function getallcartdata($user)
	{
		$this->db->where('Email',$user);
		$sql=$this->db->get('cart');
		return $sql->num_rows();
	}
	
	function GetAllSearchData($data2)
	{
		$this->db->like('product_number',$data2);
		$this->db->or_like('name',$data2);
		$sql=$this->db->get('product');
		return $sql->result();
	}
	
	
	
}
?>