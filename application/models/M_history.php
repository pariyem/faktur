<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_history extends CI_Model {
  
  function __construct()
  {
    parent::__construct();
  }

  function selectAll()
   {
    $this->db->order_by("id"); 
    return $this->db->get('history')->result();
   }

   function getAllItem() 
   {
        $this->db->from($this->tabel);
        $query = $this->db->get();
        return $query->result();
	}   