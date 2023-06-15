<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct()
	{
		
		parent:: __construct();
	    $this->load->model('Auth_model');
	    $this->load->model('Kamar_model');
	    $this->load->model('Transaksi_model');
	} 

	public function utama()
	{
			$this->load->view('index');
	}

	public function login()
	{
		 if ($this->session->userdata('email')) redirect('Welcome');
		if ($this->input->post('login')) 
		{
			$login=$this->Auth_model->getuser($this->input->post('email'));
			if ($login != NULL) {

				$data = array(
					'id_pengguna' => $login->id_pengguna,
					'nama' 	=> $login->nama,
					'email' => $login->email,
					'no' 	=> $login->no,
					'akses'=> $login->akses,
					'gambar'=> $login->gambar,
					"is_logged_in" => true
				);
				if ($this->input->post('no')==$login->no)
				{
					$this->session->set_userdata($data);
					redirect('Welcome');
				}
			}
			$this->session->set_flashdata('msg', '<p style="color:red;">Invalid Username or Password!</p>');
		}
			$this->load->view('login');
	}

	public function logout()
	{
	    $this->session->sess_destroy();
		redirect('utama');
	}

	public function daftar()
	{
	    if ($this->input->post('daftar')) {
			$this->Auth_model->register();
			if($this->db->affected_rows() > 0){
        		$this->session->set_flashdata('msg', '<p style="color:green">Berhasil mendaftar</p>');
        	}else{
        		$this->session->set_flashdata('msg', '<p style="color:red;">Gagal mendaftar!</p>');
        	}
			$this->load->view('login');
		}
	}

	public function booking($id)
	{
		if (! $this->session->userdata('email')) redirect('Auth/login');
		$data['detail'] = $this->db->get_where('kamar',['id' => $id])->row();
		$this->load->view('user/booking', $data);
	}

	public function do_booking(){
		if (! $this->session->userdata('email')) redirect('Auth/login');
		$id_pengguna = $this->input->post('id_pengguna');
		$tgl_in = $this->input->post('tgl_in');
		$tgl_out = $this->input->post('tgl_out');
		$jenis = $this->input->post('jenis');
		$jumlah = $this->input->post('jumlah');
		$no = $this->input->post('no');
		$email = $this->input->post('email');
		$nama = $this->input->post('nama');
 
		$data = array(
			'id_pengguna' => $id_pengguna,
			'tgl_in' => $tgl_in,
			'tgl_out' => $tgl_out,
			'jenis' => $jenis,
			'jumlah' => $jumlah,
			'nama' => $nama,
			'no' => $no,
			'email' => $email,
			);
		$this->Auth_model->input_data($data,'transaksi');
		$this->session->set_flashdata('msg', '<p style="color:green;">Anda berhasil melakukan pemesanan!</p>');
		redirect('welcome/index',$data);
	}

	public function konfirmasi($id_pengguna)
	{
		if (! $this->session->userdata('email')) redirect('Auth/login');
		$data['trans'] = $this->Transaksi_model->read_by($id_pengguna);
		$data['kamar'] = $this->Transaksi_model->getAllTrans();
		$this->load->view('user/konfirmasi', $data);
	}
}