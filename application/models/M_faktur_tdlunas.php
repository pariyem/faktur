<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_faktur_tdlunas extends CI_Model {
  
  function __construct()
  {
    parent::__construct();
  }

  
  function selectAll()
   {
    $this->db->order_by("id"); 
    return $this->db->get('srt_td_lunas')->result();
   }

   function insert_srttdlunas($data)
	{
		if($this->db->insert('srt_td_lunas', $data))
		{
			return  $this->db->insert_id();
		}
		else
		{
			return false;
		}
	}

	function Delete_srttdlunas($where,$id)
	{
		$this->db->where($where);
		$this->db->delete($id);
	}
	
	function Update_tdlunas($where,$table){		
		return $this->db->get_where($table,$where);
	}
 
	function update($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	function Print_srttdlunas($where,$table){		
		return $this->db->get_where($table,$where);
	}
}   