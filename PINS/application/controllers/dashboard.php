<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dashboard extends CI_Controller{
	public function __construct()
        {
            parent::__construct();
            if(!$this->session->userdata('nip')){
            	redirect(base_url()."index.php/login/");
            }
        }
	public function index(){
		$this->load->view('dashboard');
	}

	public function probis(){
		$this->load->view('dashboard');
	}

	public function list_probis(){
		$res = $this->mymodel->select_list('tbl_project',array('jenis_project' => 'probis','staff' => 'Taufan'));
		$this->load->view('dashboard',array(
			'title' => 'Daftar Probis',
			'data' => $res->result_array()
			));
	}

	public function profile(){
		$res = $this->mymodel->select_data('tbl_pegawai',array(
			'nip' => $this->session->userdata('nip')
			));
		$row = $res->row();
		$this->load->view('dashboard',$row);
	}

	public function update_profile(){
		$res = $this->mymodel->select_data('tbl_pegawai',array('nip' => $this->session->userdata('nip')));
		$row = $res->row();
		if(md5($_POST['password_old']) == $row->password){
			$photo_old = $this->session->userdata('foto');
			unlink("./assets/img/photo_profil/$photo_old");
			$config['upload_path']          = './assets/img/photo_profil/';
	        $config['allowed_types']        = 'gif|jpg|png|gif';
	        $config['max_size']             = 100;
	        $config['max_width']            = 1024;
	        $config['max_height']           = 768;
			$config['file_name'] 			= $_POST['nip'];
	        $this->load->library('upload', $config);
	        $this->upload->initialize($config);
	        $this->upload->do_upload('photo');
			$file_name = $this->upload->data();
			$nip_old = $this->session->userdata('nip');
			$this->mymodel->update('tbl_pegawai',array(
				'nip' => $_POST['nip'],
				'firstname' => $_POST['firstname'],
				'lastname' => $_POST['lastname'],
				'email' => $_POST['email'],
				'password' => md5($_POST['password_new']),
				'ttl' => $_POST['birthday'],
				'alamat' => $_POST['address'],
				'no_hp' => $_POST['contact'],
				'foto' => $file_name['file_name']
				),"nip = $nip_old");

			$session = array(
					'nip' 		=> $_POST['nip'],
					'firstname'	=> $_POST['firstname'],
					'lastname'	=> $_POST['lastname'],
					'email'		=> $_POST['email'],
					'foto'		=> $file_name['file_name']
					);
				$this->session->set_userdata($session);

				redirect(base_url()."index.php/dashboard/");
		}
		
	}
}
?>