<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_faktur extends CI_Model {
	
	function __construct()
	{
		parent::__construct();
	}

	
	function selectAll()
   {
		$this->db->order_by("id"); 
		return $this->db->get('faktur')->result();
   }
	
	function insertFaktur($data)
	{
		if($this->db->insert('faktur', $data))
		{
			return  $this->db->insert_id();
		} 
		else
		{
			return false;
		}
	}

	function Delete_user($where,$id)
	{
		$this->db->where($where);
		$this->db->delete($id);
	}
	function Update_user($where,$data,$table)
	{
		$this->db->where($where);
		$this->db->update($table,$data);
	}	
}	  