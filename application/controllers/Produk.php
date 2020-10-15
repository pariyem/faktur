<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('M_produk');
	}


	public function ListProduk()
	{
		$data['dataProduk']=$this->M_produk->selectAll();
		$this->load->view('produk',$data);
	}

	
	public function index()
	{
		$this->load->view('addproduk');
	}

	
	public function AddProduk(){
		$nama = $this->input->post('nama');
		$serial_number = $this->input->post('serial_number');
		$keterangan = $this->input->post('keterangan');
		
		$data = array(
			'nama' => $nama,
			'serial_number' => $serial_number,
			'keterangan' => $keterangan,
			);
		$this->M_produk->insertProduk($data,'produk');
		redirect('produk/ListProduk');
	}
	
	function Delete_produk($id){
		$where = array('id' => $id);
		$this->M_produk->Delete_produk($where,'produk');
		redirect('Produk/ListProduk');
	}

	function Update_produk($id){
		$where = array('id' => $id);
		$data['dataProduk'] = $this->M_produk->Update_produk($where,'produk')->result();
		$this->load->view('update_produk',$data);
	}

	function update(){
	$id 			= $this->input->post('id');
	$nama 			= $this->input->post('nama');
	$serial_number 	= $this->input->post('serial_number');
	$keterangan 	= $this->input->post('keterangan');
 
	$data = array(
		'nama' => $nama,
		'serial_number' => $serial_number,
		'keterangan' => $keterangan,

	);
 
	$where = array(
		'id' => $id
	);
 
	$this->M_produk->update($where,$data,'produk');
	redirect('Produk/ListProduk');
	}
}
