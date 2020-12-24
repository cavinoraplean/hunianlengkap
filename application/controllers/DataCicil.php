<?php

class DataCicil extends CI_Controller
{
	
	function __construct(){
		parent::__construct();
		$this->load->model('Datacicil_model');
		$this->load->helper('url');
		if($this->session->userdata('status') != "login"){
			redirect(base_url("index.php/login"));
		}
	}

	function index(){
		$data['judul'] =  'HL-Data Cicilan';
		$data['tb_cicil'] = $this->Datacicil_model->tampil()->result();
		$this->load->view('Administrator/DataCicil/index',$data);
	}

	function tambah(){
		$data['judul'] =  'Data Cicil-Tambah Data';
		// $this->load->view('templates/headeradm',$data);
		// $this->load->view('templates/footeradm');
		$data['dd_alamat'] = $this->Datacicil_model->get_alamat();
		$data['dd_nama'] = $this->Datacicil_model->get_nama();
		$data['dd_kota'] = $this->Datacicil_model->get_kota();
		$this->load->view('Administrator/DataCicil/v_input',$data);
	}

	function tambah_aksi(){
		$tanggal = $this->input->post('tanggal');
		$kota = $this->input->post('kota');
		$alamat = $this->input->post('alamat');
		$nama_prmhn = $this->input->post('nama_prmhn');
		$nama = $this->input->post('nama');
		$type_rumah = $this->input->post('type_rumah');
		$uang = $this->input->post('uang');
		$cicilan_terbayar = $this->input->post('cicilan_terbayar');
		$sisa_cicilan = $this->input->post('sisa_cicilan');
 
		$data = array(
			'tanggal' => $tanggal,
			'kota' => $kota,
			'nama_prmhn' => $nama_prmhn,
			'alamat' => $alamat,
			'nama' => $nama,
			'type_rumah' => $type_rumah,
			'uang' => $uang,
			'cicilan_terbayar' => $cicilan_terbayar,
			'sisa_cicilan' => $sisa_cicilan
			);
		$this->Datacicil_model->input_data($data,'tb_cicil');
		redirect('index.php/DataCicil/index');
	}

	function edit($id){
		$where = array('id'=> $id);
		$data['judul'] =  'Data Cicil-Edit Data';
		$data['dd_alamat'] = $this->Datacicil_model->get_alamat();
		$data['dd_nama'] = $this->Datacicil_model->get_nama();
		$data['dd_kota'] = $this->Datacicil_model->get_kota();
		$data['tb_cicil'] = $this->Datacicil_model->edit_data($where,'tb_cicil')->result();
		// $data['judul'] = 'Edit Data';
		// $this->load->view('templates/headeradm',$data);
		// $this->load->view('templates/footeradm');
		$this->load->view('Administrator/DataCicil/v_edit',$data);
	}

	function update(){
	$id = $this->input->post('id');
	$nama = $this->input->post('nama');	
	$kota = $this->input->post('kota');
	$nama_prmhn = $this->input->post('nama_prmhn');
	$alamat = $this->input->post('alamat');
	$tanggal = $this->input->post('tanggal');
	$type_rumah = $this->input->post('type_rumah');
	$uang = $this->input->post('uang');
	$cicilan_terbayar = $this->input->post('cicilan_terbayar');
	$sisa_cicilan = $this->input->post('sisa_cicilan');
 
	$data = array(
		'tanggal' => $tanggal,
		'kota' => $kota,
		'nama_prmhn' => $nama_prmhn,
		'alamat' => $alamat,
		'nama' => $nama,
		'type_rumah' => $type_rumah,
		'uang' => $uang,
		'cicilan_terbayar' => $cicilan_terbayar,
		'sisa_cicilan' => $sisa_cicilan
	);
 
	$where = array(
		'id' => $id
	);
 
	$this->Datacicil_model->update_data($where,$data,'tb_cicil');
	redirect('index.php/DataCicil/index');
	}

	function hapus($id){
		$where = array('id' => $id);
		$this->Datacicil_model->hapus_data($where,'tb_cicil');
		redirect('index.php/DataCicil/index');
	}
}