<body>
<?php if ($this->session->userdata('level')=='operator'){?>
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">SMA INSHAFUDDIN BANDA ACEH </a>
     
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="<?php echo base_url()?>index.php/login/logout">Sign out</a>
        </li>
      </ul>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url()?>index.php/reports">
                  <!-- <span data-feather="bar-chart-2"></span> -->
                  Data Siswa
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url()?>index.php/reports/soal">
                  <!-- <span data-feather="bar-chart-2"></span> -->
                  Daftar Soal
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url()?>index.php/reports/peserta">
                  <!-- <span data-feather="bar-chart-2"></span> -->
                  Daftar Nilai
                </a>
              </li>
             
             
            </ul>
          </div>
        </nav>
<?php } ?>


<?php if ($this->session->userdata('level')=='calonsiswa'){?>
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">SMA INSHAFUDDIN BANDA ACEH </a>
      <!-- <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search"> -->
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
        <a class="nav-link" href="<?php echo base_url()?>index.php/login/logout">Sign out</a>
        </li>
      </ul>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="<?php echo base_url()?>index.php/dashboard">
                  <span data-feather="home"></span>
                  Dashboard <span class="sr-only">(current)</span>
                </a>
                <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url()?>index.php/pendaftaran1">
                  <span data-feather="file"></span>
                  Pendaftaran
                </a>
                <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url()?>index.php/nilai">
                  <span data-feather="shopping-cart"></span>
                  Nilai UN
                </a>
              </li>
            </ul>
          </div>
        </nav>
<?php } ?>
