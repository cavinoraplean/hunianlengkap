<?php

class DataPetugas extends CI_Controller
{
	
	function __construct(){
		parent::__construct();
		$this->load->model('DataPetugas_model');
		$this->load->helper('url');
		if($this->session->userdata('status') != "login"){
			redirect(base_url("index.php/login"));
		}
	}

	function index(){
		$data['judul'] =  'HL-Data Layanan';
		$data['tb_petugas'] = $this->DataPetugas_model->tampil()->result();
		$this->load->view('Administrator/DataPetugas/index',$data);
	}

	function tambah(){
		$data['judul'] =  'Data Layanan-Tambah Data';
		// $this->load->view('templates/headeradm',$data);
		// $this->load->view('templates/footeradm');
		$data['dd_nama'] = $this->DataPetugas_model->get_nama();
		$data['dd_alamat'] = $this->DataPetugas_model->get_alamat();
		$data['dd_kota'] = $this->DataPetugas_model->get_kota();
		$this->load->view('Administrator/DataPetugas/v_input',$data);
	}

	function tambah_aksi(){
		$kota = $this->input->post('kota');
		$nama_prmhn = $this->input->post('nama_prmhn');
		$alamat_prmhn = $this->input->post('alamat_prmhn');
		$no_tlp   = $this->input->post('no_tlp');
		$nama   = $this->input->post('nama');
		$alamat = $this->input->post('alamat'); 
		$tugas   = $this->input->post('tugas');
 
		$data = array(
			'kota' => $kota,
			'nama_prmhn' => $nama_prmhn,
			'alamat_prmhn' => $alamat_prmhn,
			'no_tlp'   => $no_tlp,
			'alamat' => $alamat,
			'nama'   => $nama,
			'tugas'   => $tugas
			);
		$this->DataPetugas_model->input_data($data,'tb_petugas');
		redirect('index.php/DataPetugas/index');
	}

	function edit($id){
		$where = array('id'=> $id);
		$data['judul'] =  'Data Layanan-Edit Data';
		$data['dd_nama'] = $this->DataPetugas_model->get_nama();
		$data['dd_alamat'] = $this->DataPetugas_model->get_alamat();
		$data['dd_kota'] = $this->DataPetugas_model->get_kota();
		$data['tb_petugas'] = $this->DataPetugas_model->edit_data($where,'tb_petugas')->result();
		// $data['judul'] = 'Edit Data';
		// $this->load->view('templates/headeradm',$data);
		// $this->load->view('templates/footeradm');
		$this->load->view('Administrator/DataPetugas/v_edit',$data);
	}

	function update(){
	$id = $this->input->post('id');
	$kota = $this->input->post('kota');
	$nama_prmhn = $this->input->post('nama_prmhn'); 
	$alamat_prmhn = $this->input->post('alamat_prmhn');
	$no_tlp   = $this->input->post('no_tlp');
	$nama   = $this->input->post('nama');
	$alamat = $this->input->post('alamat'); 
	$tugas   = $this->input->post('tugas');
 
	$data = array(
		'kota' => $kota,
		'nama_prmhn' => $nama_prmhn,
		'alamat_prmhn' => $alamat_prmhn,
		'no_tlp'   => $no_tlp,
		'alamat' => $alamat,
		'nama'   => $nama,
		'tugas'   => $tugas
	);
 
	$where = array(
		'id' => $id
	);
 
	$this->DataPetugas_model->update_data($where,$data,'tb_petugas');
	redirect('index.php/DataPetugas/index');
	}

	function hapus($id){
		$where = array('id' => $id);
		$this->DataPetugas_model->hapus_data($where,'tb_petugas');
		redirect('index.php/DataPetugas/index');
	}
}