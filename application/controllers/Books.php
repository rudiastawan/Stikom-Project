<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Books extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('models_books');
	}

	public function index()
	{
		$query = $this->models_books->get();
		$data['buku']  = $query->result();
		$this->load->view('books/view_books', $data);
	}

	public function add_books()
	{	
		$this->load->view('books/add_books');
	}

	public function edit_books($id = null)
	{
		$query = $this->models_books->get($id);
		$data = array(
			'buku' => $query->row()
			);
		$this->load->view('books/edit_books', $data);
	}

	public function process()
	{
		if(isset($_POST['button_add_books'])){
			//$title = $this->input->post('title');
			$inputan = $this->input->post(null, TRUE);
			$this->models_books->add($inputan);
		}
		else if(isset($_POST['button_edit_books'])){
			$inputan = $this->input->post(null, TRUE);
			$this->models_books->edit($inputan);
		}

		redirect('books');
	}

	public function delete_books($id = null)
	{
		$this->models_books->delete($id);
		redirect('books');
	}

	public function detail_books($id = null)
	{
		$query = $this->models_books->detail($id);
		$data = array(
			'buku' => $query->row()
			);
		$this->load->view('books/detail_books', $data);
	}
}
