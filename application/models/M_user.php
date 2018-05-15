<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends CI_Model {

	public function getUserLogin($user,$pass)
	{
		$this->db->select('id,fullname,username,thumb_foto');
		$this->db->where('username',$user);
		$this->db->where('password',$pass);
		return $this->db->get('tb_user');
	}

	public function select_all() {

		$this->db->select('*');
		$this->db->order_by('id', 'DESC');
		return $this->db->get('tb_user'); 
	}

	public function insert($username, $password, $namalengkap, $foto, $thumb_foto,$jabatan)
	{
		$data = array(
			'username' => $username,
			'password' => md5($password),
			'fullname' => $namalengkap,
			'foto' => $foto,
			'jabatan' => $jabatan,
			'thumb_foto' => $thumb_foto
		);
		$this->db->insert('tb_user', $data);
	}

	public function update($id,$username, $namalengkap,$jabatan)
	{
		$data = array(
			'username' => $username,
			'fullname' => $namalengkap,
			'jabatan' => $jabatan
		);
		$this->db->where('id', $id);
		$this->db->update('tb_user', $data);
	}
	public function select($id) {
		$this->db->select('*');
		$this->db->from('tb_user');
		$this->db->where('id', $id);
		return $this->db->get();
	}
	public function select_profil($username) {
		$this->db->select('*');
		$this->db->from('tb_user');
		$this->db->where('username', $username);
		return $this->db->get();
	}
	public function delete($id) {
		$this->db->where('id', $id);
		$this->db->delete('tb_user');
	}


}