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
            Edit Data User</div>
          <div class="card-body">
          	<?php foreach ($tb_user as $u){ ?>
            <form action="<?php echo base_url(). 'index.php/Datauser/update'; ?>" method="post">
	            <center>
		            <table>
		            <tr>
	                  <td>Nama</td>
	                  <td>
	                  	<input type="hidden" name="id" value="<?php echo $u->id?>">
	                  	<input class="form-control" type="text" name="nama" value="<?php echo $u->nama?>">
	                  </td>
	                </tr>
	    			<tr>
	    				<td><br>Status</td>
	    				<td><br><input class="form-control" type="text" name="status" value="<?php echo $u->status?>"></td>
	    			</tr>
	    			<tr>
	    				<td><br>Nomor Telepon</td>
	    				<td><br><input class="form-control" type="text" name="nomor_tlp" value="<?php echo $u->nomor_tlp?>"></td>
	    				<!-- <td><br><textarea class="form-control" name="type_rumah" value="<?php echo $u->type_rumah?>"></textarea></td> -->
	    			</tr>
	    			<tr>
	    				<td><br>Username</td>
	    				<td><br><input class="form-control" type="text" name="username" value="<?php echo $u->username?>"></td>
	    			</tr>
	                <tr>
	                  	<td><br>Password</td>
	                  	<td><br><input class="form-control" type="text" name="password" value="<?php echo $u->password?>"></td>
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
