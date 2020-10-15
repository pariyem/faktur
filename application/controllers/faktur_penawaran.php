<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Faktur_Penawaran extends CI_Controller {

	function __construct()
	{
		parent::__construct(); 
		$this->load->library('form_validation');
		$this->load->model('M_faktur_penawaran');
		$this->load->helper('url');
	}


	public function ListFakturPenawaran()
	{
		$data['dataFakturPenawaran']=$this->M_faktur_penawaran->selectAll();
		$this->load->view('history',$data);
	}
	
	public function index()
	{
		$this->load->view('formpenawaran');
	} 

	
	public function AddFakturPenawaran(){
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
			'jml_brg' => $jml_brg,
			'hrg_satuan' => $hrg_satuan,
			'alamat' => $alamat,
			'PPN' => $PPN,
			'DP' => $DP,
			'NO_HP' => $NO_HP,
			'total_harga' => $total_harga
			);
		$this->M_faktur_penawaran->insert_penawaran($data,'penawaran');
		redirect('History/history');
	}
	
	function Delete_penawaran($id){
		$where = array('id' => $id);
		$this->M_faktur_penawaran->Delete_penawaran($where,'penawaran');
		redirect('History/history');
	}

	function Update_penawaran($id){
		$where = array('id' => $id);
		$data['dataFakturPenawaran'] = $this->M_faktur_penawaran->Update_penawaran($where,'penawaran')->result();
		$this->load->view('update_penawaran',$data);
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
 
	$this->M_faktur_penawaran->update($where,$data,'penawaran');
	redirect('History/history');
	}

	function Print_penawaran($id){
		$where = array('id' => $id);
		$data['dataFakturPenawaran'] = $this->M_faktur_penawaran->Print_penawaran($where,'penawaran')->result();
		$this->load->view('v_penawaran',$data);
	}
}
