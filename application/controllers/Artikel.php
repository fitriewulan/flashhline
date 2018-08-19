<?php 
/**
* 
*/
class Artikel extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_artikel');
	}

	public function select_detail($id){
		$where = array('id_artikel' => $id );
		$data['artikel'] =$this->m_artikel->get_artikel();
		$data['komentar'] = $this->m_artikel->get_komentar($id);
		// print_r($this->db->last_query($data['komentar']));
		// exit();
		$data['detail_artikel'] = $this->m_artikel->get_detail($where)->row_array();
		$this->load->view('artikel_detail', $data);
	}

	public function select_jenis($jenis){
		$where = array('jenis' => $jenis);
		$data['artikel'] = $this->m_artikel->get_detail($where)->result_array();
		$data['jenis'] = $this->m_artikel->get_detail($where)->row_array();
		print_r($this->db->last_query($data['artikel']));
		$this->load->view('jenis_artikel', $data);
	}
}
 ?>