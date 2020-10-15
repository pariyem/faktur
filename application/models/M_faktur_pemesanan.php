<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_faktur_pemesanan extends CI_Model {
	
	function __construct()
	{
		parent::__construct();
	}

	
	function selectAll()
   {
		$this->db->order_by("id"); 
		return $this->db->get('pemesanan')->result();
   }

	function insert_pemesanan($data)
	{
		if($this->db->insert('pemesanan', $data))
		{
			return  $this->db->insert_id();
		}
		else
		{
			return false;
		}
	}

	function Delete_pemesanan($where,$id)
	{
		$this->db->where($where);
		$this->db->delete($id);
	}

	function Update_pemesanan($where,$table){		
		return $this->db->get_where($table,$where);
	}
 
	function update($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	function Print_pemesanan($where,$table){		
		return $this->db->get_where($table,$where);
	}
}	  