<?php

class DataPromo extends CI_Controller
{
	
	function __construct(){
		parent::__construct();
		$this->load->model('DataPromo_model');
		$this->load->helper('url');
		if($this->session->userdata('status') != "login"){
			redirect(base_url("index.php/login"));
		}
	}

	function index(){
		$data['judul'] =  'HL-Data Promo';
		$data['tb_promo'] = $this->DataPromo_model->tampil()->result();
		$this->load->view('Administrator/DataPromo/index',$data);
	}

	function tambah(){
		$data['judul'] =  'Data Promo-Tambah Data';
		// $this->load->view('templates/headeradm',$data);
		// $this->load->view('templates/footeradm');
		$data['dd_nama'] = $this->DataPromo_model->get_nama();
		$data['dd_alamat'] = $this->DataPromo_model->get_alamat();
		$data['dd_kota'] = $this->DataPromo_model->get_kota();
		$this->load->view('Administrator/DataPromo/v_input',$data);
	}

	function tambah_aksi(){
		$tanggal = $this->input->post('tanggal');
		$kota = $this->input->post('kota');
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$type = $this->input->post('type');
		$fasilitas = $this->input->post('fasilitas');
		$harga = $this->input->post('harga');
        $promo = $this->input->post('promo');
        $persyaratan = $this->input->post('persyaratan');
 
		$data = array(
			'tanggal' => $tanggal,
			'kota' => $kota,
			'nama' => $nama,
			'alamat' => $alamat,
			'type' => $type,
			'fasilitas' => $fasilitas,
			'harga' => $harga,
            'promo' => $promo,
            'persyaratan' => $persyaratan
		);
		$this->DataPromo_model->input_data($data,'tb_promo');
		redirect('index.php/DataPromo/index');
	}

	function edit($id){
		$data['judul'] =  'Data Promo-Tambah Data';
		$where = array('id'=> $id);
		$data['dd_kota'] = $this->DataPromo_model->get_kota();
		$data['dd_nama'] = $this->DataPromo_model->get_nama();
		$data['dd_alamat'] = $this->DataPromo_model->get_alamat();
		$data['tb_promo'] = $this->DataPromo_model->edit_data($where,'tb_promo')->result();
		// $data['judul'] = 'Edit Data';
		// $this->load->view('templates/headeradm',$data);
		// $this->load->view('templates/footeradm');
		$this->load->view('Administrator/DataPromo/v_edit',$data);
	}

	function update(){
    $id = $this->input->post('id');
	$tanggal = $this->input->post('tanggal');
	$kota = $this->input->post('kota');
	$nama = $this->input->post('nama');
	$alamat = $this->input->post('alamat');
	$type = $this->input->post('type');	
	$fasilitas = $this->input->post('fasilitas');
	$harga = $this->input->post('harga');
	$promo = $this->input->post('promo');
	$persyaratan = $this->input->post('persyaratan');
 
	$data = array(
		'tanggal' => $tanggal,
		'kota' => $kota,
		'nama' => $nama,
		'alamat' => $alamat,
		'type' => $type,
		'fasilitas' => $fasilitas,
		'harga' => $harga,
        'promo' => $promo,
        'persyaratan' => $persyaratan
	);
 
	$where = array(
		'id' => $id
	);
 
	$this->DataPromo_model->update_data($where,$data,'tb_promo');
	redirect('index.php/DataPromo/index');
	}

	function hapus($id){
		$where = array('id' => $id);
		$this->DataPromo_model->hapus_data($where,'tb_promo');
		redirect('index.php/DataPromo/index');
	}

}