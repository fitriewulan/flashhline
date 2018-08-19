<?php 
/**
* 
*/
class m_artikel extends CI_Model
{
	
	public function get_all(){
		return $this->db->get('artikel')->result_array();
	}

	public function insert($params){
		$this->db->insert('artikel', $params);
		return $this->db->insert_id();
	}

	public function update($params, $where){
		$this->db->where($where);
		return $this->db->update('artikel', $params);
	}

	
}
 ?>