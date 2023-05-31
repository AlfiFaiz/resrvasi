<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class utama extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();
		$this->load->model('Kamar_model');
		$this->load->model('Pengguna_model');
		$this->load->model('Transaksi_model');
	} 
	public function index()
	{
		$data['kamar']=$this->Kamar_model->read();
			$this->load->view('index', $data);
	}
}
