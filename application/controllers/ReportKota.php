<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class ReportKota extends CI_Controller {
  
  public function __construct(){
    parent::__construct();
    
    $this->load->model('Kota_model');
    if($this->session->userdata('status') != "login"){
        redirect(base_url("index.php/login"));
    }
  }
  
  public function index(){
        $data['judul'] =  'Report Kota';
        $data['dd_type'] = $this->Kota_model->get_type();
        $data['dd_kota'] = $this->Kota_model->get_kota();
        if(isset($_GET['filter']) && ! empty($_GET['filter'])){ // Cek apakah user telah memilih filter dan klik tombol tampilkan
            $filter = $_GET['filter']; // Ambil data filder yang dipilih user
            if($filter == '1'){ // Jika filter nya 1 (per tanggal)
                $kota = $_GET['kota'];
                
                $ket = 'Data Transaksi Kota '.$kota;
                $url_cetak = 'ReportKota/cetak?filter=1&kota='.$kota;
                $transaksi = $this->Kota_model->view_by_kota($kota); // Panggil fungsi view_by_year yang ada di TransaksiModel
            }else{ // Jika filter nya 3 (per tahun)
                $Type = $_GET['Type'];
                // $jenis = array('', 'Type 50','Type 62.5','Type 67','Type 87','Type 38','Type 48','Type 54','Type 65','Type 82');
                $ket = 'Data Transaksi '.$Type;
                $url_cetak = 'ReportKota/cetak?filter=2&Type='.$Type;
                $transaksi = $this->Kota_model->view_by_type($Type); // Panggil fungsi view_by_year yang ada di TransaksiModel
            }
        }else{ // Jika user tidak mengklik tombol tampilkan
            $ket = 'Semua Data Transaksi';
            $url_cetak = 'ReportKota/cetak';
            $transaksi = $this->Kota_model->view_all(); // Panggil fungsi view_all yang ada di TransaksiModel
        }
        
    $data['ket'] = $ket;
    $data['url_cetak'] = base_url('index.php/'.$url_cetak);
    $data['tb_rumah'] = $transaksi;
    // $data['option_tahun'] = $this->Kota_model->option_tahun();
    $this->load->view('Administrator/ViewKota', $data);
  }
  
  public function cetak(){
        if(isset($_GET['filter']) && ! empty($_GET['filter'])){ // Cek apakah user telah memilih filter dan klik tombol tampilkan
            $filter = $_GET['filter']; // Ambil data filder yang dipilih user
            if($filter == '1'){ // Jika filter nya 1 (per tanggal)
                $kota = $_GET['kota'];
                
                $ket = 'Data Transaksi Kota '.$kota;
                $transaksi = $this->Kota_model->view_by_kota($kota); // Panggil fungsi view_by_date yang ada di TransaksiModel
            }else{ // Jika filter nya 3 (per tahun)
                $Type = $_GET['Type'];
                // $jenis= array('', 'Type 50','Type 62.5','Type 67','Type 87','Type 38','Type 48','Type 54','Type 65','Type 82');
                $ket = 'Data Transaksi '.$Type;
                $transaksi = $this->Kota_model->view_by_Type($Type); // Panggil fungsi view_by_month yang ada di TransaksiModel
            }
        }else{ // Jika user tidak mengklik tombol tampilkan
            $ket = 'Semua Data Transaksi';
            $transaksi = $this->Kota_model->view_all(); // Panggil fungsi view_all yang ada di TransaksiModel
        }
        
        $data['ket'] = $ket;
        $data['tb_rumah'] = $transaksi;
        
    ob_start();
    $this->load->view('Administrator/print2', $data);
    $html = ob_get_contents();
        ob_end_clean();
        
        require_once('./assets/html2pdf/html2pdf.class.php');
    $pdf = new HTML2PDF('P','A4','en');
    $pdf->WriteHTML($html);
    $pdf->Output('Data Transaksi.pdf', 'D');
  }
}
