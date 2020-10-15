<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Faktur_Surat_Jalan extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('M_faktur_jalan');
	}


	public function ListFakturJalan()
	{
		$data['dataFakturJalan']=$this->M_faktur_jalan->selectAll();
		$this->load->view('history',$data);
	}
	
	public function index()
	{
		$this->load->view('formsuratjalan');
	}

	
	public function AddFakturJalan(){
		$pembeli 		= $this->input->post('pembeli');
		$nm_brg 		= $this->input->post('nm_brg');
		$jml_brg 		= $this->input->post('jml_brg');
		$NO_HP 			= $this->input->post('NO_HP');
		$alamat 		= $this->input->post('alamat');
		$total_harga 	= $this->input->post('total_harga');
		
		$data = array(
			'pembeli' => $pembeli,
			'nm_brg' => $nm_brg,
			'jml_brg' => $jml_brg,
			'NO_HP' => $NO_HP,
			'alamat' => $alamat,
			'total_harga' => $total_harga
			);
		$this->M_faktur_jalan->insert_suratjalan($data,'surat_jalan');
		redirect('History/history');
	}
	
	function Delete_jalan($id){
		$where = array('id' => $id);
		$this->M_faktur_jalan->Delete_suratjalan($where,'surat_jalan');
		redirect('History/history');
	}

	function Update_jalan($id){
		$where = array('id' => $id);
		$data['dataFakturJalan'] = $this->M_faktur_jalan->Update_jalan($where,'surat_jalan')->result();
		$this->load->view('update_jalan',$data);
	}

	function update(){
	$id				= $this->input->post('id');
	$pembeli 		= $this->input->post('pembeli');
	$nm_brg 		= $this->input->post('nm_brg');
	$jml_brg 		= $this->input->post('jml_brg');
	$NO_HP 			= $this->input->post('NO_HP');
	$alamat 		= $this->input->post('alamat');
	$total_harga 	= $this->input->post('total_harga');
 
	$data = array(
		'pembeli' => $pembeli,
		'nm_brg' => $nm_brg,
		'jml_brg' => $jml_brg,
		'NO_HP' => $NO_HP,
		'alamat' => $alamat,
		'total_harga' => $total_harga
	);
 
	$where = array(
		'id' => $id
	);
 
	$this->M_faktur_jalan->update($where,$data,'surat_jalan');
	redirect('History/history');
	}

	function print_surat_jalan($id){
		$where = array('id' => $id);
		$data['dataFakturSuratJalan'] = $this->M_faktur_jalan->Print_suratjalan($where,'surat_jalan')->result();
		$this->load->view('v_suratjalan',$data);
	}
}
