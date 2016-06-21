<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class mymodel extends CI_Model{
		public function insert_project($tableName,$data){
		$res = $this->db->insert($tableName,$data);
		return $res;
	}
}
?>