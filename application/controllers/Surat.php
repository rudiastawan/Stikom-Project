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
		$data['jabatan']=$this->session->userdata('jabatan');
		$data['foto']=$this->session->userdata('thumb_foto');
		$surat['data']= $this->M_surat->select_allSM();
		$surat['unit_pengolah']= $this->M_surat->selectAll_unit();
		$surat['tujuanDisposisi']= $this->M_surat->select_internal();

		$this->load->view('comp/v_header',$data);
		$this->load->view('v_kartuKendali_SM',$surat);
		$this->load->view('comp/v_footer');
	}

	public function disposisiMasuk(){
		$data['currUser']=$this->session->userdata('fullname');
		$data['jabatan']=$this->session->userdata('jabatan');
		$data['foto']=$this->session->userdata('thumb_foto');
		$surat['data']= $this->M_surat->select_allSM();

		$this->load->view('comp/v_header',$data);
		$this->load->view('v_RiwayatDisposisi_SM',$surat);
		$this->load->view('comp/v_footer');
	}

	public function suratKeluar(){
		$data['currUser']=$this->session->userdata('fullname');
		$data['jabatan']=$this->session->userdata('jabatan');
		$data['foto']=$this->session->userdata('thumb_foto');
		$surat['data']= $this->M_surat->select_allSK();
		$surat['unit_pengolah']= $this->M_surat->selectAll_unit();
		$surat['tujuanDisposisi']= $this->M_surat->select_internal();

		$this->load->view('comp/v_header',$data);
		$this->load->view('v_kartuKendali_SK',$surat);
		$this->load->view('comp/v_footer');
	}

	public function disposisiKeluar(){
		$data['currUser']=$this->session->userdata('fullname');
		$data['jabatan']=$this->session->userdata('jabatan');
		$data['foto']=$this->session->userdata('thumb_foto');
		$surat['data']= $this->M_surat->select_allSK();

		$this->load->view('comp/v_header',$data);
		$this->load->view('v_RiwayatDisposisi_SK',$surat);
		$this->load->view('comp/v_footer');
	}

	
	public function select($id){
		$surat=$this->M_surat->select($id)->row();
		echo json_encode($surat);
	}

	public function insert() {

			// $nosurat=$this->input->post('nosurat');
   //          $status= $this->input->post('status');
   //          $indexsurat= $this->input->post('indexsurat'); 
   //          $perihal=$this->input->post('perihal');
   //          $fond= $this->input->post('fond');
   //          $ringkas= $this->input->post('ringkas');
   //          $asalsurat =$this->input->post('asalsurat');
   //          $tujuansurat =$this->input->post('tujuansurat');
   //          $tanggalsurat =$this->input->post('tanggalsurat');
   //          $lampiran =$this->input->post('lampiran');
   //          $catatan =$this->input->post('catatan');
   //          $bataspenyelesaian =$this->input->post('bataspenyelesaian');
   //          $tanggalpengantar =$this->input->post('tanggalpengantar');
   //          $unitpengolahanpengantar =$this->input->post('unitpengolahanpengantar');
   //          $informasidisposisi =$this->input->post('informasidisposisi');
   //          $tanggaldisposisi =$this->input->post('tanggaldisposisi');
   //          $unitpengolahandisposisi =$this->input->post('unitpengolahandisposisi');
   //          $disposisike= $this->input->post('disposisike');
            
		$jenisSurat=$this->input->post('jenis_surat');

		$this->M_surat->insert($this->input->post());
		if ($jenisSurat=='surat masuk') {
			$this->tabelSM();
		}
		if ($jenisSurat=='surat keluar') {
			$this->tabelSK();
		}
		
		
	}

	public function insert_file(){
		$name_lampiran=$this->input->post('file_name_lampiran');
		$name_surat=$this->input->post('file_name_surat');
		$name_pengantar_surat=$this->input->post('file_name_pengantar_surat');
		$name_disposisi=$this->input->post('file_name_disposisi');

		//$upload_path = './uploads';
        //$allowed_types = 'pdf';
        //$file_name= time().'_'.$name;

        $lampiran = array(
			'upload_path' => './uploads/lampiran/',
			'allowed_types' => 'pdf',
			'file_name' => 'lmp_'.time().'_'.$name_lampiran,
		);

        $surat = array(
			'upload_path' => './uploads/surat/',
			'allowed_types' => 'pdf',
			'file_name' => 'surat_'.time().'_'.$name_surat,
		);
		 $pengantar_surat = array(
			'upload_path' => './uploads/pengantar/',
			'allowed_types' => 'pdf',
			'file_name' => 'ps_'.time().'_'.$name_pengantar_surat,
		);
		  $disposisi = array(
			'upload_path' => './uploads/disposisi/',
			'allowed_types' => 'pdf',
			'file_name' => 'dsp_'.time().'_'.$name_disposisi,
		);
 
        $this->load->library('upload');

        $this->upload->initialize($lampiran);
 		$this->upload->do_upload('file_lampiran');

 		$this->upload->initialize($surat);
 		$this->upload->do_upload('file_surat');


        $this->upload->initialize($pengantar_surat);
        $this->upload->do_upload('file_pengantar_surat');

        $this->upload->initialize($disposisi);
        $this->upload->do_upload('file_disposisi');

        $this->output->set_content_type('application/json')->set_output(json_encode(array(
        	'status'=>'success',
        	'file_lampiran'=>$lampiran['file_name'],
        	'file_surat'=>$surat['file_name'],
        	'file_pengantar_surat'=>$pengantar_surat['file_name'],
        	'file_disposisi'=>$disposisi['file_name'])));
	}
	
	public function edit() {

		$id=$this->input->post('id');
		$data=$this->input->post();
		unset($data['id']);


		$this->M_surat->update($id,$data);
	
		$jenisSurat=$this->input->post('jenis_surat');
		if ($jenisSurat=='surat masuk') {
			$this->tabelSM();
		}
		if ($jenisSurat=='surat keluar') {
			$this->tabelSK();
		}
		
	}

	public function edit_file(){

		$name_lampiran=$this->input->post('file_name_lampiran');
		$name_surat=$this->input->post('file_name_surat');
		$name_pengantar_surat=$this->input->post('file_name_pengantar_surat');
		$name_disposisi=$this->input->post('file_name_disposisi');

		 $cek_isi_file_lampiran=$this->input->post('cek_isi_file_lampiran');
         $cek_isi_file_surat=$this->input->post('cek_isi_file_surat');
         $cek_isi_file_pengantar_surat=$this->input->post('cek_isi_file_pengantar_surat');
         $cek_isi_file_disposisi=$this->input->post('cek_isi_file_disposisi');

        $lampiran['file_name']=$this->input->post('nama_isi_file_lampiran');
        $surat['file_name']=$this->input->post('nama_isi_file_surat');
        $pengantar_surat['file_name']=$this->input->post('nama_isi_file_pengantar_surat');
        $disposisi['file_name']=$this->input->post('nama_isi_file_disposisi');

 
        $this->load->library('upload');

        if ($cek_isi_file_lampiran!='') {
        	$lampiran = array(
			'upload_path' => './uploads/lampiran/',
			'allowed_types' => 'pdf',
			'file_name' => 'lmp_'.time().'_'.$name_lampiran,
			);

           $this->upload->initialize($lampiran);
 		   $this->upload->do_upload('file_lampiran');
        }

        if ($cek_isi_file_surat!='') {
        	 $surat = array(
			'upload_path' => './uploads/surat/',
			'allowed_types' => 'pdf',
			'file_name' => 'surat_'.time().'_'.$name_surat,
			);

	       $this->upload->initialize($surat);
	 	   $this->upload->do_upload('file_surat');
        }

 		if ($cek_isi_file_pengantar_surat!='') {
 			$pengantar_surat = array(
			'upload_path' => './uploads/pengantar/',
			'allowed_types' => 'pdf',
			'file_name' => 'ps_'.time().'_'.$name_pengantar_surat,
			);

 			$this->upload->initialize($pengantar_surat);
            $this->upload->do_upload('file_pengantar_surat');
 		}
 		if ($cek_isi_file_disposisi!='') {
 			$disposisi = array(
			'upload_path' => './uploads/disposisi/',
			'allowed_types' => 'pdf',
			'file_name' => 'dsp_'.time().'_'.$name_disposisi,
			);

 			$this->upload->initialize($disposisi);
            $this->upload->do_upload('file_disposisi');
 		}
        

        $this->output->set_content_type('application/json')->set_output(json_encode(array(
        	'status'=>'success',
        	'file_lampiran'=>$lampiran['file_name'],
        	'file_surat'=>$surat['file_name'],
        	'file_pengantar_surat'=>$pengantar_surat['file_name'],
        	'file_disposisi'=>$disposisi['file_name'])));
	}




	public function delete($id){
		$this->M_surat->delete($id);
		$this->tabelSM();

	}
	public function deleteSK($id){
		$this->M_surat->delete($id);
		$this->tabelSK();

	}

	public function tabelSM(){
		$surat['data']= $this->M_surat->select_allSM();

		$this->load->view('tabel/v_tabel_surat',$surat);
	}

	public function tabelSK(){
		$surat['data']= $this->M_surat->select_allSK();

		$this->load->view('tabel/v_tabel_surat',$surat);
	}

	public function select_asal($value){

		if ($value=='Internal') {
			$data['asal']=$this->M_surat->select_internal();
		} 
		elseif($value=='External'){
			$data['asal']=$this->M_surat->select_external();
		}

		$this->load->view('select/asal_surat',$data);

	}

	public function view($id){

		$data['surat']=$this->M_surat->select($id)->result();
		$this->load->view('select/v_detaiSurat',$data);

	}
	public function printSuratMasuk(){
		$surat['data']= $this->M_surat->select_allSM();
		
		$this->load->view('v_printSurat',$surat);

	}
	public function printSuratKeluar(){
		$surat['data']= $this->M_surat->select_allSK();
		
		$this->load->view('v_printSurat',$surat);

	}



}