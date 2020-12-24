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

      <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Hunian Lengkap</a>
          </li>
          <li class="breadcrumb-item active">Home</li>
        </ol>

        <br>  
        <br><br><br>  
        <center><h2>Selamat datang <?php echo $this->session->userdata("nama"); ?></h2></center>
        <center><h2>Silahkan Input Data Atau Update Data</h2></center>
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
