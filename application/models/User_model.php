 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {
	
	function __construct()
	{
		parent::__construct();
	}

	
	function selectAll()
   {
		$this->db->order_by("id"); 
		return $this->db->get('users')->result();
   }

	function checkDuplicate($email)
	{
		$this->db->select('email');
		$this->db->from('users');
		$this->db->like('email', $email);
		return $this->db->count_all_results();
	}
	
	function insertUser($data)
	{
		if($this->db->insert('users', $data))
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
	
	function edit_user($where,$table){		
		return $this->db->get_where($table,$where);
	}
 
	function update_user($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}		
}	  