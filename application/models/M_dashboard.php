<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_dashboard extends CI_Model {

	public function jmlSM(){
		$query = $this->db->query('SELECT COUNT(id_surat) AS num FROM tb_surat WHERE jenis_surat="surat masuk"');
		return $query->row()->num;

	}
	public function jmlSK(){
		$query = $this->db->query('SELECT COUNT(id_surat) AS num FROM tb_surat WHERE jenis_surat="surat keluar"');
		return $query->row()->num;

	}
	public function jmlAgenda(){
		$query = $this->db->query('SELECT COUNT(id) AS num FROM tb_agenda');
		return $query->row()->num;

	}
	public function jmlPengumuman(){
		$query = $this->db->query('SELECT COUNT(id) AS num FROM tb_pengumuman');
		return $query->row()->num;

	}
	
	public function grafik(){
		$query = $this->db->query("SELECT fakultas_id FROM tb_aset HAVING COUNT((fakultas_id) > 1)");
          
        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }

	}

}
