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
        <?php //$this->load->view("admin/_partials/breadcrumb.php") ?>

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Input Data Perumahan</div>
          <div class="card-body">
            <form action="<?php echo base_url(). 'index.php/DataPerumahan/tambah_aksi'; ?>" method="post">
            	<center>
              <table>
                <tr>
                  <td>Kota</td>
                  <td><input class="form-control" type="text" name="kota"></td>
                </tr>
    						<tr>
    							<td><br>Nama</td>
    							<td><br><input class="form-control" type="text" name="nama" required></td>
                </tr>
                <tr>
                  <td><br>Alamat</td>
    							<td><br><textarea class="form-control" name="alamat" required></textarea></<td>
    						</tr>
    						<tr>
    							<td><br>Type Rumah</td>
    							<td><br><input class="form-control" type="text" name="type" required=""></td>
    							<!-- <td><br><textarea class="form-control" name="type_rumah" required></textarea></td> -->
    						</tr>
    						<tr>
    							<td><br>URL</td>
    							<td><br><input class="form-control" type="text" name="url" required></td>
    						</tr>
    						<tr>
    							<td></td>
    							<td><br><center><button class="btn btn-success" type="submit"><font color='black'>Tambah</font></button></center></td>
    						</tr>
    					</table>	
            	</center>
			</form>
            </div>
          </div> <!-- <div class="card-footer small text-muted">Updated <?php echo Date('l, d-m-Y h:i a') ?></div> -->
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
