<html>
<head>
  <title>Cetak PDF</title>
  <style>
    table {
      border-collapse:collapse;
      table-layout:fixed;width: 350px;
    }
    table td {
      word-wrap:break-word;
      width: 20%;
    }
  </style>
</head>
<body>
  <b><?php echo $ket; ?></b><br /><br />
    
  <table border="1" cellpadding="8">
  <tr>
    <!-- <th widthi='10'>NO</th> -->
    <th>Tanggal</th>
    <th>Kota</th>
    <th>Nama Perumahan</th>
    <th width='90'>Alamat</th>
    <th>Nama</th>
    <th>Type</th>
    <th width='100'>DP</th>
    <th width='100'>Cicilan Terbayar</th>
    <th width='90'>Sisa Cicilan</th>
  </tr>
  <?php
  if( ! empty($tb_cicil)){
    $no = 1;
    foreach($tb_cicil as $data){
        $tanggal = date('d-m-Y', strtotime($data->tanggal));
            
      echo "<tr>";
      // echo "<td>".$no."</td>";
      echo "<td>".$tanggal."</td>";
      echo "<td>".$data->kota."</td>";
      echo "<td>".$data->nama_prmhn."</td>";
      echo "<td>".$data->alamat."</td>";
      echo "<td>".$data->nama."</td>";
      echo "<td>".$data->type_rumah."</td>";
      echo "<td>".'Rp '. number_format($data->uang,2,',','.')."</td>";
      echo "<td>".'Rp '. number_format($data->cicilan_terbayar,2,',','.')."</td>";
      echo "<td>".'Rp '. number_format($data->sisa_cicilan,2,',','.')."</td>";
      echo "</tr>";
      $no++;
    }
  }
  ?>
</table>
</body>
</html>