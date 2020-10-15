<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Faktur extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('M_faktur');
	} 


	public function ListFaktur()
	{
		$this->load->view('faktur');
	}
}
