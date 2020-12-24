<?php

class DataUser extends CI_Controller
{
	
	function __construct(){
		parent::__construct();
		$this->load->model('Datauser_model');
		$this->load->helper('url');
		if($this->session->userdata('status') != "login"){
			redirect(base_url("index.php/login"));
		}
	}

	function index(){
		$data['judul'] =  'HL- Data User';
		$data['tb_user'] = $this->Datauser_model->tampil()->result();
		$this->load->view('Administrator/Datauser/index',$data);
	}

	function tambah(){
		$data['judul'] =  'Data User-Tambah Data';
		$this->load->view('Administrator/Datauser/v_input',$data);
	}

	function tambah_aksi(){
		$nama = $this->input->post('nama');
		$status = $this->input->post('status');
		$nomor_tlp = $this->input->post('nomor_tlp');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
 
		$data = array(
			'nama' => $nama,
			'status' => $status,
			'nomor_tlp' => $nomor_tlp,
			'username' => $username,
			'password' => $password
			);
		$this->Datauser_model->input_data($data,'tb_user');
		redirect('index.php/Datauser/index');
	}

	function edit($id){
		$where = array('id'=> $id);
		$data['judul'] =  'Data User-Edit Data';
		$data['tb_user'] = $this->Datauser_model->edit_data($where,'tb_user')->result();
		$this->load->view('Administrator/Datauser/v_edit',$data);
	}

	function update(){
	$id = $this->input->post('id');
	$nama = $this->input->post('nama');	
	$status = $this->input->post('status');
	$nomor_tlp = $this->input->post('nomor_tlp');	
	$username = $this->input->post('username');
	$password = $this->input->post('password');
 
	$data = array(
		'nama' => $nama,
		'status' => $status,
		'nomor_tlp' => $nomor_tlp,
		'username' => $username,
		'password' => $password
	);
 
	$where = array(
		'id' => $id
	);
 
	$this->Datauser_model->update_data($where,$data,'tb_user');
	redirect('index.php/Datauser/index');
	}

	function hapus($id){
		$where = array('id' => $id);
		$this->Datauser_model->hapus_data($where,'tb_user');
		redirect('index.php/Datauser/index');
	}
}