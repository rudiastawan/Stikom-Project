<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends CI_Model {

	public function getUserLogin($user,$pass)
	{
		$this->db->select('id,fullname,username');
		$this->db->where('username',$user);
		$this->db->where('password',$pass);
		return $this->db->get('tb_user');
	}

	public function select_all() {

		$this->db->select('*');
		$this->db->order_by('id', 'DESC');
		return $this->db->get('tb_user'); 
	}

	public function insert($username, $password, $namalengkap, $foto, $thumb_foto)
	{
		$data = array(
			'username' => $username,
			'password' => md5($password),
			'fullname' => $namalengkap,
			'foto' => $foto,
			'thumb_foto' => $thumb_foto
		);
		$this->db->insert('tb_user', $data);
	}
	public function select($id) {
		$this->db->select('*');
		$this->db->from('tb_user');
		$this->db->where('id', $id);
		return $this->db->get();
	}
	public function delete($id) {
		$this->db->where('id', $id);
		$this->db->delete('tb_user');
	}
}