

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SUPERINDO</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">


    <!-- SEARCH FORM -->
    <form class="form-inline ml-3" method="post" action="">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search" name="keyword" autocomplete="off">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit" name="cari">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <!-- <a class="brand-link">
      <img src="dist/img/inkay1.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">.</span>
    </a> -->

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/avatar5.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a class="d-block"><?= $_SESSION['username'] ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-header">SUPERINDO</li>
          <li class="nav-item">
            <a href="index.php" class="nav-link">
              <i class="fas fa-th"></i>&nbsp
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <?php if ($_SESSION['level'] == 'admin'): ?>            
          <li class="nav-item">
            <a href="transaksi.php" class="nav-link">
              <i class="fas fa-tags"></i>&nbsp
              <p>
                Transaksi
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="faktur.php" class="nav-link">
              <i class="fas fa-shopping-cart"></i>&nbsp
              <p>
                Tambah Stok
              </p>
            </a>
          </li>
          <?php endif ?>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="fas fa-folder"></i>&nbsp
              <p>
                Data Master
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="barang.php" class="nav-link">
                  <i class="fas fa-gifts nav-icon"></i>
                  <p>barang</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="suplier.php" class="nav-link">
                  <i class="far fa-address-book nav-icon"></i>
                  <p>suplier</p>
                </a>
              </li>
            </ul>
          </li>
          <?php if ($_SESSION['level'] == 'admin'): ?>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="fas fa-book"></i>&nbsp
              <p>
                Laporan
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="transaksi_laporan.php" class="nav-link">
                  <i class="fas fa-tag nav-icon"></i>
                  <p>transaksi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="faktur_laporan.php" class="nav-link">
                  <i class="fas fa-cart-arrow-down nav-icon"></i>
                  <p>faktur</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="user.php" class="nav-link">
              <i class="fas fa-user"></i>&nbsp
              <p>
                User Manajemen
              </p>
            </a>
          </li>            
          <?php endif ?>
          <li class="nav-item">
            <a href="about.php" class="nav-link">
              <i class="fas fa-address-card"></i>&nbsp
              <p>
                About
              </p>
            </a>
          </li> 
          <li class="nav-item">
            <a href="logout.php" class="nav-link">
              <p>
                <button class="btn btn-outline-danger">
                 LOGOUT
                <i class="fas fa-sign-out-alt"></i>&nbsp
                </button>
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>