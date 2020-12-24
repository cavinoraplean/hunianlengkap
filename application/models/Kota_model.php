<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kota_model extends CI_Model{
    public function view_by_kota($kota){
        $this->db->where('kota',$kota);
        return $this->db->get('tb_rumah')->result();
    }

    public function view_by_type($Type){
        $this->db->where('Type',$Type);
        return $this->db->get('tb_rumah')->result();
    }
        
    public function view_all(){
        return $this->db->get('tb_rumah')->result(); // Tampilkan semua data transaksi
        
    }

    public function option_kota(){
        $this->db->select('kota'); // Ambil Tahun dari field tgl
        $this->db->from('tb_rumah'); // select ke tabel transaksi
        $this->db->order_by('YEAR(tanggal)'); // Urutkan berdasarkan tahun secara Ascending (ASC)
        $this->db->group_by('YEAR(tanggal)'); // Group berdasarkan tahun pada field tgl
           
        return $this->db->get()->result(); // Ambil data pada tabel transaksi sesuai kondisi diatas
    }

    function get_kota()
		{
			$query=$this->db->query('SELECT DISTINCT kota FROM tb_perumahan');
			return $query->result();
        }
    function get_type()
		{
			$query=$this->db->query('SELECT DISTINCT Type FROM tb_rumah WHERE Type LIKE "T%" AND NOT Type="Tanjung"');
			return $query->result();
		}
}