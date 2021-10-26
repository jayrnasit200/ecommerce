<?php 
class dbslider extends CI_model
	{
		function insert_data($xyz)
			{
				$this->db->insert('slider',$xyz);
			}
		function GetAllData()
			{
				$sql=$this->db->get('slider');
				return $sql->result();
			}
		function delete_data($abc)
			{
				$this->db->where('slider_id',$abc);
				$this->db->delete('slider');
			}
		function getedit($abc)
			{
				$sql=$this->db->query("select *from slider where slider_id='$abc'");
				return $sql->row();
			}
		function update_data($xyz,$id)
			{
				$this->db->where('slider_id',$id);
			$this->db->update('slider',$xyz);
			}	

	}
?>