<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pengumuman extends CI_Model {

	public function insert($informasi, $mulaipengumuman, $akhirpengumuman)
	{
		$data = array(
			'informasi' => $informasi,
			'mulaipengumuman' => $mulaipengumuman,
			'akhirpengumuman' => $akhirpengumuman
		);
		$this->db->insert('tb_pengumuman', $data);
	}

	public function update($id, $informasi, $mulaipengumuman, $akhirpengumuman )
	{
		$data = array(
			'informasi' => $informasi,
			'mulaipengumuman' => $mulaipengumuman,
			'akhirpengumuman' => $akhirpengumuman
		);
		$this->db->where('id', $id);
		$this->db->update('tb_pengumuman', $data);
	}

	public function delete($id) {
		$this->db->where('id', $id);
		$this->db->delete('tb_pengumuman');
	}


	public function select($id) {
		$this->db->select('*');
		$this->db->from('tb_pengumuman');
		$this->db->where('id', $id);
		return $this->db->get();
	}

	public function select_all() {

		$this->db->select('*');
		$this->db->order_by('id', 'DESC');
		return $this->db->get('tb_pengumuman'); 
	} 
}