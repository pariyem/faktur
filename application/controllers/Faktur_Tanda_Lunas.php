<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Faktur_Tanda_Lunas extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('M_faktur_tdlunas');
	}


	public function ListFakturTandaLunas()
	{
		$data['dataFakturTandaLunas']=$this->M_faktur_tdlunas->selectAll();
		$this->load->view('history',$data);
	}
	
	public function index()
	{
		$this->load->view('formtandalunas');
	}

	
	public function AddFakturTdLunas(){
		$pembeli 		= $this->input->post('pembeli');
		$nm_user 		= $this->input->post('nm_user');
		$nm_brg 		= $this->input->post('nm_brg');
		$jml_brg 		= $this->input->post('jml_brg');
		$hrg_satuan 	= $this->input->post('hrg_satuan');
		$alamat 		= $this->input->post('alamat');
		$PPN 			= $this->input->post('PPN');
		$DP 			= $this->input->post('DP');
		$NO_HP 			= $this->input->post('NO_HP');
		$status 		= $this->input->post('status');
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
			'status' => $status,
			'total_harga' => $total_harga
			);
		$this->M_faktur_tdlunas->insert_srttdlunas($data,'srt_td_lunas');
		redirect('History/history');
	}
	
	function Delete_tdlunas($id){
		$where = array('id' => $id);
		$this->M_faktur_tdlunas->Delete_srttdlunas($where,'srt_td_lunas');
		redirect('History/history');
	}

	function Update_tdlunas($id){
		$where = array('id' => $id);
		$data['datatandalunas'] = $this->M_faktur_tdlunas->Update_tdlunas($where,'srt_td_lunas')->result();
		$this->load->view('update_tdlunas',$data);
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
	$status 		= $this->input->post('status');
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
		'status' => $status,
		'total_harga' => $total_harga
	);
 
	$where = array(
		'id' => $id
	);
 
	$this->M_faktur_tdlunas->update($where,$data,'srt_td_lunas');
	redirect('History/history');
	}

	function Print_Tanda_Lunas($id){
		$where = array('id' => $id);
		$data['dataFakturTandaLunas'] = $this->M_faktur_tdlunas->Print_srttdlunas($where,'srt_td_lunas')->result();
		$this->load->view('v_tandalunas',$data);
	}
}
