<?php
class dblogin extends CI_Model
{
	function chklogin($email,$pass)
	{
		$sql=$this->db->query("select *from login where email='$email' AND password='$pass' ");
		return $sql->row();
	}
	
}
?>