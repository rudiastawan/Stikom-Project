<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_agenda extends CI_Model {

	public function insert($tanggal, $waktu, $kegiatan, $tempat, $unit, $hadir, $keterangan )
	{
		$data = array(
			'tanggal' => $tanggal,
			'waktu' => $waktu,
			'kegiatan' => $kegiatan,
			'tempat' => $tempat,
			'unit_kerja' => $unit,
			'hadir' => $hadir,
			'keterangan'=> $keterangan
		);
		$this->db->insert('tb_agenda', $data);
	}

	public function update($id,$tanggal, $waktu, $kegiatan, $tempat, $unit, $hadir, $keterangan )
	{
		$data = array(
			'tanggal' => $tanggal,
			'waktu' => $waktu,
			'kegiatan' => $kegiatan,
			'tempat' => $tempat,
			'unit_kerja' => $unit,
			'hadir' => $hadir,
			'keterangan'=> $keterangan
		);
		$this->db->where('id', $id);
		$this->db->update('tb_agenda', $data);
	}

	public function delete($id) {
		$this->db->where('id', $id);
		$this->db->delete('tb_agenda');
	}


	public function select($id) {
		$this->db->select('*');
		$this->db->from('tb_agenda');
		$this->db->where('id', $id);
		return $this->db->get();
	}

	public function select_all() {

		$this->db->select('*');
		$this->db->order_by('id', 'DESC');
		return $this->db->get('tb_agenda'); 
	} 
}