<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Faktur_Pemesanan extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('M_faktur_pemesanan');
	}


	public function ListFakturPemesanan()
	{
		$data['dataFakturPemesanan']=$this->M_faktur_pemesanan->selectAll();
		$this->load->view('history',$data);
	}
	
	public function index()
	{
		$this->load->view('formpemesanan');
	}

	
	public function AddFakturPemesanan(){
		$pembeli 		= $this->input->post('pembeli');
		$nm_user 		= $this->input->post('nm_user');
		$nm_brg 		= $this->input->post('nm_brg');
		$jml_brg 		= $this->input->post('jml_brg');
		$hrg_satuan 	= $this->input->post('hrg_satuan');
		$alamat 		= $this->input->post('alamat');
		$PPN 			= $this->input->post('PPN');
		$DP 			= $this->input->post('DP');
		$NO_HP 			= $this->input->post('NO_HP');
		$total 			= ($jml_brg*$hrg_satuan);
		$total_harga	= ($total+($PPN/100*$total)-$DP);
		
		$data = array(
			'pembeli' => $pembeli,
			'nm_user' => $nm_user,
			'nm_brg' => $nm_brg,
			'jml_brg' => $jml_brg,
			'hrg_satuan' => $hrg_satuan,
			'alamat' => $alamat,
			'PPN' => $PPN,
			'DP' => $DP,
			'NO_HP' => $NO_HP,
			'total_harga' => $total_harga
			);
		$this->M_faktur_pemesanan->insert_pemesanan($data,'pemesanan');
		redirect('History/history');
	}
	
	function Delete_pemesanan($id){
		$where = array('id' => $id);
		$this->M_faktur_pemesanan->Delete_pemesanan($where,'pemesanan');
		redirect('History/history');
	}

	function Update_pemesanan($id){
		$where = array('id' => $id);
		$data['dataFakturPemesanan'] = $this->M_faktur_pemesanan->Update_pemesanan($where,'pemesanan')->result();
		$this->load->view('update_pemesanan',$data);
	}

	function update(){
	$id 			= $this->input->post('id');
	$pembeli 		= $this->input->post('pembeli');
	$nm_user 			= $this->input->post('nm_user');
	$nm_brg 		= $this->input->post('nm_brg');
	$jml_brg 		= $this->input->post('jml_brg');
	$hrg_satuan 	= $this->input->post('hrg_satuan');
	$alamat 		= $this->input->post('alamat');
	$PPN 			= $this->input->post('PPN');
	$DP 			= $this->input->post('DP');
	$NO_HP 			= $this->input->post('NO_HP');
	$total 			= ($jml_brg*$hrg_satuan);
	$total_harga	= ($total+($PPN/100*$total)-$DP);
 
	$data = array(
		'pembeli' => $pembeli,
		'nm_user' => $nm_user,
		'nm_brg' => $nm_brg,
		'jml_brg' => $jml_brg,
		'hrg_satuan' => $hrg_satuan,
		'alamat' => $alamat,
		'PPN' => $PPN,
		'DP' => $DP,
		'NO_HP' => $NO_HP,
		'total_harga' => $total_harga
	);
 
	$where = array(
		'id' => $id
	);
 
	$this->M_faktur_pemesanan->update($where,$data,'pemesanan');
	redirect('History/history');
	}

	function Print_pemesanan($id){
		$where = array('id' => $id);
		$data['dataFakturPemesanan'] = $this->M_faktur_pemesanan->Print_pemesanan($where,'pemesanan')->result();
		$this->load->view('v_pemesanan',$data);
	}
}


