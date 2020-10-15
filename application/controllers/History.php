<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class History extends CI_Controller {

	function __construct()
	{
		parent::__construct(); 
		$this->load->library('form_validation');
		$this->load->model('M_faktur_penawaran');
		$this->load->model('M_faktur_pemesanan');
		$this->load->model('M_faktur_jalan');
		$this->load->model('M_faktur_penagihan');
		$this->load->model('M_faktur_tdlunas');
		$this->load->model('M_faktur_service');
	}


	public function history()
	{
		$data['dataFakturPenawaran']=$this->M_faktur_penawaran->selectAll();
		$data['dataFakturPemesanan']=$this->M_faktur_pemesanan->selectAll();
		$data['dataFakturJalan']=$this->M_faktur_jalan->selectAll();
		$data['dataFakturPenagihan']=$this->M_faktur_penagihan->selectAll();
		$data['dataFakturTandaLunas']=$this->M_faktur_tdlunas->selectAll();
		$data['dataFakturService']=$this->M_faktur_service->selectAll();
		$this->load->view('history',$data);
	}
}