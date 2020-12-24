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
            Data Cicilan</div>
	        <div class="card-body">
	          	<div class="table-responsive">
	            <button type="button" class="btn btn-success"><a href="<?php echo base_url("index.php/Datacicil/tambah")?>"><font color="black">+Add Data</font></a></button><br><br>
	              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
	                <thead class="bg-info">
						<tr>
							<th><center>Tanggal</center></th>
							<th><center>Kota</center></th>
							<th><center>Nama Perumahan</center></th>
							<th><center>Alamat</center></th>
							<th><center>Nama</center></th>
							<th><center>Type Rumah</center></th>
							<th><center>Uang Muka</center></th>
							<th><center>Cicilan Terbayar</center></th>
							<th><center>Sisa Cicilan</center></th>
							<th><center>Action</center></th>
						</tr>
					</thead>
	                <tfoot class="bg-info">
	                  	<tr>
							<th><center>Tanggal</center></th>
							<th><center>Kota</center></th>
							<th><center>Nama Perumahan</center></th>
							<th><center>Alamat</center></th>
							<th><center>Nama</center></th>
							<th><center>Type Rumah</center></th>
							<th><center>Uang Muka</center></th>
							<th><center>Cicilan Terbayar</center></th>
							<th><center>Sisa Cicilan</center></th>
							<th><center>Action</center></th>
						</tr>
	                </tfoot>
	                <tbody>
	                  <?php foreach ($tb_cicil as $a) { ?>
					<tr>
						<td><center><?php echo $a->tanggal ?></td></center>	
						<td width="100"><center><?php echo $a->kota ?></center></td>
						<td><center><?php echo $a->nama_prmhn ?></center></td>
						<td width="100"><center><?php echo $a->alamat ?></center></td>
						<td><center><?php echo $a->nama ?></td></center>
						<td><center><?php echo $a->type_rumah ?></td></center>
						<td><center><?php echo 'Rp '. number_format($a->uang,2,',','.') ?></center></td>
						<td><center><?php echo 'Rp '. number_format($a->cicilan_terbayar,2,',','.') ?></center></td>
						<td><center><?php echo 'Rp '. number_format($a->sisa_cicilan,2,',','.') ?></center></td>
						<td>
							<a href="<?php echo site_url('index.php/Datacicil/edit/'. $a->id)?>"class="btn btn-small"><i class="fas fa-edit"></i>Edit</a>
							<a onclick="return confirm('Apakah data akan dihapus?');" href="<?php echo site_url('index.php/Datacicil/hapus/'. $a->id)?>"
								class="btn btn-small text-danger"><i class="fas fa-trash">Hapus</i></a>
						</td>
					</tr>	
				<?php } ?>
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

</body>

</html>
