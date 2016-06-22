<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dashboard extends CI_Controller{

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
}
?>