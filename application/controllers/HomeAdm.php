<?php

class HomeAdm extends CI_Controller {
	// public function index()
	// {
	// 	$data['judul'] =  'Home Admin';
	// 	$this->load->view('templates/headerAdm',$data);
	// 	$this->load->view('templates/footerAdm');
	// 	$this->load->view('Administrator/Home/isi');
	// } 

	public function __construct()
	{
		parent::__construct();
		if($this->session->userdata('status') != "login"){
			redirect(base_url("index.php/login"));
		}
	}

	public function index()
	{
		$data['judul'] =  'HL- Home Admin';
		$this->load->view("Administrator/DataRumah/overview",$data);
	}
}