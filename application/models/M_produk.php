<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_produk
 extends CI_Model {
	
	function __construct()
	{
		parent::__construct();
	}

	
	function selectAll()
   {
		$this->db->order_by("id"); 
		return $this->db->get('produk')->result();
   }

	function insertProduk($data,$table){
		$this->db->insert($table,$data);
	}

	function Delete_produk($where,$id)
	{
		$this->db->where($where);
		$this->db->delete($id);
	}
	
	function Update_produk($where,$table){		
		return $this->db->get_where($table,$where);
	}

	function update($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
}	  