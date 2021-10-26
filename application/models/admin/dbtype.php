<?php
class dbtype extends CI_model
	{
		function insert_data($xyz)
		{
			$this->db->insert('type',$xyz);
		}
		
		function GetAllData()
		{
			$sql=$this->db->get('type');
			return $sql->result();
		}
		function delete_data($abc)
		{
			$this->db->where('type_id',$abc);
			$this->db->delete('type');
		}
		function getedit($xyz)
	{
		$sql=$this->db->query("select *from type where type_id='$xyz'");
		return $sql->row();
	}
	
	function update_data($xyz,$id)
	{
		$this->db->where('type_id',$id);
		$this->db->update('type',$xyz);
	}
	}
?>