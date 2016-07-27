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
				'staff' => 'Taufan',
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
				'staff' => 'Taufan',
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
				'jenis_project' => 'probis',
				'tanggal' => date('Y-m-d H:i:s'),
				'staff' => 'Taufan',
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
				'staff' => 'Taufan',
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

	public function delete($id){
		$res = $this->mymodel->delete('tbl_project',array('id_project' => $id));
		$link = base_url()."index.php/dashboard";
		header("location:$link");
	}
}
?>