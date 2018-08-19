<?php 
/**
* 
*/
class User extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_user');
		$this->load->library('form_validation');
	}

	public function login_process(){
	//validation
		$this->form_validation->set_rules('email', 'username', 'required');
		$this->form_validation->set_rules('password', 'password', 'required');
		//process
		if($this->form_validation->run() !== FALSE){
			$where = array(
				'email' => $this->input->post('email'),
				'password' => sha1($this->input->post('password')) 
			);
			$user = $this->m_user->get_user($where);
		//jika user tidak ditemukan
			if(!empty($user)){
				$this->session->set_userdata('login_user', $user);
				redirect(' ');
			}
			else{
			  	$this->session->set_flashdata('login_error', 'nama pengguna atau kata sandi salah');
				redirect(' ');
			}			
		}
		$this->load->view(' ');
	}

	public function add_user(){
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('password', 'password', 'required');
		$this->form_validation->set_rules('password2', 'password second', 'required');

		if ($this->form_validation->run() !== FALSE) {
			$params = array('nama' => $this->input->post('nama'),
							'email' => $this->input->post('email'),
							'password' => sha1($this->input->post('password'))
							 );
			$this->m_user->insert($params);
			redirect(' ');
		}
		$this->load->view(' ');
	}

}
 ?>