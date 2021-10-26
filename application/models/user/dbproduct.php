<?php
class dbproduct extends CI_Model
{
	function Getallprodata()
	{
		$sql=$this->db->get('product');
			return $sql->result();
	}
	
	function Getallcatdata()
	{
		$sql=$this->db->get('category');
			return $sql->result();
	}
	
	function GetAllSubCat($id)
	{
		$sql=$this->db->query("select *from sub_category where cat_id='$id' ");
		return $sql->result();
	}
	function GetCatName($id)
	{
		$sql=$this->db->query("select *from category where cat_id='$id' ");
		return $sql->row();
	}
	function GetSubCatName($id)
	{
		$sql=$this->db->query("select *from sub_category where sub_category_id='$id' ");
		return $sql->row();
	}
	
	
	
	function GetProData($id)
	{
		$sql=$this->db->query("select *from product where product_id='$id' ");
		return $sql->result();
	}
	
	
	function getmenudata($cat,$sub)
	{
		
		$sql=$this->db->query("select *from product where cat_id='$cat' AND subcat_id='$sub' ");
		return $sql->result();
	}
	function cat_insert($abc)
	{
		$sql=$this->db->insert('cart',$abc);
		
	}
	
	function GetallprodataLowPrice()
	{
		$sql=$this->db->query("select *from product ORDER BY sell_price ASC ");
		return $sql->result();
	}
	function GetallprodatahighPrice()
	{
		$sql=$this->db->query("select *from product ORDER BY sell_price DESC ");
		return $sql->result();
	}
	function GetallprodatNameAsc()
	{
		$sql=$this->db->query("select *from product ORDER BY name ASC ");
		return $sql->result();
	}
	function GetallprodatNamedesc()
	{
		$sql=$this->db->query("select *from product ORDER BY name DESC ");
		return $sql->result();
	}		
	
}
?>