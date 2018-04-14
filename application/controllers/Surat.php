<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Surat extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('M_user');
		
		$this->load->model('M_surat');
		if (!$this->session->userdata('isLoggedIn')){
			$this->load->view('v_redirect_login');
			return;
		}
	}

	public function suratMasuk(){
		$data['currUser']=$this->session->userdata('fullname');
		$surat['data']= $this->M_surat->select_all();

		$this->load->view('comp/v_header',$data);
		$this->load->view('v_kartuKendali_SM',$surat);
		$this->load->view('comp/v_footer');
	}
	
	public function select($id){
		$surat=$this->M_surat->select($id)->row();
		echo json_encode($surat);
	}

	public function insert() {

			$nosurat=$this->input->post('nosurat');
            $status= $this->input->post('status');
            $indexsurat= $this->input->post('indexsurat'); 
            $perihal=$this->input->post('perihal');
            $fond= $this->input->post('fond');
            $ringkas= $this->input->post('ringkas');
            $asalsurat =$this->input->post('asalsurat');
            $tujuansurat =$this->input->post('tujuansurat');
            $tanggalsurat =$this->input->post('tanggalsurat');
            $lampiran =$this->input->post('lampiran');
            $catatan =$this->input->post('catatan');
            $bataspenyelesaian =$this->input->post('bataspenyelesaian');
            $tanggalpengantar =$this->input->post('tanggalpengantar');
            $unitpengolahanpengantar =$this->input->post('unitpengolahanpengantar');
            $informasidisposisi =$this->input->post('informasidisposisi');
            $tanggaldisposisi =$this->input->post('tanggaldisposisi');
            $unitpengolahandisposisi =$this->input->post('unitpengolahandisposisi');
            $disposisike= $this->input->post('disposisike');


		$this->M_surat->insert($nosurat, $status, $indexsurat, $perihal, $fond, $ringkas, $asalsurat, $tujuansurat, $tanggalsurat,$lampiran, $catatan, $bataspenyelesaian, $tanggalpengantar, $unitpengolahanpengantar, $informasidisposisi, $tanggaldisposisi,$unitpengolahandisposisi, $disposisike );
		$this->tabel();
		
	}
	public function update() {

		$id=$this->input->post('id');
		$tanggal=$this->input->post('tanggal');
		$waktu= $this->input->post('waktu');
		$kegiatan=$this->input->post('kegiatan');
		$tempat=$this->input->post('tempat');
		$unit=$this->input->post('unit');
		$hadir=$this->input->post('hadir');
		$keterangan=$this->input->post('keterangan');


		$this->M_agenda->update($id,$tanggal, $waktu, $kegiatan, $tempat, $unit, $hadir, $keterangan );
		$this->tabel();
		
	}

	public function delete($id){
		$this->M_agenda->delete($id);
		$this->tabel();

	}

	public function tabel(){
		$surat['data']= $this->M_surat->select_all();

		$this->load->view('tabel/v_tabel_surat',$surat);
	}



}