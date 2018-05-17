<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('M_user');
		$this->load->model('M_dashboard');
		if (!$this->session->userdata('isLoggedIn')){
			$this->load->view('v_redirect_login');
			return;
		}
	}

	public function index(){
		$data['currUser']=$this->session->userdata('fullname');
		$data['jabatan']=$this->session->userdata('jabatan');
		$data['foto']=$this->session->userdata('thumb_foto');
		$dash['jml_suratmasuk']=$this->M_dashboard->jmlSM();
		$dash['jml_suratkeluar']=$this->M_dashboard->jmlSK();
		$dash['jml_agneda']=$this->M_dashboard->jmlAgenda();
		$dash['jml_pengumuman']=$this->M_dashboard->jmlPengumuman();
		$this->load->view('comp/v_header',$data);
		$this->load->view('v_dashboard',$dash);
		$this->load->view('comp/v_footer');
	}



}