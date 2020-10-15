<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_faktur_service extends CI_Model {
  
  function __construct()
  {
    parent::__construct();
  }

  
  function selectAll()
   {
    $this->db->order_by("id"); 
    return $this->db->get('surat_service')->result();
   }

   function insert_suratservice($data)
	{
		if($this->db->insert('surat_service', $data))
		{
			return  $this->db->insert_id();
		}
		else
		{
			return false;
		}
	}

	function Delete_suratservice($where,$id)
	{
		$this->db->where($where);
		$this->db->delete($id);
	}

	function Update_service($where,$table){		
		return $this->db->get_where($table,$where);
	}
 
	function update($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	function Print_suratservice($where,$table){		
		return $this->db->get_where($table,$where);
	}

}   