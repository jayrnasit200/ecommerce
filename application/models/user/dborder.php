<?php
class dborder extends  CI_model
{
	function insert_data($xyz)
			{
				$this->db->insert('order_address',$xyz);
			}
	  function GetAllCartData($user)
	  {
		  $this->db->where('Email',$user);
		  $sql=$this->db->get('cart');
		  return $sql->result();
	  }
	  
	   function GetAllUserOrderData($user)
	  {
		  $this->db->limit('1');
		  $this->db->order_by('order_id','DESC');
		  $this->db->where('Email',$user);
		  $sql=$this->db->get('order_address');
		  return $sql->result();
	  }
	  
	  
	  function GetProData($id)
	{
		$sql=$this->db->query("select *from product where product_id='$id'");
		return $sql->row();
	}
	
	function delete_cart($id)
	{
		  $this->db->where_in('cart_id',$id);
		  $sql=$this->db->delete('cart');
	}
}
?>