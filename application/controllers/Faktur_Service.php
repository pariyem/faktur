<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Faktur_Service extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('M_faktur_service');
	}


	public function ListFakturService()
	{
		$data['dataFakturService']=$this->M_faktur_servie->selectAll();
		$this->load->view('history',$data);
	}
	
	public function index()
	{
		$this->load->view('formsuratservice');
	}

	
	public function AddFakturService(){
		$pembeli 		= $this->input->post('pembeli');
		$nm_user 		= $this->input->post('nm_user');
		$nm_brg 		= $this->input->post('nm_brg');
		$alamat 		= $this->input->post('alamat');
		$hrg_satuan 	= $this->input->post('hrg_satuan');
		$jml_brg 		= $this->input->post('jml_brg');
		$keterangan 	= $this->input->post('keterangan');
		$total 			= ($jml_brg*$hrg_satuan);
		$total_harga	= ($total+($PPN/100*$total)-$DP);
		$no_hp 			= $this->input->post('no_hp');
		
		$data = array(
			'pembeli' => $pembeli,
			'nm_user' => $nm_user,
			'nm_brg' => $nm_brg,
			'alamat' => $alamat,
			'hrg_satuan' => $hrg_satuan,
			'jml_brg' => $jml_brg,
			'keterangan' => $keterangan,
			'total_harga' => $total_harga,
			'no_hp' => $no_hp
			);
		$this->M_faktur_service->insert_suratservice($data,'surat_service');
		redirect('History/history');
	}
	
	function Delete_service($id){
		$where = array('id' => $id);
		$this->M_faktur_service->Delete_suratservice($where,'surat_service');
		redirect('History/history');
	}

	function Update_service($id){
		$where = array('id' => $id);
		$data['dataservice'] = $this->M_faktur_service->Update_service($where,'surat_service')->result();
		$this->load->view('update_service',$data);
	}

	function update(){
	$id 			= $this->input->post('id');
	$pembeli 		= $this->input->post('pembeli');
	$nm_user 		= $this->input->post('nm_user');
	$nm_brg 		= $this->input->post('nm_brg');
	$alamat 		= $this->input->post('alamat');
	$hrg_satuan 	= $this->input->post('hrg_satuan');
	$jml_brg 		= $this->input->post('jml_brg');
	$keterangan 	= $this->input->post('keterangan');
	$total 			= ($jml_brg*$hrg_satuan);
	$total_harga	= ($total+($PPN/100*$total)-$DP);
	$no_hp 			= $this->input->post('no_hp');
	
	
 
	$data = array(
		'pembeli' => $pembeli,
		'nm_user' => $nm_user,
		'nm_brg' => $nm_brg,
		'alamat' => $alamat,
		'hrg_satuan' => $hrg_satuan,
		'jml_brg' => $jml_brg,
		'keterangan' => $keterangan,
		'total_harga' => $total_harga,
		'no_hp' => $no_hp
	);
 
	$where = array(
		'id' => $id
	);
 
	$this->M_faktur_service->update($where,$data,'surat_service');
	redirect('History/history');
	}

	function Print_Surat_service($id){
		$where = array('id' => $id);
		$data['dataFakturService'] = $this->M_faktur_service->Print_suratservice($where,'surat_service')->result();
		$this->load->view('v_service',$data);
	}
}
