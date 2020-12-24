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
    
  <table border="1" cellpadding="7">
  <thead>
  <tr>
    <!-- <th widthi='10'>NO</th> -->
    <th>Kota</th>
    <th>Nama Perumahan</th>
    <th width='90'>Alamat</th>
    <th>Type</th>
    <th width='90'>Fasilitas</th>
    <th width='90'>Harga</th>
  </tr>
  </thead>
  <tbody>
  <?php
  if( ! empty($tb_rumah)){
    $no = 1;
    foreach($tb_rumah as $data){
        // $tanggal = date('d-m-Y', strtotime($data->tanggal));
            
        echo "<tr>";
        echo "<td>".$data->kota."</td>";
        echo "<td>".$data->nama."</td>";
        echo "<td>".$data->alamat."</td>";
        echo "<td>".$data->Type."</td>";
        echo "<td>".$data->Fasilitas."</td>";
        // echo "<td>".$data->Harga."</td>";
        echo "<td>".'Rp '. number_format($data->Harga,2,',','.')."</td>";
        echo "</tr>";
        $no++;
    }
  }
  ?>
  </tbody>
</table>
</body>
</html>