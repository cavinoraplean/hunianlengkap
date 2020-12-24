<!-- Sidebar -->
    <ul class="sidebar navbar-nav " style="background-color: #00A2D1;">
      <li class="nav-item <?php echo $this->uri->segment(2) == '' ? 'active': '' ?>">
        <a class="nav-link" href="<?php echo base_url('index.php/homeadm') ?>">
          <i class="fas fa-fw fa-tachometer-alt" style="color: black;"></i>
          <span><font color = 'black'>Dashboard</font></span>
        </a>
      </li>
      <!-- <li class="nav-item dropdown"> 
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>Data Rumah</span>
        </a>  -->
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <h6 class="dropdown-header">Input Data</h6>
          <a class="dropdown-item" href="<?php echo base_url('index.php/datarmh')?>">Input Data Rumah</a>
          <a class="dropdown-item" href="<?php echo base_url('index.php/dataperumahan')?>">Input Data Perumahan</a>
          <a class="dropdown-item" href="<?php echo base_url('index.php/datacicil')?>">Input Data Cicilan</a>
          <a class="dropdown-item" href="<?php echo base_url('index.php/datapromo')?>">Input Data Promo</a>
          <a class="dropdown-item" href="<?php echo base_url('index.php/datapetugas')?>">Input Data Layanan</a>
          <div class="dropdown-divider"></div>
          <!-- <h6 class="dropdown-header">Other Pages:</! -->
          <a class="dropdown-item" href="404.html">404 Page</a>
          <a class="dropdown-item" href="blank.html">Blank Page</a>
        </div>
      <!-- </li> -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('index.php/datarmh')?>">
          <i class="fas fa-fw fa-home" style="color: black;"></i>
          <span><font color = 'black'>Data Rumah</span></font></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('index.php/dataperumahan')?>">
          <i class="fas fa-fw fa-road" style="color: black;"></i>
          <span><font color = 'black'>Data Perumahan</font></span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('index.php/datacicil')?>">
          <i class="fas fa-fw fa-info-circle"style="color: black;"></i>
          <span><font color = 'black'>Data Cicilan</font></span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('index.php/datapromo')?>">
          <i class="fas fa-fw fa-percent" style="color: black;"></i>
          <span><font color = 'black'>Data Promo</font></span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('index.php/datapetugas')?>">
          <i class="fas fa-fw fa-wrench" style="color: black;"></i>
          <span><font color = 'black'>Data Layanan</font></span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('index.php/datauser')?>">
          <i class="fas fa-fw fa-users" style="color: black;"></i>
          <span><font color = 'black'>Data Pengguna</font></span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('index.php/report')?>">
          <i class="fas fa-fw fa-file" style="color: black;"></i>
          <span><font color = 'black'>Report Cicilan</font></span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('index.php/reportkota')?>">
          <i class="fas fa-fw fa-file" style="color: black;"></i>
          <span><font color = 'black'>Report Rumah</font></span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('index.php/login/logout'); ?>">
          <i class="fas fa-fw  fa fa-sign-out" style="color: black;"></i>
          <span><font color = 'black'>Logout</font></span></a>
      </li>
    </ul>