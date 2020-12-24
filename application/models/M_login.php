<?php 
 
class M_login extends CI_Model{	
	function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
	}	

	function get_nama(){
		$query = $this->db->query('SELECT nama FROM tb_admin');
		return $query->result();
	}
}