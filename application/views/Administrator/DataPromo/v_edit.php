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
            Edit Data Promo</div>
          <div class="card-body">
          	<?php foreach ($tb_promo as $u){ ?>
            <form action="<?php echo base_url(). 'index.php/DataPromo/update'; ?>" method="post">
	            <center>
		            <table>
		            <tr>
	                  <td>Tanggal</td>
	                  <td>
	                  	<input type="hidden" name="id" value="<?php echo $u->id?>">
	                  	<input class="form-control" type="Date" name="tanggal" value="<?php echo $u->tanggal?>">
	                  </td>
					</tr>
					<tr>
						<td><br>Kota</td>
						<td><br>
							<select class="form-control" name="kota">
							<option><?php echo $u->kota?></option>
							<?php 
							foreach($dd_kota as $row){
								echo "<option>".$row->kota."</option>";
							}
							echo" </select> " ?>
						</td>
					</tr>
					<tr>
						<td><br>Nama Perumahan</td>
						<td><br>
							<select class="form-control" name="nama">
								<option><?php echo $u->nama?></option>
							<?php 
							foreach($dd_nama as $row){
								echo "<option>".$row->nama."</option>";
							}
							echo" </select> " ?>
						</td>
					</tr>
					<tr>
						<td><br>Alamat</td>
						<td><br>
							<select class="form-control" name="alamat">
							<option><?php echo $u->alamat?></option>
							<?php 
							foreach($dd_alamat as $row){
								echo "<option>".$row->alamat."</option>";
							}
							echo" </select> " ?>
						</td>
					</tr>
					<!-- <tr>
						<td><br>Kota</td>
						<td><br>
							<input class="form-control" type="text" name="kota" value="<?php echo $u->kota?>">
						</td>
					</tr>
					<tr>
						<td><br>Alamat</td>
						<td>
							<br><textarea class="form-control" name="alamat"><?php echo $u->alamat?></textarea>
						</td>
					</tr> -->
	    			<tr>
	    				<td>Type</td>
	    				<td><br><input class="form-control" type="text" name="type" value="<?php echo $u->type?>"></td>
	    			</tr>
	    			<tr>
	    				<td>Fasilitas</td>
	    				<td><br><input class="form-control" type="text" name="fasilitas" value="<?php echo $u->fasilitas?>"></td>
	    				<!-- <td><br><textarea class="form-control" name="type_rumah" value="<?php echo $u->type_rumah?>"></textarea></td> -->
	    			</tr>
	    			<tr>
	    				<td><br>Harga</td>
	    				<td><br><input class="form-control" type="text" name="harga" value="<?php echo $u->harga?>"></td>
	    			</tr>
	                <tr>
	                  	<td><br>Promo</td>
	                  	<td><br><input class="form-control" type="text" name="promo" value="<?php echo $u->promo?>"></td>
                    </tr>
                    <tr>
                        <td><br>Persyaratan</td>
                        <td><br><input class="form-control" type="text" name="persyaratan" value="<?php echo $u->persyaratan?>"></td>
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
