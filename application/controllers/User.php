<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
 
	function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('User_model');
	}


	public function ListUser()
	{
		
		$data['dataUser']=$this->User_model->selectAll();
		$this->load->view('user',$data);
	}

	
	public function index()
	{
		$this->load->view('register');
	}

	
	public function RegisterUser()
	{
		$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
		$this->form_validation->set_rules('no_hp', 'Nomor HP', 'trim|required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('confirm_email', 'Confirm Email', 'trim|required|matches[email]');
		$this->form_validation->set_rules('keterangan', 'Keterangan', 'trim|required');
		
		
		
		$this->form_validation->set_error_delimiters('<div class="error-msg">', '</div>');
		
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('register');
		}
		else
		{
			$nama 			= $this->security->xss_clean($this->input->post('nama'));
			$no_hp 			= $this->security->xss_clean($this->input->post('no_hp'));
			$alamat 		= $this->security->xss_clean($this->input->post('alamat'));
			$email 			= $this->security->xss_clean($this->input->post('email'));
			$keterangan 	= $this->security->xss_clean($this->input->post('keterangan'));
			
			
			$options = array("cost"=>4);
			
			
			$insertData = array('nama'=>$nama,
								'no_hp'=>$no_hp,
								'alamat'=>$alamat,
								'email'=>$email,
								'keterangan'=>$keterangan);
								
								
			
			$checkDuplicate = $this->User_model->checkDuplicate($email);
			
			if($checkDuplicate == 0)
			{
				$insertUser = $this->User_model->insertUser($insertData);
			
				if($insertUser)
				{
					redirect('user/ListUser');
				}
				else
				{
					$data['errorMsg'] = 'Unable to save user. Please try again';
					$this->load->view('register',$data);
				}
			}
			else
			{
				$data['errorMsg'] = 'User email already exists';
				$this->load->view('register',$data);
			}
		}
	}
	
	function Delete_user($id){
		$where = array('id' => $id);
		$this->User_model->Delete_user($where,'users');
		redirect('User/ListUser');
	}

	function Update_user($id){
		$where = array('id' => $id);
		$data['dataUser'] = $this->User_model->edit_user($where,'users')->result();
		$this->load->view('update_user',$data);
	}

	function update(){
	$id = $this->input->post('id');
	$nama = $this->input->post('nama');
	$no_hp = $this->input->post('no_hp');
	$alamat = $this->input->post('alamat');
	$email = $this->input->post('email');
	$keterangan = $this->input->post('keterangan');
 
	$data = array(
		'nama' => $nama,
		'no_hp' => $no_hp,
		'alamat' => $alamat,
		'email' => $email,
		'keterangan' => $keterangan
	);
 
	$where = array(
		'id' => $id
	);
 
	$this->User_model->update_user($where,$data,'users');
	redirect('User/ListUser');
	}
}
