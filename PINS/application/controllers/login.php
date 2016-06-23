<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller{

	public function index(){
		$this->load->view('login');
	}

	public function do_login(){
		$nip = $_POST['nip'];
		$res = $this->mymodel->select_data('tbl_pegawai',"nip = $nip");
		$row = $res->row();
		if(md5($_POST['password']) == $row->password){
			$session = array(
				'nip' 		=> $row->nip,
				'firstname'	=> $row->firstname,
				'lastname'	=> $row->lastname,
				'email'		=> $row->email,
				'foto'		=> $row->foto,
				'jabatan'	=> $row->jabatan
				);
			$this->session->set_userdata($session);
			redirect(base_url()."index.php/dashboard/");
		}else{
			redirect(base_url()."index.php/login/");
		}
	}

	public function register(){
		$this->load->view('register');
	}
	public function do_register(){
		if($_POST['password'] == $_POST['repassword']){
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
			$res = $this->mymodel->insert_pegawai('tbl_pegawai',array(
				'nip' 		=> $_POST['nip'],
				'firstname' => $_POST['firstname'],
				'lastname'	=> $_POST['lastname'],
				'email'		=> $_POST['email'],
				'password'	=> md5($_POST['password']),
				'ttl'		=> $_POST['birthday'],
				'alamat'	=> $_POST['address'],
				'no_hp'		=> $_POST['contact'],
				'foto'		=> $file_name['file_name'],
				'jabatan'	=> 'staff',
				'is_valid' 	=> 0
				));
			redirect(base_url()."index.php/login/");
		}
	}

	public function logout(){
		$session = array(
				'nip',
				'firstname',
				'lastname',
				'email',
				'foto',
				'jabatan'
				);
		$this->session->unset_userdata($session);
		
		redirect(base_url()."index.php/login/");
	}
}
?>