<?php

class DataPerumahan extends CI_Controller
{
	
	function __construct(){
		parent::__construct();
		$this->load->model('Perumahan_model');
		$this->load->helper('url');
		if($this->session->userdata('status') != "login"){
			redirect(base_url("index.php/login"));
		}
	}

	function index(){
		$data['judul'] =  'HL-Data Perumahan';
		$data['tb_perumahan'] = $this->Perumahan_model->tampil()->result();
		$this->load->view('Administrator/DataPerumahan/index',$data);
	}

	function tambah(){
		$data['judul'] =  'Data Perumahan-Tambah Data';
		// $this->load->view('templates/headeradm',$data);
		// $this->load->view('templates/footeradm');
		$this->load->view('Administrator/DataPerumahan/v_input',$data);
	}

	function tambah_aksi(){
		$kota   = $this->input->post('kota');
		$nama   = $this->input->post('nama');
		$alamat = $this->input->post('alamat'); 
		$type   = $this->input->post('type');
		$url    = $this->input->post('url');
 
		$data = array(
			'kota'   => $kota,
			'alamat' => $alamat,
			'nama'   => $nama,
			'type'   => $type,
			'url'    => $url
			);
		$this->Perumahan_model->input_data($data,'tb_perumahan');
		redirect('index.php/DataPerumahan/index');
	}

	function edit($id){
		$where = array('id'=> $id);
		$data['judul'] =  'Data Perumahan-Edit Data';
		$data['tb_perumahan'] = $this->Perumahan_model->edit_data($where,'tb_perumahan')->result();
		// $data['judul'] = 'Edit Data';
		// $this->load->view('templates/headeradm',$data);
		// $this->load->view('templates/footeradm');
		$this->load->view('Administrator/DataPerumahan/v_edit',$data);
	}

	function update(){
	$id = $this->input->post('id');
	$kota = $this->input->post('kota');
	$alamat = $this->input->post('alamat'); 
	$nama = $this->input->post('nama');	
	$type = $this->input->post('type');
	$url = $this->input->post('url');
 
	$data = array(
		'kota' => $kota,
		'nama' => $nama,
		'alamat' => $alamat,
		'type' => $type,
		'url' => $url
	);
 
	$where = array(
		'id' => $id
	);
 
	$this->Perumahan_model->update_data($where,$data,'tb_perumahan');
	redirect('index.php/DataPerumahan/index');
	}

	function hapus($id){
		$where = array('id' => $id);
		$this->Perumahan_model->hapus_data($where,'tb_perumahan');
		redirect('index.php/DataPerumahan/index');
	}
}