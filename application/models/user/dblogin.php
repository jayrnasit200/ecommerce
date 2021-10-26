<?php
class dblogin extends CI_Model
{
	function chklogin($Email,$pass)
	{
		$sql=$this->db->query("select *from user_signup where Email='$Email' AND password='$pass' ");
		return $sql->row();
	}
	
}
?>