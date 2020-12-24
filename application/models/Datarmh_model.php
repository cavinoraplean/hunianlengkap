<?php
	class Datarmh_model extends CI_Model
	{
		function tampil(){
			return $this->db->get('tb_rumah');
		}

		function input_data($data,$table){
			$this->db->insert($table,$data);
		}

		function edit_data($where,$table){
			return $this->db->get_where($table,$where);
		}

		function update_data($where,$data,$table){
			$this->db->where($where);
			$this->db->update($table,$data);
		}	

		function hapus_data($where,$table){
			$this->db->where($where);
			$this->db->delete($table);
		}

		function get_kota()
		{
			$query=$this->db->query('SELECT DISTINCT kota FROM tb_perumahan');
			return $query->result();
		}

		function get_type()
		{
			$query=$this->db->query('SELECT Type FROM tb_rumah');
			return $query->result();
		}

		function get_nama()
		{
			$query=$this->db->query('SELECT DISTINCT nama FROM tb_perumahan');
			return $query->result();
		}

		function get_alamat()
		{	
			$query=$this->db->query('SELECT * FROM tb_perumahan');
			return $query->result();
		}

		public function getlaporan($Type,$kota)
		{
			if($Type!='') $this->db->where('Type',$Type);
			if($kota!='') $this->db->where('kota',$kota);
			return $this->db->get('tb_rumah');
		}
	}