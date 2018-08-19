<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct(){
		parent::__construct();
		//load model
		$this->load->model('m_artikel');
	}

	public function index()
	{
		$data['artikel'] =$this->m_artikel->get_artikel();	
		$data['new'] =$this->m_artikel->get_new();
		$data['terbaru'] = $this->m_artikel->get_terbaru();
		$data['late'] = $this->m_artikel->get_late();
		// print_r($this->db->last_query($data['artikel']));	
		// exit();
		$this->load->view('index', $data);
	}
}
