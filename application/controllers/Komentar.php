<?php /**
* 
*/
class Komentar extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_artikel');
		$this->load->library('form_validation');
	}

	public function add_komentar(){
		$this->form_validation->set_rules('komentar', 'komentar', 'required');

		if ($this->form_validation->run() !== FALSE){
			$id_user = $this->session->userdata('login_user');
			$id_artikel = $this->input->post('id_artikel');
			$params = array('isi_komentar' => $this->input->post('komentar'),
							'id_user' => $id_user['id_user'],
							'id_artikel' => $id_artikel
							);
			if (!empty($id_user)) {
				$this->m_artikel->insert_komentar($params);
				redirect('artikel/select_detail/'.$id_artikel);
			}
			else{
				echo "<script type='text/javascript'>alert('Login terlebih dahulu, jika belum memiliiki aku dapat daftar ter;ebih dahulu');window.location.href='".site_url('artikel/select_detail/'.$id_artikel)."'</script>";
			}
		}
	}
} ?>