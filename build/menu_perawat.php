<?php
    session_start();
    if (!isset($_SESSION['username'])){
        header("Location: login.php");
    }
    error_reporting(0);
    $jenis_poli = $_GET['jenis_poli'];
?>
<header class="main-header">

  <!-- Logo -->
  <a href="index2.html" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><b>Un</b>ila</span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><b>UNILA</b></span>
  </a>

  <!-- Header Navbar: style can be found in header.less -->
  <nav class="navbar navbar-static-top">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="push-menu">
      <span class="sr-only">Toggle navigation</span>
    </a>
    <!-- Navbar Right Menu -->
    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <!-- Messages: style can be found in dropdown.less-->

        <li class="dropdown user user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
            <span class="hidden-xs">Perawat</span>
          </a>
          <ul class="dropdown-menu">
            <!-- User image -->
            <li class="user-header">
              <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

              <p>
                Sarifah Mudaim - Mahasiswa
                <small>05 August 1998</small>
              </p>
            </li>
            <!-- Menu Body -->
            <li class="user-body">
              <div class="row">
                <div class="col-xs-4 text-center">
                  <a href="#">Followers</a>
                </div>
                <div class="col-xs-4 text-center">
                  <a href="#">Sales</a>
                </div>
                <div class="col-xs-4 text-center">
                  <a href="#">Friends</a>
                </div>
              </div>
              <!-- /.row -->
            </li>
            <!-- Menu Footer-->
            <li class="user-footer">
              <div class="pull-left">
                <a href="#" class="btn btn-default btn-flat">Profile</a>
              </div>
              <div class="pull-right">
                <a href="#" class="btn btn-default btn-flat">Sign out</a>
              </div>
            </li>
          </ul>
        </li>
        <!-- Control Sidebar Toggle Button -->
      </ul>
    </div>

  </nav>
</header>
<body class="hold-transition skin-blue sidebar-mini">
<div >


  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Perawat <?php echo "$jenis_poli"; ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                  <i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview menu-open">
          <a href="index_perawat.php?jenis_poli='<?php $jenis_poli ?>'">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa  pull-right"></i>
            </span>
          </a>
        </li>
        <li>
          <a href="antrian_perawat.php?jenis_poli=<?php echo "$jenis_poli"; ?>">
            <i class="fa fa fa-book text-orange"></i>
            <span>Antrian Pasien</span>
            <span class="pull-right-container">
              <?php
                $jumlah = 0;
                $select_pasien = "SELECT * FROM `pasien` WHERE level = '2'";
                $query_pasien = mysqli_query ($conn, $select_pasien);
                while ($data_pasien = mysqli_fetch_array($query_pasien)) {
                  $no_rekam_medis = $data_pasien['no_rekam_medis'];
                  $select_diagnosa = "SELECT * FROM `diagnosa` WHERE no_rekam_medis='$no_rekam_medis' &&
                  jenis_poli = '$jenis_poli' && tanggal_periksa = CURRENT_DATE";
                  $query_diagnosa = mysqli_query ( $conn, $select_diagnosa);
                  while ($data_diagnosa = mysqli_fetch_array($query_diagnosa)) {
                    $jumlah = $jumlah + 1;
                  }
                }
              ?>
              <small class="label pull-right bg-green"><?php echo "$jumlah";?></small>
            </span>
          </a>
        </li>
        <li>
          <a href="logout.php">
            <i class="fa fa text-orange"></i>
            <span>Log out</span>
            <span class="pull-right-container">
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
