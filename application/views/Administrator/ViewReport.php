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
            Report Cicilan</div>
	        <div class="card-body">
	          	<div class="table-responsive">
                  <form method="get" action="">
                    <label>Filter Berdasarkan</label><br>
                    <select name="filter" id="filter" class="form-control">
                        <option value="">Pilih</option>
                        <option value="1">Per Tanggal</option>
                        <option value="2">Per Bulan</option>
                        <option value="3">Per Tahun</option>
                    </select>
                    <br>
                    <div id="form-tanggal" name="form-tanggal">
                        <label>Tanggal</label><br>
                        <input type="date" name="tanggal" class="form-control" autocomplete="off" />
                        <br>
                    </div>
                    <div id="form-bulan" name="form-bulan">
                        <label>Bulan</label><br>
                        <select name="bulan" class="form-control">
                            <option value="">Pilih</option>
                            <option value="1">Januari</option>
                            <option value="2">Februari</option>
                            <option value="3">Maret</option>
                            <option value="4">April</option>
                            <option value="5">Mei</option>
                            <option value="6">Juni</option>
                            <option value="7">Juli</option>
                            <option value="8">Agustus</option>
                            <option value="9">September</option>
                            <option value="10">Oktober</option>
                            <option value="11">November</option>
                            <option value="12">Desember</option>
                        </select>
                        <br>
                    </div>
                    <div id="form-tahun" name="form-tahun">
                        <label>Tahun</label><br>
                        <select name="tahun" class="form-control">
                            <option value="">Pilih</option>
                            <?php
                            foreach($option_tahun as $data){ // Ambil data tahun dari model yang dikirim dari controller
                                echo '<option value="'.$data->tahun.'">'.$data->tahun.'</option>';
                            }
                            ?>
                        </select>
                        <br>
                    </div>
                    <button type="submit" class="btn bg-success">Tampilkan</button>
                    <a href="<?php echo base_url("index.php/Report/index"); ?>">Reset Filter</a>
                    <br><br>
                </form>
                <b><center><font size="5"><?php echo $ket; ?></font></center></b><br />
	              <button type="button" class="btn btn-warning"><a href="<?php echo $url_cetak; ?>"><font color="black">Cetak</font></a></button><br><br>
	              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
	                <thead class="bg-info">
                    <tr>
                        <th width='10'>No</th>
                        <th width='90'>Tanggal</th>
                        <th>Kota</th>
                        <th>Nama Perumahan</th>
                        <th>Alamat</th>
                        <th>Nama</th>
                        <th>Type</th>
                        <th>DP</th>
                        <th>Cicilan Terbayar</th>
                        <th>Sisa Cicilan</th>
                    </tr>
					</thead>
	        <tbody>
            <?php
                if( ! empty($tb_cicil)){
                $no = 1;
                foreach($tb_cicil as $data){
                    $tanggal = date('d-m-Y', strtotime($data->tanggal));
                        
                    echo "<tr>";
                    echo "<td>".$no."</td>";
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
	                </tbody>
	              </table>
	            </div>
	        </div>
          <!-- <div class="card-footer small text-muted">Updated <?php date_default_timezone_set('Asia/Jakarta'); echo Date('l, d-m-Y h:i:s a') ?></div> -->
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
        $('.input-tanggal').datepicker({
            dateFormat: 'yy-mm-dd' // Set format tanggalnya jadi yyyy-mm-dd
        });
        $('#form-tanggal, #form-bulan, #form-tahun').hide(); // Sebagai default kita sembunyikan form filter tanggal, bulan & tahunnya
        $('#filter').change(function(){ // Ketika user memilih filter
            if($(this).val() == '1'){ // Jika filter nya 1 (per tanggal)
                $('#form-bulan, #form-tahun').hide(); // Sembunyikan form bulan dan tahun
                $('#form-tanggal').show(); // Tampilkan form tanggal
            }else if($(this).val() == '2'){ // Jika filter nya 2 (per bulan)
                $('#form-tanggal').hide(); // Sembunyikan form tanggal
                $('#form-bulan, #form-tahun').show(); // Tampilkan form bulan dan tahun
            }else{ // Jika filternya 3 (per tahun)
                $('#form-tanggal, #form-bulan').hide(); // Sembunyikan form tanggal dan bulan
                $('#form-tahun').show(); // Tampilkan form tahun
            }
            $('#form-tanggal input, #form-bulan select, #form-tahun select').val(''); // Clear data pada textbox tanggal, combobox bulan & tahun
        })
    })
    </script>


</body>
