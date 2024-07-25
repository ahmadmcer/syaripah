<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Admin - <?= APP_NAME; ?></title>

  <!-- Custom fonts for this template -->
  <link href="<?= BASE_URL; ?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="<?= BASE_URL; ?>/css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="<?= BASE_URL; ?>/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-danger sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= BASE_URL; ?>/admin">
        <div class="sidebar-brand-icon">
          <i class="fas fa-users-cog"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Admin</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="<?= BASE_URL; ?>/admin">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Data
      </div>

      <!-- Nav Item - Data Guru -->
      <li class="nav-item">
        <a class="nav-link" href="<?= BASE_URL; ?>/admin/data_guru">
          <i class="fas fa-fw fa-chalkboard-teacher"></i>
          <span>Data Guru</span></a>
      </li>

      <!-- Nav Item - Data Siswa -->
      <li class="nav-item">
        <a class="nav-link" href="<?= BASE_URL; ?>/admin/data_siswa">
          <i class="fas fa-fw fa-user-graduate"></i>
          <span>Data Siswa</span></a>
      </li>

      <!-- Nav Item - Data Nilai -->
      <li class="nav-item">
        <a class="nav-link" href="<?= BASE_URL; ?>/admin/data_nilai">
          <i class="fas fa-fw fa-chart-bar"></i>
          <span>Data Nilai</span></a>
      </li>

      <!-- Nav Item - Data Master Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseDataMaster"
          aria-expanded="true" aria-controls="collapseDataMaster">
          <i class="fas fa-fw fa-cog"></i>
          <span>Data Master</span>
        </a>
        <div id="collapseDataMaster" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="<?= BASE_URL; ?>/admin/jadwal_pelajaran">Jadwal Pelajaran</a>
            <a class="collapse-item" href="<?= BASE_URL; ?>/admin/jurusan">Jurusan</a>
            <a class="collapse-item" href="<?= BASE_URL; ?>/admin/data_kelas">Data Kelas</a>
            <a class="collapse-item" href="<?= BASE_URL; ?>/admin/mata_pelajaran">Mata Pelajaran</a>
            <a class="collapse-item" href="<?= BASE_URL; ?>/admin/tahun_ajaran">Tahun Ajaran</a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Pengaturan
      </div>

      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="<?= BASE_URL; ?>/admin/website">
          <i class="fas fa-fw fa-globe"></i>
          <span>Website</span></a>
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="<?= BASE_URL; ?>/admin/admin">
          <i class="fas fa-fw fa-user-cog"></i>
          <span>Akun Admin</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><i class="fas fa-user"></i>
                  <?php echo $_SESSION['nama']; ?></span>
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->