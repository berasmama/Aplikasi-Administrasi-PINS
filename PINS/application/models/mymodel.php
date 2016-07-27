<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class mymodel extends CI_Model{

		public function insert_project($tableName,$data){
		$res = $this->db->insert($tableName,$data);
		return $res;
		}

		public function insert_pegawai($tableName,$data){
		$res = $this->db->insert($tableName,$data);
		return $res;
		}

		public function insert_timeline($tableName,$data){
		$res = $this->db->insert($tableName,$data);
		return $res;
		}
		public function select_list($tableName,$where){
			$res = $this->db->get_where($tableName,$where);
			return $res;
		}

		public function select_data($tableName,$where){
			$res = $this->db->get_where($tableName,$where);
			return $res;
		}

		public function select_data_anggota($tableName,$where){
			$res = $this->db->order_by('firstname', 'ASC')->get_where($tableName,$where);
			return $res;
		}

		public function update($tableName,$data,$where){
			$res = $this->db->update($tableName,$data,$where);
			return $res;
		}

		public function delete($tableName,$where){
			$res = $this->db->delete($tableName,$where);
			return $res;
		}

		public function notif_count(){
			 $res = $this->db->get_where('tbl_pegawai',array(
			 		'is_valid' => '0'))->num_rows();
			 return $res;
		}

		public function total_timeline(){
			return $this->db->get('tbl_timeline')->num_rows();
		}

		public function show_timeline($until,$from){
			$this->db->select('tbl_timeline.*, tbl_pegawai.firstname, tbl_pegawai.lastname, tbl_pegawai.foto');
			$this->db->from('tbl_timeline');
			$this->db->join('tbl_pegawai', 'tbl_timeline.user = tbl_pegawai.nip');
			$this->db->order_by('tanggal', 'DESC');

			return $this->db->get('',$until,$from);
		}
}
?>