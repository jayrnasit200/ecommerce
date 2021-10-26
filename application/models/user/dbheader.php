<?php
class dbpayment extends CI_Model
{
	function GetData()
	{
		$sql=$this->db->get('order_address');
		return $sql->result();
		
	}
}
?>