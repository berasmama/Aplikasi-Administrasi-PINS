<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dashboard extends CI_Controller{
	
	public function __construct()
        {
            parent::__construct();
            if(!$this->session->userdata('nip')){
            	redirect(base_url()."index.php/login/");
            }
            $this->session->set_userdata('notif', $this->mymodel->notif_count());
        }

	public function index(){
		$config['base_url'] = base_url().'index.php/dashboard/index/';
		$config['total_rows'] = $this->mymodel->total_timeline();
		$config['per_page'] = 10;

		/*Config pagination bootstrap*/
		$config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
		/*Config pagination END*/

		$this->pagination->initialize($config);
		$from = $this->uri->segment(3);
		$timeline = $this->mymodel->show_timeline($config['per_page'],$from);
		$this->load->view('dashboard',array(
			'data' => $timeline->result(),
			'halaman' => $this->pagination->create_links(),
			));
	}

	/*Probis*/
	public function probis(){
		$this->load->view('dashboard');
	}

	public function list_probis(){
		if($this->session->userdata('jabatan') != 'Manager'){
		$res = $this->mymodel->select_list('tbl_project',array('jenis_project' => 'probis','staff' => $this->session->userdata('nip')));
		}else{
			$res = $this->mymodel->select_list('tbl_project',array('jenis_project' => 'probis'));
		}
		
		$this->load->view('dashboard',array(
			'title' => 'Daftar Probis',
			'data' => $res->result_array()
			));
	}
	/*END*/

	/*Justifikasi*/
	public function justifikasi(){
		$this->load->view('dashboard');
	}

	public function list_justifikasi(){
		if($this->session->userdata('jabatan') != 'Manager'){
		$res = $this->mymodel->select_list('tbl_project',array('jenis_project' => 'justifikasi','staff' => $this->session->userdata('nip')));
		}else{
			$res = $this->mymodel->select_list('tbl_project',array('jenis_project' => 'justifikasi'));
		}
		$this->load->view('dashboard',array(
			'title' => 'Daftar Justifikasi',
			'data' => $res->result_array()
			));
	}
	/*END*/

	/*Alur Proyek*/
	public function alur_proyek(){
		$this->load->view('dashboard');
	}

	public function list_alur_proyek(){
		if($this->session->userdata('jabatan') != 'Manager'){
		$res = $this->mymodel->select_list('tbl_project',array('jenis_project' => 'alur_proyek','staff' => $this->session->userdata('nip')));
		}else{
			$res = $this->mymodel->select_list('tbl_project',array('jenis_project' => 'alur_proyek'));
		}
		$this->load->view('dashboard',array(
			'title' => 'Daftar Alur Proyek',
			'data' => $res->result_array()
			));
	}
	/*END*/

	/*Profile*/
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
			if(isset($_FILES['photo']) && $_FILES['photo']['size'] > 0){
			$photo_old = $this->session->userdata('foto');
			unlink("./assets/img/photo_profil/$photo_old");
			$config['upload_path']          = './assets/img/photo_profil/';
	        $config['allowed_types']        = 'gif|jpg|png|gif';
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
		}else{
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
				),"nip = $nip_old");
			$session = array(
					'nip' 		=> $_POST['nip'],
					'firstname'	=> $_POST['firstname'],
					'lastname'	=> $_POST['lastname'],
					'email'		=> $_POST['email'],
					'foto'		=> $this->session->userdata('foto')
					);
				$this->session->set_userdata($session);

				redirect(base_url()."index.php/dashboard/");
		}
		$this->mymodel->insert_timeline('tbl_timeline',array(
				'user' => $_POST['nip'],
				'jenis' => 'anggota',
				'keterangan' => ' Telah mengubah data diri.',
				));
		}else{
			$this->session->set_flashdata('error_update_profil','Terjadi kesalahan, ulangi pengisian data dan masukan password lama yang benar');
			redirect(base_url()."index.php/dashboard/profile");
		}
		
	}
	/*END Profile*/

	/*ANGGOTA*/
	public function anggota_baru(){
		$res = $this->mymodel->select_data('tbl_pegawai',array(
			'is_valid' => '0'
			));
		$this->load->view('dashboard',array(
			'title' => 'Daftar Anggota Baru',
			'data' => $res->result_array()
			));
		//$this->session->set_userdata('notif', '0');
	}
	public function anggota_daftar(){
		$res = $this->mymodel->select_data_anggota('tbl_pegawai',array(
			'is_valid' => '1'
			));
		$this->load->view('dashboard',array(
			'title' => 'Daftar Anggota',
			'data' => $res->result_array()
			));
	}

	public function anggota_hapus($nip){
		$res = $this->mymodel->delete('tbl_pegawai',array(
			'nip' => $nip
			));
		$this->mymodel->insert_timeline('tbl_timeline',array(
				'user' => $nip,
				'jenis' => 'anggota',
				'keterangan' => ' Telah dihapus.',
				));
		$this->session->set_flashdata('anggota_status','Anggota Telah Terhapus');
		redirect(base_url()."index.php/dashboard/anggota_daftar");
	}

	public function anggota_terima($nip){
		$res = $this->mymodel->update('tbl_pegawai',array(
			'is_valid' => '1'
			),array(
			'nip' => $nip
			));
		$this->mymodel->insert_timeline('tbl_timeline',array(
				'user' => $nip,
				'jenis' => 'anggota',
				'keterangan' => ' Telah bergabung.',
				));
		$this->session->set_flashdata('anggota_status','Anggota Telah Terdaftar');
		redirect(base_url()."index.php/dashboard/anggota_daftar");
	}
	/*END*/
}
?>