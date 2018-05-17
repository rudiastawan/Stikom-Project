<?php
class Pengumuman extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('M_user');
		$this->load->model('M_pengumuman');
		if (!$this->session->userdata('isLoggedIn')){
			$this->load->view('v_redirect_login');
			return;
		}
	}
	
	public function index(){
		$data['currUser']=$this->session->userdata('fullname');
		$data['jabatan']=$this->session->userdata('jabatan');
		$pengumuman['data']= $this->M_pengumuman->select_all();
		$data['foto']=$this->session->userdata('thumb_foto');

		$this->load->view('comp/v_header',$data);
		$this->load->view('v_pengumuman',$pengumuman);
		$this->load->view('comp/v_footer');
	}
	public function select($id){
		$pengumuman=$this->M_pengumuman->select($id)->row();
		echo json_encode($pengumuman);
	}

	public function insert() {

		$informasi=$this->input->post('informasi');
		$mulaipengumuman=$this->input->post('mulaipengumuman');
		$akhirpengumuman=$this->input->post('akhirpengumuman');
		
		$this->M_pengumuman->insert($informasi, $mulaipengumuman, $akhirpengumuman);
		$this->tabel();
		
	}

	public function update() {

		$id=$this->input->post('id');
		$informasi=$this->input->post('informasi');
		$mulaipengumuman= $this->input->post('mulaipengumuman');
		$akhirpengumuman= $this->input->post('akhirpengumuman');

		$this->M_pengumuman->update($id,$informasi, $mulaipengumuman, $akhirpengumuman );
		$this->tabel();
		
	}

	public function delete($id){
		$this->M_pengumuman->delete($id);
		$this->tabel();

	}

	public function tabel(){
		$pengumuman['data']= $this->M_pengumuman->select_all();

		$this->load->view('tabel/v_tabel_pengumuman',$pengumuman);
	}
}

?>