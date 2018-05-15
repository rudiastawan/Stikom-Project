<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manajemen_User extends CI_Controller {

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
		$data['foto']=$this->session->userdata('thumb_foto');
		$manajemen_user['data']= $this->M_user->select_all();
		$this->load->view('comp/v_header',$data);
		$this->load->view('v_manajemen_user',$manajemen_user);
		$this->load->view('comp/v_footer');
	}

	public function profil(){
		$data['currUser']=$this->session->userdata('fullname');
		$data['foto']=$this->session->userdata('thumb_foto');
		$data['profil']=$this->M_user->select_profil($this->session->userdata('username'))->result();

		$this->load->view('comp/v_header',$data);
		$this->load->view('v_profil');
		$this->load->view('comp/v_footer');
	} 
	public function update_pass(){

		$id=$this->input->post('id');
		$newpass=md5($this->input->post('newpass'));

		$data = array(
			'password' => $newpass,
			);

		$this->db->where('id', $id);
		$this->db->update('tb_user', $data);
		redirect('manajemen_user/profil');

	}

	public function select($id){
		$manajemenuser = $this->M_user->select($id)->row();
		echo json_encode($manajemenuser);
	}

	function insert() {

		// memanggil private function untuk upload gambar
			$get_foto = $this->_upload_gambar();

			// mendapatkan nama file foto
			$foto = $get_foto['file_name'];

			// setup nama thumbnail foto
			$thumb_foto = $get_foto['raw_name'].'_thumb'.$get_foto['file_ext'];

			// Mengumpulkan data POST dalam bentuk array
			

		$namalengkap		=	$this->input->post('namalengkap');
		$jabatan			=	$this->input->post('jabatan');
        $username			= 	$this->input->post('username');
        $password			= 	$this->input->post('password');

		$this->M_user->insert($username, $password, $namalengkap, $foto, $thumb_foto,$jabatan);
		redirect('manajemen_user/index');
	}

	public function update() {

		$id=$this->input->post('id');
		$namalengkap		=	$this->input->post('editor-namalengkap');
		$jabatan			=	$this->input->post('editor-jabatan');
        $username			= 	$this->input->post('editor-username');

		$this->M_user->update($id,$username, $namalengkap,$jabatan);
		redirect('manajemen_user/index');
		
	}

	public function delete($id){
		$this->M_user->delete($id);
		$this->tabel();

	}
	public function tabel(){
		$manajemen_user['data']= $this->M_user->select_all();

		$this->load->view('tabel/v_tabel_manajemen_user',$manajemen_user);
	}

	
	private function _upload_gambar() {

 		// Setup folder upload path
 		$config['upload_path']		= './upload/';

 		// Setup file yang di izinkan
 		$config['allowed_types']	= 'gif|jpg|png|jpeg';

 		// Encrpt nama foto agar tidak sama
 		$config['encrypt_name']		= true;

 		// Memanggil library upload disertai dengan paramter $config array
 		$this->load->library('upload', $config);

 		// jika upload gagal, return false
 		if( ! $this->upload->do_upload('foto')) {
 			#return false;
 			return $this->upload->display_errors();
 		} 
 		
 		// jika upload berhasil, return nama file dan membuat thumbnail foto
 		else 
 		{
 			// Mengambil data yang berhasil di upload
 			$uploaded_data = $this->upload->data();

 			// Mendapatkan nama file
 			$file_name = $uploaded_data['file_name'];

 			// Memanggil library GD 2
			$config['image_library'] = 'gd2';

			// Memanggil nama file images
			$config['source_image'] = './upload/'.$file_name;

			// Membuat thumbnail
			$config['create_thumb'] = TRUE;

			// Mempertahankan foto berdasarkan ratio, hal ini digunakan agar foto tidak gepeng
			$config['maintain_ratio'] = TRUE;

			// Setting lebar dan tinggi
			$config['width']         = 100;
			//$config['height']       = 100;

			// Memanggil library image_lib untuk memproses images resize disertai dengan parameter $config
			$this->load->library('image_lib', $config);

			// Melakukan resize
			$this->image_lib->resize();

			// Return data
 			return $uploaded_data;
 		}
 	}

}