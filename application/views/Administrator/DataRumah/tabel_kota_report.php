<?php
  // Tentukan path yang tepat ke mPDF
  $nama_dokumen='cetak-report-keberangkatan'; //Beri nama file PDF hasil.
  define('_MPDF_PATH','./assets/mpdf/'); // Tentukan folder dimana anda menyimpan folder mpdf
  include(_MPDF_PATH . "mpdf.php"); // Arahkan ke file mpdf.php didalam folder mpdf
  $mpdf=new mPDF('utf-8', 'A4', 10.5, 'arial'); // Membuat file mpdf baru
  //Memulai proses untuk menyimpan variabel php dan html
  ob_start();
?>

<style>
 	table{margin: auto;display: table;
  border-collapse: separate;
  border-spacing: 2px;
  border-color: gray;}
 	td,th{padding: 5px;text-align: center; width: 150px}
 	h1{text-align: center}
 	th{background-color: #00BFFF; padding: 10px;color: #fff}
 </style>
 
<h1>LAPORAN DATA KEBERANGKATAN</h1>
<table border="1">
	<tr>
  <th>Id Berangkat</th>
              <th>Bus</th>
              <th>Tujuan</th>
              <th>Tanggal Keberangkatan</th>
              <th>Jam Keberangkatan</th>
              <th>Rute Awal</th>
              <th>Rute Tujuan</th>
              <th>Harga</th>
	</tr>
	<?php 
              foreach ($data_keberangkatan->result() as $dt) {
                echo "
                  <tr>
                  <td>$dt->id_keberangkatan</td>
                  <td>$dt->bus</td>
                  <td>$dt->tujuan</td>
                  <td>$dt->tanggal_keberangkatan</td>
                  <td>$dt->jam_keberangkatan</td>
                  <td>$dt->rute_awal</td>
                  <td>$dt->rute_tujuan</td>
                  <td>$dt->harga</td>
                </tr>
                ";
              }
            ?>            
   
</table>



<!-- /.container-fluid -->
<?php
  //penulisan output selesai, sekarang menutup mpdf dan generate kedalam format pdf
  $html = ob_get_contents(); //Proses untuk mengambil hasil dari OB..
  ob_end_clean();
  //Disini dimulai proses convert UTF-8, kalau ingin ISO-8859-1 cukup dengan mengganti $mpdf->WriteHTML($html);
  $mpdf->WriteHTML(utf8_encode($html));
  $mpdf->Output($nama_dokumen.".pdf" ,'I');
  exit;
 
?>S