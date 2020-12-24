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
            Edit Data Perumahan</div>
          <div class="card-body">
          	<?php foreach ($tb_perumahan as $u){ ?>
            <form action="<?php echo base_url(). 'index.php/DataPerumahan/update'; ?>" method="post">
	            <center>
		            <table>
		            <tr>
	                  <td>Kota</td>
	                  <td>
	                  	<input type="hidden" name="id" value="<?php echo $u->id?>">
	                  	<input class="form-control" type="text" name="kota" value="<?php echo $u->kota?>">
	                  </td>
	                </tr>
	    			<tr>
	    				<td>Nama</td>
	    				<td><br><input class="form-control" type="text" name="nama" value="<?php echo $u->nama?>"></td>
					</tr>
					<tr>
	    				<td>Alamat</td>
	    				<td><br><textarea class="form-control" name="alamat"><?php echo $u->alamat?></textarea></td>
	    			</tr>
	    			<tr>
	    				<td>Type Rumah</td>
	    				<!-- <td><br><input class="form-control" type="text" name="type" value="<?php echo $u->type?>"></td> -->
	    				<td><br><textarea class="form-control" name="type"><?php echo $u->type?></textarea></td>
	    			</tr>
	    			<tr>
	    				<td><br>URL</td>
	    				<td><br><input class="form-control" type="text" name="url" value="<?php echo $u->url?>"></td>
	    			</tr>
			    	<tr>
						<td></td>
						<td><br><center><button type="submit" class="btn btn-success" name="Simpan"><font color="black">Simpan</font></a></button></center></td>
					</tr>
		    		</table>	
	            </center>
			</form>
			<?php } ?>
            </div>
          </div>
          <!-- <div class="card-footer small text-muted">Updated <?php echo Date('l, d-m-Y h:i a') ?></div> -->
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
