<!DOCTYPE html>
<html lang="en">

<head>
	<!-- $data['judul'] =  'Data Cicilan'; -->
	<?php $this->load->view("templates/head") ?>
</head>

<body id="page-top">
<?php $this->load->view("templates/navbar") ?>

  <div id="wrapper">

    <?php $this->load->view('templates/sidebar') ?>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <?php //$this->load->view("templates/breadcrumb.php") ?>

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Report Kota</div>
	        <div class="card-body">
	          	<div class="table-responsive">
                  <form method="get" action="">
                    <label>Filter Berdasarkan</label><br>
                    <select name="filter" id="filter" class="form-control">
                        <option value="">Pilih</option>
                        <option value="1">Kota</option>
                        <option value="2">Type</option>
                    </select>
                    <br>
                    
                    <div id="form-kota" name="form-kota">
                        <label>Kota</label><br>
                        <select name="kota" class="form-control">
                        <option value="">Pilih</option>
                            <?php
                           foreach($dd_kota as $row){
                            echo "<option>".$row->kota."</option>";
                          }
                            ?>
                        </select>
                        <!-- <input type="text" name="kota" class="form-control" /> -->
                        <br>
                    </div>

                    <div id="form-type" name="form-type">
                        <label>Type</label><br>
                        <select name="Type" class="form-control">
                        <option value="">Pilih</option>
                            <?php
                           foreach($dd_type as $row){
                            echo "<option>".$row->Type."</option>";
                          }
                            ?>
                            <!-- <option value="">Pilih</option>
                            <option value="1">Type 50</option>
                            <option value="2">Type 62.5</option>
                            <option value="3">Type 67</option>
                            <option value="4">Type 87</option>
                            <option value="5">Type 38</option>
                            <option value="6">Type 48</option>
                            <option value="7">Type 54</option>
                            <option value="8">Type 65</option>
                            <option value="9">Type 82</option> -->
                        </select>
                        <!-- <input type="text" name="Type" class="form-control" /> -->
                        <br>
                    </div>
                    <button type="submit" class="btn btn-success"><font color="black">Tampilkan</font></button>
                    <a href="<?php echo base_url("index.php/ReportKota/index"); ?>">Reset Filter</a>
                    <br><br>
                </form>
                <b><center><font size="5"><?php echo $ket; ?></font></center></b><br/>
	              <button type="button" class="btn btn-warning"><a href="<?php echo $url_cetak; ?>"><font color="black">Cetak</font></a></button><br><br>
	              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
	                <thead class="bg-info">
                  <tr>
                      <th>No</th>
                      <th>Kota</th>
                      <th>Nama</th>
                      <th>Alamat</th>
                      <th>Type</th>
                      <th>Fasilitas</th>
                      <th>Harga</th>
                  </tr>
					</thead>
	        <tbody>
          <?php
          if( ! empty($tb_rumah)){
            $no = 1;
            foreach($tb_rumah as $data){
                  // $tanggal = date('d-m-Y', strtotime($data->tanggal));
                  
              echo "<tr>";
              echo "<td>".$no;
              echo "<td>".$data->kota."</td>";
              echo "<td>".$data->nama."</td>";
              echo "<td>".$data->alamat."</td>";
              echo "<td>".$data->Type."</td>";
              echo "<td>".$data->Fasilitas."</td>";
              echo "<td>".'Rp '. number_format($data->Harga,2,',','.')."</td>";
              echo "</tr>";
              $no++;
            }
          }
          ?>
          
	                </tbody>
	              </table>
	            </div>
	        </div>
          <div class="card-footer small text-muted">Updated <?php date_default_timezone_set('Asia/Jakarta'); echo Date('l, d-m-Y h:i:s a') ?></div>
        </div>

      </div>
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      <?php $this->load->view('templates/foot.php') ?>

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

<?php $this->load->view('templates/scrolltop.php') ?>
<?php $this->load->view('templates/modal.php') ?>
<?php $this->load->view('templates/js.php') ?>
<script src="<?php echo base_url('assets/jquery-ui/jquery-ui.min.js'); ?>"></script> <!-- Load file plugin js jquery-ui -->
    <script>
    $(document).ready(function(){ // Ketika halaman selesai di load
        $('#form-kota, #form-type').hide(); // Sebagai default kita sembunyikan form filter tanggal, bulan & tahunnya
        $('#filter').change(function(){ // Ketika user memilih filter
            if($(this).val() == '1'){ // Jika filter nya 1 (per tanggal)
                $('#form-type').hide(); // Sembunyikan form bulan dan tahun
                $('#form-kota').show(); // Tampilkan form tanggal
            }else{ // Jika filternya 4 (per tahun)$('#form-kota').hide(); // Sembunyikan form tanggal
                $('#form-kota').hide();
                $('#form-type').show(); // Tampilkan form bulan dan tahun
                
            }
            $('#form-tanggal input, #form-bulan select, #form-tahun select').val(''); // Clear data pada textbox tanggal, combobox bulan & tahun
        })
    })
    </script>

</body>

</html>
