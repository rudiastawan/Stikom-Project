<?php 
	
	class Models_books extends CI_Model
	{
		

		public function get($id = null)
		{
			$this->db->select('*');
			$this->db->from('tb_books');
			if($id != null){
				$this->db->where('id_books', $id);
			}
			$query = $this->db->get();
			return $query;
		}

		public function add($data)
		{
			$param = array(
				'type' => $data['type'],
				'title' => $data['title'],
				'author' => $data['author'],
				'publisher' => $data['publisher'],
				'date_of_publish' => $data['date_of_publish'],
				'ASBN' => $data['ASBN'],
				'price' => $data['price'],
				'amount' => $data['amount'],
				'edition' => $data['edition'],
				'description' => $data['description'],
				);

				$this->db->insert('tb_books', $param);
		}

		public function edit($data)
		{
			$param = array(
				'type' => $data['type'],
				'title' => $data['title'],
				'author' => $data['author'],
				'publisher' => $data['publisher'],
				'date_of_publish' => $data['date_of_publish'],
				'ASBN' => $data['ASBN'],
				'price' => $data['price'],
				'amount' => $data['amount'],
				'edition' => $data['edition'],
				'description' => $data['description'],
				);

				$this->db->set($param);
				$this->db->where('id_books', $data['id_books']);
				$this->db->update('tb_books');
		}

		public function delete($id = null)
		{
			$this->db->where('id_books', $id);
			$this->db->delete('tb_books');
		}

		public function detail($id)
		{
			$this->db->select('*');
			$this->db->from('tb_books');
			if($id != null)
			{
				$this->db->where('id_books', $id);
			}
			$query = $this->db->get();
			return $query;
		}

	}


?>