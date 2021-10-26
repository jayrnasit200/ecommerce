<?php
class dbsub_category extends CI_model
{
	function insert_data($xyz)
	{
		$this->db->insert('sub_category',$xyz);
	}
	function GetAllData()
		{
			$sql=$this->db->get('sub_category');
			return $sql->result();
		}
		
		function GetAllCatData()
		{
			$sql=$this->db->get('category');
			return $sql->result();
		}
		
		function delete_data($abc)
		{
			$this->db->where('sub_category_id',$abc);
			$this->db->delete('sub_category');
		}
		function getedit($xyz)
		{
			$sql=$this->db->query("select *from sub_category where sub_category_id='$xyz'");
			return $sql->row();
		}
		function update_data($xyz,$id)
		{
			$this->db->where('sub_category_id',$id);
			$this->db->update('sub_category',$xyz);
		}	
		
		function GetCatName($id)
		{
			$sql=$this->db->query("select *from category where cat_id='$id'");
			return $sql->row();
		}
}
?>