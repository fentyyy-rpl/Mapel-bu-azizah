<?php
// Mendapatkan URL/path dasar otomatis
$base_url = "http://" . $_SERVER['HTTP_HOST'] . "/crud-php2/";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CRUD PHP FENTY | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= $base_url; ?>plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="<?= $base_url; ?>plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?= $base_url; ?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?= $base_url; ?>plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= $base_url; ?>dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?= $base_url; ?>plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?= $base_url; ?>plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="<?= $base_url; ?>plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?= $base_url; ?>index.php" class="nav-link">Home</a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= $base_url; ?>index.php" class="brand-link">
      <img src="<?= $base_url; ?>dist/img/AdminLTELogo.png" alt="Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-bold" style="font-size: 13px;">CRUD PHP FENTY</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?= $base_url; ?>dist/img/fenty.jpeg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Fenty Himatul a.e</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-header">Daftar Menu</li>

          <?php
          // Array menu lengkap
          $menus = [
              [
                  'nama' => 'Dashboard',
                  'icon' => 'fas fa-tachometer-alt',
                  'link' => $base_url . 'index.php'
              ],
              [
                  'nama' => 'Data Barang',
                  'icon' => 'fas fa-boxes',
                  'link' => $base_url . 'barang.php'
              ],
              [
                  'nama' => 'Data Mahasiswa',
                  'icon' => 'fas fa-users',
                  'link' => $base_url . 'siswa.php'
              ],
              [
                  'nama' => 'Data Pegawai (Realtime)',
                  'icon' => 'fas fa-user-friends',
                  'link' => $base_url . 'pegawai.php'
              ],
              [
                  'nama' => 'Data Akun',
                  'icon' => 'fas fa-user-cog',
                  'link' => $base_url . 'akun.php'
              ],
              [
                  'nama' => 'Keluar',
                  'icon' => 'fas fa-sign-out-alt',
                  'link' => $base_url . 'logout.php'
              ]
          ];

          // Loop PHP untuk render menu
          foreach ($menus as $menu) :
          ?>
            <li class="nav-item">
              <a href="<?= $menu['link']; ?>" class="nav-link">
                <i class="nav-icon <?= $menu['icon']; ?>"></i>
                <p><?= $menu['nama']; ?></p>
              </a>
            </li>
          <?php endforeach; ?>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>