<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fasilitas_model extends CI_Model {

	public function read()
	{
		$query = $this->db->get('fasilitas');
		return $query->result();
	}
	
	public function read_by($id)
	{
		$this->db->where('id_fasilitas',$id);
		$query = $this->db->get('fasilitas');
		return $query->row() ;
	}

	
}

