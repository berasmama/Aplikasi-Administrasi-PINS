<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class project extends CI_Controller{
	/*Probis model START*/
	public function probis(){
		for($i=1;$i<=35;$i++){
			$array['probis_'.$i] = $_POST['probis_'.$i];
		}
		$array['nama_project'] = $_POST['nama_project'];
		if(isset($_POST['preview'])){
			$this->load->view('project_review/probis',$array);
		}else if(isset($_POST['save'])){
			$data = json_encode($array);
			$this->mymodel->insert_project('tbl_project',array(
				'id_project' => '',
				'nama_project' => $_POST['nama_project'],
				'jenis_project' => 'probis',
				'tanggal' => date('Y-m-d H:i:s'),
				'staff' => $this->session->userdata('nip'),
				'data' => $data
				));
			$this->mymodel->insert_timeline('tbl_timeline',array(
				'user' => $this->session->userdata('nip'),
				'jenis' => 'anggota',
				'keterangan' => ' Telah membuat dokumen Probis.',
				));
		}
	}

	public function review_probis($id){
		$res = $this->mymodel->select_data('tbl_project',array('id_project' => $id));
		$row = $res->row();
		$array = json_decode($row->data);
		$this->load->view('project_review/probis',$array);
	}

	public function update_probis($id){
		$res = $this->mymodel->select_data('tbl_project',array('id_project' => $id));
		$row = $res->row();
		$array = json_decode($row->data);
		$this->load->view('dashboard',$array);
	}

	public function do_update_probis($id){
		for($i=1;$i<=35;$i++){
			$array['probis_'.$i] = $_POST['probis_'.$i];
		}
		$array['nama_project'] = $_POST['nama_project'];
		$data = json_encode($array);
		if(isset($_POST['preview'])){
			$this->load->view('project_review/probis',$array);
		}else if(isset($_POST['save'])){
			$res = $this->mymodel->update('tbl_project',array(
			'nama_project' => $_POST['nama_project'],
				'jenis_project' => 'probis',
				'tanggal' => date('Y-m-d H:i:s'),
				'staff' => $this->session->userdata('nip'),
				'data' => $data
			),"id_project = $id");
		$this->load->view('dashboard');
		$this->mymodel->insert_timeline('tbl_timeline',array(
				'user' => $this->session->userdata('nip'),
				'jenis' => 'anggota',
				'keterangan' => ' Telah memperbaharui dokumen Probis.',
				));
		}	
	}
	/*END*/

	/*Justifikasi model START*/
	public function justifikasi(){
		for($i=1;$i<=55;$i++){
			$array['justifikasi_'.$i] = $_POST['justifikasi_'.$i];
		}
		$array['nama_project'] = $_POST['nama_project'];
		if(isset($_POST['preview'])){
			$this->load->view('project_review/justifikasi',$array);
		}else if(isset($_POST['save'])){
			$data = json_encode($array);
			$this->mymodel->insert_project('tbl_project',array(
				'id_project' => '',
				'nama_project' => $_POST['nama_project'],
				'jenis_project' => 'justifikasi',
				'tanggal' => date('Y-m-d H:i:s'),
				'staff' => $this->session->userdata('nip'),
				'data' => $data
				));
			$this->mymodel->insert_timeline('tbl_timeline',array(
				'user' => $this->session->userdata('nip'),
				'jenis' => 'anggota',
				'keterangan' => ' Telah membuat dokumen Justifikasi.',
				));
		}
	}

	public function review_justifikasi($id){
		$res = $this->mymodel->select_data('tbl_project',array('id_project' => $id));
		$row = $res->row();
		$array = json_decode($row->data);
		$this->load->view('project_review/probis',$array);
	}

	public function update_justifikasi($id){
		$res = $this->mymodel->select_data('tbl_project',array('id_project' => $id));
		$row = $res->row();
		$array = json_decode($row->data);
		$this->load->view('dashboard',$array);
	}

	public function do_update_justifikasi($id){
		for($i=1;$i<=55;$i++){
			$array['justifikasi_'.$i] = $_POST['justifikasi_'.$i];
		}
		$array['nama_project'] = $_POST['nama_project'];
		$data = json_encode($array);
		if(isset($_POST['preview'])){
			$this->load->view('project_review/justifikasi',$array);
		}else if(isset($_POST['save'])){
			$res = $this->mymodel->update('tbl_project',array(
			'nama_project' => $_POST['nama_project'],
				'jenis_project' => 'probis',
				'tanggal' => date('Y-m-d H:i:s'),
				'staff' => $this->session->userdata('nip'),
				'data' => $data
			),"id_project = $id");
			$this->mymodel->insert_timeline('tbl_timeline',array(
				'user' => $this->session->userdata('nip'),
				'jenis' => 'anggota',
				'keterangan' => ' Telah memperbaharui dokumen Justifikasi.',
				));
		$this->load->view('dashboard');
		}	
	}
	/*END*/

	public function upload(){
		$this->db->select('jenis_project');
		$this->db->distinct();
		$query = $this->db->get('tbl_project');
		$this->load->view('dashboard',array('jenis_project' => $query->result_array()));
	}

	public function do_upload(){
	    $number_of_files = sizeof($_FILES['photo']['tmp_name']);
	    $files = $_FILES['photo'];
	    $this->load->library('upload');
	    $config['upload_path'] = './assets/img/upload_project/';
	    $config['allowed_types'] = 'gif|jpg|png|pdf';
	    //$config['overwrite'] = TRUE;
	    for ($i = 0; $i < $number_of_files; $i++)
	    {
	      $_FILES['photo']['name'] = $files['name'][$i];
	      $_FILES['photo']['type'] = $files['type'][$i];
	      $_FILES['photo']['tmp_name'] = $files['tmp_name'][$i];
	      $_FILES['photo']['error'] = $files['error'][$i];
	      $_FILES['photo']['size'] = $files['size'][$i];
	       $fileName = $_POST['jenis_project'].'_'.$_POST['id_project'].'_'.$i;
	       $images[] = $fileName;
	       $config['file_name'] = $fileName;
	      $this->upload->initialize($config);
	      if ($this->upload->do_upload('photo'))
	      {
	      	$this->_uploaded[$i] = $this->upload->data();
	      	$this->mymodel->insert_project('tbl_upload_project',array(
	      		'id_project' => $_POST['id_project'],
	      		'jenis_project' => $_POST['jenis_project'],
	      		'nip' => $this->session->userdata('nip'),
	      		'foto' => $this->_uploaded[$i]['file_name']));
	      }
	    }
	    $this->session->set_flashdata('upload_message','Unggah berhasil');
	        redirect(base_url()."index.php/project/upload/");
	}

	public function list_upload(){
		$res = $this->db->select('*')->group_by('id_project')->get('tbl_upload_project');
		$this->load->view('dashboard',array(
			'data' => $res->result_array()
			));
	}

	public function delete_upload($id_project){
		$res = $this->mymodel->select_data('tbl_upload_project',array('id_project' => $id_project))->result_array();
		foreach ($res as $row) {
			$foto = $row['foto'];
			unlink("./assets/img/upload_project/$foto");
		}
		$this->mymodel->delete('tbl_upload_project',array('id_project' => $id_project));
			    $this->session->set_flashdata('upload_message','Dokumen berhasil dihapus');
	        redirect(base_url()."index.php/project/list_upload/");
	}

	public function detail_upload($id_project){
		$res = $this->mymodel->select_data('tbl_upload_project',array('id_project' => $id_project));
		$this->load->view('dashboard',array('data' => $res->result_array()));
	}
	public function delete($id){
		$res = $this->mymodel->delete('tbl_project',array('id_project' => $id));
		$link = base_url()."index.php/dashboard";
		header("location:$link");
	}

	public function change_status($id,$status){
		$res = $this->mymodel->update('tbl_project',array(
			'status' => $status
			),array(
			'id_project' => $id
			));
		$this->mymodel->insert_timeline('tbl_timeline',array(
				'user' => $this->session->userdata('nip'),
				'jenis' => 'project',
				'keterangan' => $_POST['firstname']." Telah mengorfimasi project dengan ID $id",
				));
		$link = base_url()."index.php/dashboard";
		$this->session->set_userdata('timeline',"Project dengan ID $id telah dikonfirmasi.");
		header("location:$link");
	}
}
?>