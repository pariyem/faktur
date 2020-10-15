<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_faktur_penagihan extends CI_Model {
  
  function __construct()
  {
    parent::__construct();
  }

  
  function selectAll()
   {
    $this->db->order_by("id"); 
    return $this->db->get('penagihan')->result();
   }

   function insert_penagihan($data)
	{
		if($this->db->insert('penagihan', $data))
		{
			return  $this->db->insert_id();
		}
		else
		{
			return false;
		}
	}

	function Update_penagihan($where,$table){		
		return $this->db->get_where($table,$where);
	}
 
	function update($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	function Delete_penagihan($where,$id)
	{
		$this->db->where($where);
		$this->db->delete($id);
	}

	function Print_penagihan($where,$table){		
		return $this->db->get_where($table,$where);
	}

}   