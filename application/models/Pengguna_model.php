<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengguna_model extends CI_Model {

	public function read()
	{
		$query = $this->db->get('pengguna');
		return $query->result();
	}
	
	public function read_by($id)
	{
		$this->db->where('id_pengguna',$id);
		$query = $this->db->get('pengguna');
		return $query->row() ;
	}
	public function pesananall()
	{
		$query = $this->db->query("SELECT * FROM pesan");
		return $query->result();
	}
}
