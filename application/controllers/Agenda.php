<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Agenda extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('M_user');
		if (!$this->session->userdata('isLoggedIn')){
			$this->load->view('v_redirect_login');
			return;
		}
	}

	public function index(){
		$data['currUser']=$this->session->userdata('fullname');

		$this->load->view('comp/v_header',$data);
		$this->load->view('v_agenda');
		$this->load->view('comp/v_footer');
	}



}