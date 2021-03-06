<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_surat extends CI_Model {

	public function insert($data)
	{
		// $data = array(
		// 	'no_surat' => $nosurat,
		// 	'sifat_surat' => $status,
		// 	'index_surat' => $indexsurat,
		// 	'perihal' => $perihal,
		// 	'klasifikasi_arsip' => $fond,
		// 	'isi_ringkasan' => $ringkas,
		// 	'asal_surat'=> $asalsurat,
		// 	'tujuan_surat'=> $tujuansurat,
		// 	'tanggal_surat'=> $tanggalsurat,
		// 	'lampiran'=> $lampiran,
		// 	'catatan'=> $catatan,
		// 	'batas_penyelesaian'=> $bataspenyelesaian,
		// 	'tanggal_pengantar'=> $tanggalpengantar,
		// 	'unit_pengolah_pengantar'=> $unitpengolahanpengantar,
		// 	'informasi_disposisi'=> $informasidisposisi,
		// 	'tgl_disposisi'=> $tanggaldisposisi,
		// 	'unit_pengolah_disposisi'=> $unitpengolahandisposisi,
		// 	'tujuan_disposisi'=> $disposisike,
		// );
		$this->db->insert('tb_surat', $data);
	}

	public function update($id,$data)
	{

		$this->db->where('id_surat', $id);
		$this->db->update('tb_surat', $data);
	}

	public function delete($id) {
		$this->db->where('id_surat', $id);
		$this->db->delete('tb_surat');
	}


	public function select($id) {
		$this->db->select('*');
		$this->db->from('tb_surat');
		$this->db->where('id_surat', $id);
		return $this->db->get();
	}

	public function select_allSM() {

		$this->db->select('*');
		$this->db->order_by('id_surat', 'DESC');
		$this->db->where('jenis_surat', 'surat masuk');
		return $this->db->get('tb_surat'); 
	} 
	public function select_allSK() {

		$this->db->select('*');
		$this->db->order_by('id_surat', 'DESC');
		$this->db->where('jenis_surat', 'surat keluar');
		return $this->db->get('tb_surat'); 
	} 
	public function selectAll_unit(){
		$this->db->select('*');
		$this->db->order_by('id', 'DESC');
		return $this->db->get('tb_unitpengolah'); 
	}
	public function select_internal(){
		$this->db->select('*');
		return $this->db->get('tb_asal_tujuan_internal'); 

	}
	public function select_external(){
		$this->db->select('*');
		return $this->db->get('tb_asal_tujuan_external'); 

	}
}