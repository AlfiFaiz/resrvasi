<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi_model extends CI_Model {

	public function read()
	{
		$query = $this->db->query("SELECT * FROM transaksi inner JOIN pengguna ON pengguna.id_pengguna = transaksi.id_pengguna");
		return $query->result();
	}
	
	public function read_by($id_pengguna)
	{
		$query = $this->db->query("SELECT * FROM transaksi INNER JOIN pengguna ON pengguna.id_pengguna = transaksi.id_pengguna WHERE transaksi.id_pengguna = '$id_pengguna' ORDER BY
		transaksi.status ASC");
        return $query->result();
	}
	
	public function read_bybukti($id_pengguna)
	{
		$query = $this->db->query("SELECT * FROM transaksi INNER JOIN pengguna ON pengguna.id_pengguna = transaksi.id_pengguna WHERE transaksi.id_transaksi = '$id_pengguna'");
        return $query->result();
	}

	public function input_data($data,$table){
		$this->db->insert($table,$data);
	}

	public function getAllTrans(){
		return $this->db->get('kamar')->result_array();
	}
}

