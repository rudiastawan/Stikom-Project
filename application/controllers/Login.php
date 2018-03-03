<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_user');
	} 

	public function index()
	{
		if ($this->session->userdata('isLoggedIn')) {
			$this->load->view('v_redirect_home');
			return;
		}
		$this->load->view('v_login', FALSE);
	}

	public function auth()
	{
		if ($this->session->userdata('isLoggedIn')) {
			$this->load->view('v_redirect_home');
			return;
		}
		else{
			$user = $this->input->post('user');
			$pass = md5($this->input->post('pass'));
			$admin= $this->M_user->getUserLogin($user,$pass)->row_array();
			if (is_null($admin)) {
				$this->session->set_flashdata('login_failed','username dan password salah');
				redirect($this->agent->referrer(),'refresh');
			} else{

				$admin['isLoggedIn']=true;
				$this->session->set_userdata($admin);
				redirect('Dashboard','refresh');
				}
			
		}
	
	}

	public function unauth()
	{
		$this->session->sess_destroy();
		redirect('Login','refresh');
	}
}
