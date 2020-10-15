<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Faktur_Penagihan extends CI_Controller {

	function __construct()
	{ 
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('M_faktur_penagihan');
		$this->load->helper('url');
	}


	public function ListFakturPenagihan()
	{
		$data['dataFakturPenagihan']=$this->M_faktur_penagihan->selectAll();
		$this->load->view('history',$data);
	}
	
	public function index()
	{
		$this->load->view('formpenagihan');
	}

	
	public function AddFakturPenagihan(){
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
		$this->M_faktur_penagihan->insert_penagihan($data,'penagihan');
		redirect('History/history');
	}
	
	function Delete_penagihan($id){
		$where = array('id' => $id);
		$this->M_faktur_penagihan->Delete_penagihan($where,'penagihan');
		redirect('History/history');
	}

	function Update_penagihan($id){
		$where = array('id' => $id);
		$data['dataPenagihan'] = $this->M_faktur_penagihan->Update_penagihan($where,'penagihan')->result();
		$this->load->view('update_penagihan',$data);
	}

	function update(){
	$id 			= $this->input->post('id');
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
 
	$where = array(
		'id' => $id
	);
 
	$this->M_faktur_penagihan->update($where,$data,'penagihan');
	redirect('History/history');
	}

	function Print_penagihan($id){
		$where = array('id' => $id);
		$data['dataFakturPenagihan'] = $this->M_faktur_penagihan->Print_penagihan($where,'penagihan')->result();
		$this->load->view('v_index',$data);
	}
}