<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fasilitas extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();
		$this->load->model('Fasilitas_model');
		if (! $this->session->userdata('email')) redirect('Auth/login');
		if ($this->session->userdata('akses')=='Admin') {
			// redirect('Welcome');
		}else{
			redirect('Welcome');
		}
		$this->load->database();
	}

	public function read()
	{

		$data['fasilitas']=$this->Fasilitas_model->read();
		$data['error'] = '';
        $data['result'] = $this->db->order_by('id_fasilitas','DESC')
                                    ->get('fasilitas')
                                    ->result();
		$this->load->view('admin/fasilitas/data', $data);
	}

	public function edit($id_fasilitas)
	{

        $data['detail'] = $this->db->get_where('fasilitas',['id_fasilitas' => $id_fasilitas])->row();
		$this->load->view('admin/fasilitas/ubah', $data);

	}
	
	public function do_upload()
    {
	    $config['upload_path']          = './images/fasilitas';
	    $config['allowed_types']        = 'jpg|png';
	    $config['max_size']             = 0;
	    $config['max_width']            = 0;
	    $config['max_height']           = 0;
	    $this->load->library('upload', $config);
	    if (!$this->upload->do_upload('gambar')){
	            $error = array('error' => $this->upload->display_errors());
	            $this->load->view('admin/fasilitas/data', $error);
	    }else{
	        $_data = array('upload_data' => $this->upload->data());
	         $data = array(
	            'nama_fasilitas'=> $this->input->post('nama_fasilitas'),
	            'deskripsi'=> $this->input->post('deskripsi'),
	            'gambar' => $_data['upload_data']['file_name']
	            );
	        $query = $this->db->insert('fasilitas',$data);
	        if($query){
	            $this->session->set_flashdata('msg', '<p style="color:green;">Berhasil menambahkan data!</p>');
	            redirect('Fasilitas/read');
	        }else{
	            $this->session->set_flashdata('msg', '<p style="color:red;">Gagal menambahkan data!</p>');
	        }
	    }
	}

	public function delete($id_fasilitas){
	    $_id = $this->db->get_where('fasilitas',['id_fasilitas' => $id_fasilitas])->row();
	    $query = $this->db->delete('fasilitas',['id_fasilitas'=>$id_fasilitas]);
	    if($query){
	        unlink("images/fasilitas/".$_id->gambar);
	    }
	    redirect('Fasilitas/read');
	}

	public function update()
	{
	    $id_fasilitas = $this->input->post('id_fasilitas');
        $_image = $this->db->get_where('fasilitas',['id_fasilitas' => $id_fasilitas])->row();
        $config['upload_path']          = './images/fasilitas/';
        $config['allowed_types']        = 'jpg|png';
        $config['max_size']             = 0;
        $config['max_width']            = 0;
        $config['max_height']           = 0;
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('gambar')){
            $data = array(
            'nama_fasilitas'=> $this->input->post('nama_fasilitas'),
            'deskripsi'=> $this->input->post('deskripsi')
            );
            $query = $this->db->update('fasilitas', $data, array('id_fasilitas' => $id_fasilitas));
        }
        else{
            $_data = array('upload_data' => $this->upload->data());
             $data = array(
                'nama_fasilitas'=> $this->input->post('nama_fasilitas'),
	            'deskripsi'=> $this->input->post('deskripsi'),
                'gambar' => $_data['upload_data']['file_name']
                );
            $query = $this->db->update('fasilitas', $data, array('id_fasilitas' => $id_fasilitas));
            if($query){
                unlink("images/fasilitas/".$_image->gambar);
            }
        } redirect('fasilitas/read');
	        
	    
	}
}
