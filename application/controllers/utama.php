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
	public function editdata($id)
	{
        $data['detail'] = $this->db->get_where('pengguna',['id_pengguna' => $id])->row();
		$this->load->view('user/ubah', $data);
	}

	public function update()
	{
	    $id = $this->input->post('id');
        $_image = $this->db->get_where('pengguna',['id_pengguna' => $id])->row();
        $config['upload_path']          = './images/pengguna/';
        $config['allowed_types']        = 'jpg|png';
        $config['max_size']             = 0;
        $config['max_width']            = 0;
        $config['max_height']           = 0;
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('gambar')){
            $data = array(
             'nama'=> $this->input->post('nama'),
             'email'=> $this->input->post('email'),
             'no'=> $this->input->post('no'),
             'akses'=> $this->input->post('akses')
            );
            $query = $this->db->update('pengguna', $data, array('id_pengguna' => $id));
        }
        else{
            $_data = array('upload_data' => $this->upload->data());
             $data = array(
                'nama'=> $this->input->post('nama'),
	            'email'=> $this->input->post('email'),
	            'no'=> $this->input->post('no'),
	            'akses'=> $this->input->post('akses'),
                'gambar' => $_data['upload_data']['file_name']
                );
            $query = $this->db->update('pengguna', $data, array('id_pengguna' => $id));
            if($query){
                unlink("images/pengguna/".$_image->gambar);
            }
        } redirect('Auth/konfirmasi/'.$id);
	        
	    
	}
	public function delete($id){
	    $_id = $this->db->get_where('transaksi',['id_transaksi' => $id])->row();
	    $query = $this->db->delete('transaksi',['id_transaksi'=>$id]);
	    redirect('Auth/konfirmasi/'.$this->session->userdata('id_pengguna'));
	}
}
