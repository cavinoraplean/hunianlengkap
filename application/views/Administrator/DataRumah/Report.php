


    <div id="content-wrapper">

<div class="container-fluid">

  <!-- Breadcrumbs-->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="#">Admin</a>
    </li>
    <li class="breadcrumb-item active">Cetak Report Table Keberangkatan</li>
  </ol>

  <!-- DataTables Example -->
  <div class="card mb-3">
    <div class="card-header">
      <i class="fas fa-table"></i>
      Cetak Report Data Table Keberangkatan</div>
    <div class="card-body">
    
    <form action="<?php echo base_url()?>keberangkatan/tabel_keberangkatan_report" method="POST">

      <div class="form-group">
        <label for="rute">Tujuan</label>
        <select class="form-control" name="input_tujuan" id="exampleInputEmail1">
          <option value="">PIlih data Tujuan</option>
          <?php
              foreach($data_keberangkatan->result() as $row){
                echo '<option value="'.$row->tujuan.'">'.$row->tujuan.'</option>"';
              }
          ?>
        </select>
      </div>
      <div class="form-group">
        <label for="rute">Tanggal Keberangkatan</label>
        <input type="date" class="form-control" id="tanggal_keberangkatan" name="input_tanggal_keberangkatan" placeholder="Tanggal Keberangkatan" >
      </div>
      
      <button type="submit" class="btn btn-primary">Cetak</button>
      <button type="reset" class="btn btn-primary">Reset</button>
    </form>
      
    </div>
    <div class="card-footer small text-muted"></div>
  </div>

  <p class="small text-center text-muted my-5">
    <em>More table examples coming soon...</em>
  </p>

</div>
<!-- /.container-fluid -->

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
      Cetak Report Data Table Keberangkatan</div>
    <div class="card-body">
    
    <form action="<?php echo base_url()?>Datarmh/tabel_keberangkatan_report" method="POST">

      <div class="form-group">
        <label for="kota">Kota</label>
        <select class="form-control" name="input_kota" id="exampleInputEmail1">
          <option value="">PIlih data Kota</option>
          <?php
              foreach($data_kota->result() as $row){
                echo '<option value="'.$row->kota.'">'.$row->kota.'</option>"';
              }
          ?>
        </select>
      </div>
      <div class="form-group">
        <label for="rute">Type</label>
        <select class="form-control" name="input_type" id="exampleInputEmail1">
          <option value="">PIlih data Type</option>
          <?php
              foreach($data_type->result() as $row){
                echo '<option value="'.$row->Type.'">'.$row->Type.'</option>"';
              }
          ?>
        </select>
      </div>
      
      <button type="submit" class="btn btn-primary">Cetak</button>
      <button type="reset" class="btn btn-primary">Reset</button>
    </form>
      
    </div>
    <div class="card-footer small text-muted"></div>
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
