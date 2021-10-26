<?php
class dbsignup extends CI_model
	{
		function insert_data($xyz)
		{
			$this->db->insert('user_signup',$xyz);
		}		
	}

?>