<?php
class dbcat extends CI_model
	{
		function insert_data($xyz)
			{
				$this->db->insert('category',$xyz);
			}
		
		function GetAllData()
			{
				$sql=$this->db->get('category');
				return $sql->result();
			}
		function delete_data($abc)
			{
				$this->db->where('cat_id',$abc);
				$this->db->delete('category');
			}
		function getedit($xyz)
			{
				$sql=$this->db->query("select *from category where cat_id='$xyz'");
				return $sql->row();
			}
	
		function update_data($xyz,$id)
			{
				$this->db->where('cat_id',$id);
				$this->db->update('category',$xyz);
			}
	}
?>