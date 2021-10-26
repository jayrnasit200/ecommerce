<?php

class dbsingle extends CI_Model
{
	
	
	
		function GetAllData()
		{
			$sql=$this->db->get('product');
			return $sql->result();
		}
}
?>