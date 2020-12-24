<?php

class DataRmh extends CI_Controller
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
		$data['judul'] = "HL-Data Rumah";
		$data['tb_rumah'] = $this->Datarmh_model->tampil()->result();
		$this->load->view('Administrator/DataRumah/index',$data);
	}

	function tambah(){
		$data['judul'] =  'Data Rumah-Tambah Data';
		// $this->load->view('templates/headeradm',$data);
		// $this->load->view('templates/footeradm');
		$data['dd_kota'] = $this->Datarmh_model->get_kota();
		$data['dd_nama'] = $this->Datarmh_model->get_nama();
		$data['dd_alamat'] = $this->Datarmh_model->get_alamat();
		$this->load->view('Administrator/DataRumah/v_input',$data);
	}

	function tambah_aksi(){
		$kota = $this->input->post('kota');
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$Type = $this->input->post('Type');
		$Fasilitas = $this->input->post('Fasilitas');
		$Harga = $this->input->post('Harga');
 
		$data = array(
			'kota' => $kota,
			'nama' => $nama,
			'alamat' => $alamat,
			'Type' => $Type,
			'Fasilitas' => $Fasilitas,
			'Harga' => $Harga
			);
		$this->Datarmh_model->input_data($data,'tb_rumah');
		redirect('index.php/DataRmh/index');
	}

	function edit($id){
		$where = array('id'=> $id);
		$data['judul'] =  'Data Rumah-Edit Data';
		$data['dd_kota'] = $this->Datarmh_model->get_kota();
		$data['dd_nama'] = $this->Datarmh_model->get_nama();
		$data['dd_alamat'] = $this->Datarmh_model->get_alamat();
		$data['tb_rumah'] = $this->Datarmh_model->edit_data($where,'tb_rumah')->result();
		// $this->load->view('templates/headeradm',$data);
		// $this->load->view('templates/footeradm');
		$this->load->view('Administrator/DataRumah/v_edit',$data);
	}

	function update(){
	$id = $this->input->post('id');	
	$kota = $this->input->post('kota');
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$Type = $this->input->post('Type');
		$Fasilitas = $this->input->post('Fasilitas');
		$Harga = $this->input->post('Harga');
 
		$data = array(
			'kota' => $kota,
			'nama' => $nama,
			'alamat' => $alamat,
			'Type' => $Type,
			'Fasilitas' => $Fasilitas,
			'Harga' => $Harga
	);
 
	$where = array(
		'id' => $id
	);
 
	$this->Datarmh_model->update_data($where,$data,'tb_rumah');
	redirect('index.php/DataRmh/index');
	}

	function hapus($id){
		$where = array('id' => $id);
		$this->Datarmh_model->hapus_data($where,'tb_rumah');
		redirect('index.php/DataRmh/index');
	}

	public function tabel_keberangkatan_report()
    {
        // die(phpversion());
        // $mpdf = new \Mpdf\Mpdf();
        $kota = $this->input->post('kota');
        // die(var_dump($tujuan));
        $Type = $this->input->post('Type');
        $data['data_kota'] = $this->Datarmh_model->getlaporan($kota,$Type);
        $this->load->view('Admin/tabel_keberangkatan_report',$data); 
        // $mpdf->WriteHTML($html);
        // $mpdf->Output();
    }
    public function cetak_report_kota()
    {
        $data['data_kota'] = $this->Datarmh_model->get_kota();    
        $data['data_type'] = $this->Datarmh_model->get_type();
		$this->load->view('Administrator/DataRumah/Report',$data); 
    }
}