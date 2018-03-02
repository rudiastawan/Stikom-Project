<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

	class Employees extends CI_Controller{

		function __construct()
		{
			parent::__construct();
			$this->load->model('models_employees');
		}

		public function index()
		{
			$query = $this->models_employees->get();
			$data['employe'] = $query->result();
			$this->load->view('employees/view_employees', $data);
		}

		public function add_employees()
		{
			$this->load->view('employees/add_employees');
		}
	}


?>