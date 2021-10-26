<?php 
class dbchange extends CI_Model
	{
			function chklog($email,$pass)
			{
				$sql=$this->db->query("select *from login where email='$email' AND password='$pass'");
				return $sql->row();
			}
			
			function GetPassUpdate($newpass,$email)
			{
				$sql=$this->db->query("update login set password='$newpass' where email='$email'");
			}
	}
?>