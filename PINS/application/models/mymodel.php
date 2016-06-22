<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class mymodel extends CI_Model{

		public function insert_project($tableName,$data){
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

		public function update($tableName,$data,$where){
			$res = $this->db->update($tableName,$data,$where);
			return $res;
		}
		public function delete($tableName,$where){
			$res = $this->db->delete($tableName,$where);
			return $res;
		}
}
?>