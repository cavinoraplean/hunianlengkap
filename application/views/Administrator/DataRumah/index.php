<!DOCTYPE html>
<html lang="en">

<head>
  <?php $this->load->view("templates/head.php") ?>
</head>

<body id="page-top">
<?php $this->load->view("templates/navbar.php") ?>

  <div id="wrapper">

    <?php $this->load->view('templates/sidebar.php') ?>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <?php //$this->load->view("templates/breadcrumb.php") ?>

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Data Rumah</div>
	        <div class="card-body">

				<button type="button" class="btn btn-success"><a href="<?php echo base_url("index.php/Datarmh/tambah")?>"><font color="black">+Add Data</font></a></button><br><br>
	          	<div class="table-responsive">
	              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
	                <thead class="bg-info">
						<tr>
							<th><center>Kota</center></th>
							<th><center>Nama Perumahan</center></th>
							<th><center>Alamat</center></th>
							<th><center>Type</center></th>
							<th><center>Fasilitas</center></th>
							<th><center>Harga</center></th>
							<th><center>Action</center></th>
						</tr>
					</thead>
	                <tfoot class="bg-info">
	                  	<tr>
							<th><center>Nama Perumahan</center></th>
							<th><center>Kota</center></th>
							<th><center>Alamat</center></th>
							<th><center>Type</center></th>
							<th><center>Fasilitas</center></th>
							<th><center>Harga</center></th>
							<th><center>Action</center></th>
						</tr>
	                </tfoot>
	                <tbody>
	                  <?php foreach ($tb_rumah as $a) { ?>
					<tr>
						<td width="100"><center><?php echo $a->kota ?></center></td>
						<td><center><?php echo $a->nama ?></center></td>
						<td><?php echo $a->alamat ?></td>
						<td width="55"><?php echo $a->Type ?></td>	
						<td><?php echo $a->Fasilitas ?></td>	
						<td width="150"><?php echo 'Rp '. number_format($a->Harga,2,',','.') ?></td>	
						<td>
							<a href="<?php echo site_url('index.php/Datarmh/edit/'. $a->id)?>"class="btn btn-small"><i class="fas fa-edit"></i>Edit</a>
							<a onclick="return confirm('Apakah data akan dihapus?');" href="<?php echo site_url('index.php/Datarmh/hapus/'. $a->id)?>"
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
