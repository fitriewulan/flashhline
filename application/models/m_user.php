<?php 
/**
* 
*/
class m_user extends CI_Model
{
	
	public function get_user($where){
		return $this->db->get_where('user', $where)->row_array();
	}

	public function insert($params){
		$this->db->insert('user', $params);
		return $this->db->insert_id();
	}
}
 ?>