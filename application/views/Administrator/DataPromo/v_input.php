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
            Input Data Promo</div>
          <div class="card-body">
            <form action="<?php echo base_url(). 'index.php/DataPromo/tambah_aksi'; ?>" method="post">
            	<center>
              <table>
                <tr>
                    <td>Tanggal</td>
                    <td><input class="form-control" type="Date" name="tanggal"></td>
                </tr>
                <tr>
                  <td><br>Kota</td>
                  <td><br>
                    <select class="form-control" name="kota">
                    <option>--Pilih Kota--</option> 
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
                    <option>--Pilih Perumahan--</option> 
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
                    <option>--Pilih Alamat Perumahan--</option> 
                      <?php 
                      foreach($dd_alamat as $row){
                        echo "<option>".$row->alamat."</option>";
                      }
                      echo" </select> " ?>
                  </td>
                </tr>
                <tr>
                  <td><br>Type</td>
                  <td><br><input class="form-control" type="text" name="type" required></td>
                </tr>
                <tr>
                  <td><br>Fasilitas</td>
                  <!-- <td><br><input class="form-control" type="text" name="fasilitas" required=""></td> -->
                  <td><br><textarea class="form-control" type="text" name="fasilitas" required></textarea></td>
                </tr>
                <tr>
                  <td><br>Harga</td>
                  <td><br><input class="form-control" type="text" name="harga" required></td>
                </tr>
                <tr>
                    <td><br>Promo</td>
                    <td><br><input class="form-control" type="text" name="promo" required></td>
                </tr>
                <tr>
                    <td><br>Persyaratan</td>
                    <td><br><input class="form-control" type="text" name="persyaratan" required></td>
                </tr>
    			<tr>
    				<td></td>
    				<td><br><center><button class="btn btn-success" type="submit">Tambah</button></center></td>
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
