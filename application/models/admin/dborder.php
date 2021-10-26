<?php
class dborder extends CI_model
	{
		function GetAllData()
			{
				$sql=$this->db->get('order_address');
				return $sql->result();
			}
		function GetproName($id)
		{
			$sql=$this->db->query("select *from product where product_id='$id'");
			return $sql->row();
		}
	}
	?>