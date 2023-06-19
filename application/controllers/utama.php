<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class utama extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();
		$this->load->model('Kamar_model');
		$this->load->model('Pengguna_model');
		$this->load->model('Transaksi_model');
		$this->load->model('Fasilitas_model');
	} 
	public function index()
	{
		$data['kamar']=$this->Kamar_model->read();
		$data['fasilitas']=$this->Fasilitas_model->read();
			$this->load->view('index', $data);
	}
	public function contact()
	{
			$this->load->view('contact');
	}
	public function about()
	{
			$this->load->view('about');
	}
	public function pesan()
	{
		$data["pesan"] = $this->Pengguna_model->pesananall();
		$this->load->view('admin/pesan', $data);
	}
}
