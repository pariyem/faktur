<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_faktur_jalan extends CI_Model {
	
	function __construct()
	{
		parent::__construct();
	}

	
	function selectAll()
   {
		$this->db->order_by("id"); 
		return $this->db->get('surat_jalan')->result();
   }

	function insert_suratjalan($data)
	{
		if($this->db->insert('surat_jalan', $data))
		{
			return  $this->db->insert_id();
		}
		else
		{
			return false;
		}
	}

	function Print_suratjalan($where,$table){		
		return $this->db->get_where($table,$where);
	}

	function Delete_suratjalan($where,$id)
	{
		$this->db->where($where);
		$this->db->delete($id);
	}
	
	function Update_jalan($where,$table){		
		return $this->db->get_where($table,$where);
	}
 
	function update($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}	
}	  