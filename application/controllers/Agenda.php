<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Agenda extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('M_user');
		$this->load->model('M_agenda');
		if (!$this->session->userdata('isLoggedIn')){
			$this->load->view('v_redirect_login');
			return;
		}
	}

	public function index(){
		$data['currUser']=$this->session->userdata('fullname');
		$agenda['data']= $this->M_agenda->select_all();

		$this->load->view('comp/v_header',$data);
		$this->load->view('v_agenda',$agenda);
		$this->load->view('comp/v_footer');
	}

	public function select($id){
		$agenda=$this->M_agenda->select($id)->row();
		echo json_encode($agenda);
	}

	public function insert() {

		$tanggal=$this->input->post('tanggal');
		$waktu= $this->input->post('waktu');
		$kegiatan=$this->input->post('kegiatan');
		$tempat=$this->input->post('tempat');
		$unit=$this->input->post('unit');
		$hadir=$this->input->post('hadir');
		$keterangan=$this->input->post('keterangan');


		$this->M_agenda->insert($tanggal, $waktu, $kegiatan, $tempat, $unit, $hadir, $keterangan );
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
		$agenda['data']= $this->M_agenda->select_all();

		$this->load->view('tabel/v_tabel_agenda',$agenda);
	}



}