<?php
class dbproduct extends CI_model
	{
		function insert_data($xyz)
		{
			$this->db->insert('product',$xyz);
		}
		
		function insert_id($xyz)
		{
			$this->db->insert('product_image_master',$xyz);
		}

		function GetAllData()
		{
			$sql=$this->db->get('product');
			return $sql->result();
		}
		
		function GetAllCatData()
		{
			$sql=$this->db->get('category');
			return $sql->result();
		}

		function GetAlltypeData()
		{
			$sql=$this->db->get('type');
			return $sql->result();
		}

		function delete_data($abc)
		{
			$this->db->where('product_id',$abc);
			$this->db->delete('product');
		}
		function getedit($xyz)
		{
			$sql=$this->db->query("select *from product where product_id='$xyz'");
			return $sql->row();
		}
		function update_data($xyz,$id)
		{
			$this->db->where('product_id',$id);
			$this->db->update('product',$xyz);
		}	
		function GetCatName($id)
		{
			$sql=$this->db->query("select *from category where cat_id='$id'");
			return $sql->row();
		}
		function GetAllsubcat()
		{
			$sql=$this->db->get('sub_category');
				return $sql->result();
		}
		function GetsubeName($id)
		{
			$sql=$this->db->query("select *from sub_category where sub_category_id='$id'");
			return $sql->row();
		}
		function GettypeName($id)
		{
			$sql=$this->db->query("select *from type where type_id='$id'");
			return $sql->row();
		}
		function getpro()
            {
                $sql=$this->db->get('product');
                return $sql->result();
            }
		function GetAllCatSubCatData($id)
			{
				$sql=$this->db->query("select *from sub_category where cat_id='$id'");
			return $sql->result();
			}
			
			
			
        }
	
?>