<?php 
	/**
	* 
	*/
	class Admin extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->library('form_validation');
			$this->load->model('admin/m_auth');
			$this->load->model('admin/m_artikel');
		}

		public function login(){
		$this->load->view('admin/login');
		}

		public function login_process(){
			//validation
			$this->form_validation->set_rules('username_admin', 'username', 'required');
			$this->form_validation->set_rules('password_admin', 'password', 'required');
			//process
			if($this->form_validation->run() !== FALSE){
				$where = array(
					'username' => $this->input->post('username_admin'),
					'password' => sha1($this->input->post('password_admin')) 
				);
				$admin = $this->m_auth->get_admin($where);
			//jika user tidak ditemukan
				if(!empty($admin)){
					$this->session->set_userdata('login_admin', $admin);
					redirect('admin/artikel');
				}
				else{
				  	$this->session->set_flashdata('login_error', 'nama pengguna atau kata sandi salah');
					redirect('admin/login');
				}
				
			}
			$this->load->view('admin/login');
		}

		public function logout(){
			$this->session->unset_userdata('login_admin');
			redirect('admin/auth/login');
		}

		public function artikel(){
			$data['artikel'] = $this->m_artikel->get_all();
			$this->load->view('admin/artikel', $data);
		}

		public function add_artikel(){
			$this->load->view('admin/add');
		}

		public function add_proses(){
			$this->form_validation->set_rules('judul','judul','required');
			$this->form_validation->set_rules('isi','isi conten','required');
			$this->form_validation->set_rules('sumber','sumber','required');

			
			if ($this->form_validation->run() !== FALSE) {
				
				$params = array('judul' => $this->input->post('judul'),
						'jenis' => $this->input->post('jenis'),
						'isi' => $this->input->post('isi'),
						'sumber' => $this->input->post('sumber'),
						'tanggal' => date('Y-m-d')
				 );

				$id = $this->m_artikel->insert($params);
				//default icon
				print_r($params);
				print_r($id);
				$foto = 'default.jpg';
				//upload icon
				$config['upload_path']='resource/img/artikel/';
				$config['allowed_types']='*';
				$config['file_name']= "gambar".strtolower(str_replace('.','', $id));
				print_r($config['file_name']);
				// exit();
				if (isset($_FILES['gambar'])){
					$this->load->library('upload', $config);
					//load library upload & menggunakan config yang dibuat
					if ($this->upload->do_upload('gambar')){
						# code...
						//ambil nama file yang baru diupload & masukan ke variable foto
						$foto = $this->upload->data('file_name');
					} 
					else {
						echo $this->upload->display_errors(); exit();
					}
				}
				print_r($foto);
				$id_artikel = array('id_artikel' => $id );
				$gambar = array('gambar' => $foto);
				
				$coba = $this->m_artikel->update($gambar, $id_artikel);
				print_r($this->db->last_query($coba));
				redirect('admin/artikel');
			}
			else{
				echo validation_errors();
			}
		}
	}
?>