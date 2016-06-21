<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class project extends CI_Controller{
	public function probis(){
		//$array = array('taufan','fadhilah');
		for($i=1;$i<=35;$i++){
			$array['probis_'.$i] = $_POST['probis_'.$i];
		}
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

		}
	}
}
?>