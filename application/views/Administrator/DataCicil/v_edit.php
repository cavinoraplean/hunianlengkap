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
            Edit Data Cicilan</div>
          <div class="card-body">
          	<?php foreach ($tb_cicil as $u){ ?>
            <form action="<?php echo base_url(). 'index.php/DataCicil/update'; ?>" method="post">
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
						<option><?php echo $u->kota ?></option>
						<?php 
						foreach($dd_kota as $row){
							echo "<option>".$row->kota."</option>";
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
					<tr>
						<td><br>Nama Perumahan</td>
						<td><br>
							<select class="form-control" name="nama_prmhn">
							<option><?php echo $u->nama_prmhn?></option>
							<?php 
							foreach($dd_nama as $row){
								echo "<option>".$row->nama."</option>";
							}
							echo" </select> " ?>
						</td>
					</tr>
	    			<tr>
	    				<td><br>Nama</td>
	    				<td><br><input class="form-control" type="text" name="nama" value="<?php echo $u->nama?>"></td>
	    			</tr>
	    			<tr>
	    				<td><br>Type Rumah</td>
	    				<td><br><input class="form-control" type="text" name="type_rumah" value="<?php echo $u->type_rumah?>"></td>
	    				<!-- <td><br><textarea class="form-control" name="type_rumah" value="<?php echo $u->type_rumah?>"></textarea></td> -->
					</tr>
					<tr>
						<td><br>Uang Muka</td>
						<td><br><input class="form-control" type="text" name="uang" value="<?php echo $u->uang ?>"></td>
					</tr>
	    			<tr>
	    				<td><br>Cicilan Terbayar</td>
	    				<td><br><input class="form-control" type="text" name="cicilan_terbayar" value="<?php echo $u->cicilan_terbayar?>"></td>
	    			</tr>
	                <tr>
	                  	<td><br>Sisa Cicilan</td>
	                  	<td><br><input class="form-control" type="text" name="sisa_cicilan" value="<?php echo $u->sisa_cicilan?>"></td>
	                </tr>
			    	<tr>
						<td></td>
						<td><br><center><button type="submit" class="btn btn-success" style="margin-left: 40px" name="Simpan"><font color="black">Simpan</font></a></button></center></td>
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
