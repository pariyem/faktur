<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_faktur_penawaran extends CI_Model {
  
  function __construct()
  {
    parent::__construct();
  }

  
  function selectAll()
   {
    $this->db->order_by("id"); 
    return $this->db->get('penawaran')->result();
   }

   function insert_penawaran($data)
	{
		if($this->db->insert('penawaran', $data))
		{
			return  $this->db->insert_id();
		}
		else
		{
			return false;
		}
	}

	function Delete_penawaran($where,$id)
	{
		$this->db->where($where);
		$this->db->delete($id);
	}
	
	function Update_penawaran($where,$table){		
		return $this->db->get_where($table,$where);
	}
 
	function update($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	
	function Print_penawaran($where,$table){		
		return $this->db->get_where($table,$where);
	}
}   