<?php 
	/**
	* 
	*/
	class M_artikel extends CI_Model
	{	
		public function get_artikel(){
			return $this->db->get('artikel')->result_array();
		}

		public function get_new(){
			$this->db->order_by('tanggal', 'DESC');
			$this->db->limit('3' , '0');
			return $this->db->get('artikel')->result_array();
		}

		public function get_terbaru(){
			$this->db->order_by('tanggal', 'DESC');
			$this->db->limit('1' , '0');
			return $this->db->get('artikel')->row_array();
		}

		public function get_late(){
			$this->db->order_by('tanggal', 'asc');
			return $this->db->get('artikel')->result_array();
		}

		public function get_detail($where){
			return $this->db->get_where('artikel', $where);
		}

		public function insert_komentar($params){
			$this->db->insert('komentar', $params);
			return $this->db->insert_id();
		}

		public function get_komentar($where){
			$this->db->join('artikel','komentar.id_artikel = artikel.id_artikel');
			$this->db->join('user','komentar.id_user = user.id_user');
			$this->db->where('artikel.id_artikel', $where);
			return $this->db->get('komentar')->result_array();
		}
	}
 ?>