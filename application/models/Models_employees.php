<?php 
	class Models_employees extends CI_Model
	{
		public function get()
		{
			$this->db->select('*');
			$this->db->from('tb_employees');
			$query = $this->db->get();
			return $query;
		}
	}



?>