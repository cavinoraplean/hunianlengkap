<?php

class Inputrmh extends CI_Controller
{
	
	function __construct(){
		parent::__construct();
		$this->load->model('Datarmh_model');
		$this->load->helper('url');
		if($this->session->userdata('status') != "login"){
			redirect(base_url("index.php/login"));
		}
	}

	function index(){
		$data['judul'] =  'Daftar Rumah';
		$this->load->view('templates/header',$data);
		$this->load->view('templates/footer');
		$data['tb_rumah'] = $this->Datarmh_model->tampil()->result();
		$this->load->view('home/v_tampil',$data);

	}

	// function tambah(){
	// 	$this->load->view('Administrator/DataRumah/v_input');
	// }

	// function tambah_aksi(){
	// 	$type = $this->input->post('Type');
	// 	$fasilitas = $this->input->post('Fasilitas');
	// 	$harga = $this->input->post('Harga');
 
	// 	$data = array(
	// 		'type' => $Type,
	// 		'fasilitas' => $Fasilitas,
	// 		'harga' => $Harga
	// 		);
	// 	$this->Datarmh_model->input_data($data,'tb_rumah');
	// 	redirect('DataRumah/index');
	// }
}