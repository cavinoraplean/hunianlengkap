<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Report extends CI_Controller {
  
  public function __construct(){
    parent::__construct();
    
    $this->load->model('Report_model');
    if($this->session->userdata('status') != "login"){
        redirect(base_url("index.php/login"));
    }
  }
  
  public function index(){
      $data['judul']='Report Cicilan';
        if(isset($_GET['filter']) && ! empty($_GET['filter'])){ // Cek apakah user telah memilih filter dan klik tombol tampilkan
            $filter = $_GET['filter']; // Ambil data filder yang dipilih user
            if($filter == '1'){ // Jika filter nya 1 (per tanggal)
                $tanggal =$_GET['tanggal'];
                
                $ket = 'Data Transaksi Tanggal '.date('d-m-y', strtotime($tanggal));
                $url_cetak = 'Report/cetak?filter=1&tanggal='.$tanggal;
                $transaksi = $this->Report_model->view_by_date($tanggal); // Panggil fungsi view_by_date yang ada di TransaksiModel
            }else if($filter == '2'){ // Jika filter nya 2 (per bulan)
                $bulan = $_GET['bulan'];
                $tahun = $_GET['tahun'];
                $nama_bulan = array('', 'Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');
                
                $ket = 'Data Transaksi Bulan '.$nama_bulan[$bulan].' '.$tahun;
                $url_cetak = 'Report/cetak?filter=2&bulan='.$bulan.'&tahun='.$tahun;
                $transaksi = $this->Report_model->view_by_month($bulan, $tahun); // Panggil fungsi view_by_month yang ada di TransaksiModel
            }else if($filter == '3'){ // Jika filter nya 2 (per bulan)
                $tahun = $_GET['tahun'];
                
                $ket = 'Data Transaksi Tahun '.$tahun;
                $url_cetak = 'Report/cetak?filter=3&tahun='.$tahun;
                $transaksi = $this->Report_model->view_by_year($tahun); // Panggil fungsi view_by_year yang ada di TransaksiModel
            }
            
        }else{ // Jika user tidak mengklik tombol tampilkan
            $ket = 'Semua Data Transaksi';
            $url_cetak = 'Report/cetak';
            $transaksi = $this->Report_model->view_all(); // Panggil fungsi view_all yang ada di TransaksiModel
        }
        
    $data['ket'] = $ket;
    $data['url_cetak'] = base_url('index.php/'.$url_cetak);
    $data['tb_cicil'] = $transaksi;
    $data['option_tahun'] = $this->Report_model->option_tahun();
    $this->load->view('Administrator/ViewReport', $data);
  }
  
  public function cetak(){
        if(isset($_GET['filter']) && ! empty($_GET['filter'])){ // Cek apakah user telah memilih filter dan klik tombol tampilkan
            $filter = $_GET['filter']; // Ambil data filder yang dipilih user
            if($filter == '1'){ // Jika filter nya 1 (per tanggal)
                $tanggal = $_GET['tanggal'];
                
                $ket = 'Data Transaksi Tanggal '.date('d-m-y', strtotime($tanggal));
                $transaksi = $this->Report_model->view_by_date($tanggal); // Panggil fungsi view_by_date yang ada di TransaksiModel
            }else if($filter == '2'){ // Jika filter nya 2 (per bulan)
                $bulan = $_GET['bulan'];
                $tahun = $_GET['tahun'];
                $nama_bulan = array('', 'Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');
                
                $ket = 'Data Transaksi Bulan '.$nama_bulan[$bulan].' '.$tahun;
                $transaksi = $this->Report_model->view_by_month($bulan, $tahun); // Panggil fungsi view_by_month yang ada di TransaksiModel
            }else{ // Jika filter nya 3 (per tahun)
                $tahun = $_GET['tahun'];
                
                $ket = 'Data Transaksi Tahun '.$tahun;
                $transaksi = $this->Report_model->view_by_year($tahun); // Panggil fungsi view_by_year yang ada di TransaksiModel
            }
        }else{ // Jika user tidak mengklik tombol tampilkan
            $ket = 'Semua Data Transaksi';
            $transaksi = $this->Report_model->view_all(); // Panggil fungsi view_all yang ada di TransaksiModel
        }
        
$data['ket'] = $ket;
$data['tb_cicil'] = $transaksi;
        
ob_start();
$this->load->view('Administrator/print', $data);
$html = ob_get_contents();
ob_end_clean();

require_once('./assets/html2pdf/html2pdf.class.php');
$pdf = new HTML2PDF('P','A4','en');
$pdf->WriteHTML($html);
$pdf->Output('Data Transaksi.pdf', 'D');
  }
}
