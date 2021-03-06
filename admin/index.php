<?php 
include '../config.php';
 
// mengaktifkan session
session_start();
 
// cek apakah user telah login, jika belum login maka di alihkan ke halaman login
if($_SESSION['status'] !="login"){
	header("location:../index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Admin</title>

  <link rel="stylesheet" href="../assets/public/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/public/plugins/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="../assets/public/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="../assets/public/dist/css/mdb.min.css">
  <link rel="stylesheet" href="../assets/datatables/jquery.css">
  <link rel="stylesheet" href="../assets/datatables/datatables.min.css">
  <link rel="stylesheet" href="../assets/css/dt.min.css">
  <link rel="stylesheet" href="../assets/datatables/ataTables-1.10.18/css/dataTables.bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block"><a href="logout.php" class="nav-link">Logout</a>
		</li>
    </ul>

   </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
      <img src="../assets/public/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../assets/public/img/avatar.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo "Hai, ". $_SESSION['username'];?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fa fa-dashboard"></i>
              <p>
                Daftar Menu
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php" class="nav-link active">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Peserta</p>
                </a>
              </li>
            </ul>
          </li>	
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Halaman Event</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Menu</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="card">
            <div class="card-body">
              <div class="table-responsive">
              <table class="table table-striped table-bordered table-hover" width="100%" id="peserta">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>No Telp</th>
                  <th>Asal Sekolah</th>
                  <th>Email</th>
                  <th>Alamat</th>
                  <th>Tanggal</th>
                </tr>
              </thead>
              <tfoot>
                 <tr>
                <th>No</th>
                  <th>Nama</th>
                  <th>No Telp</th>
                  <th>Asal Sekolah</th>
                  <th>Email</th>
                  <th>Alamat</th>
                  <th>Tanggal</th>  
                </tr>
              </tfoot>
              </table>
            </div>
            </div>
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- Default to the left -->
    <strong>Copyright &copy;</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="../assets/js/jquery.min.js"></script>
<script src="../assets/js/mdb.min.min.js"></script>
<script src="../assets/js/bootstrap.bundle.min.js"></script>
<script src="../assets/js/adminlte.min.js"></script>
<script type="text/javascript" src="../assets/datatables/jQuery-3.3.1/jquery-3.3.1.min.js"></script>
<script src="../assets/datatables/datatables.min.js"></script>
<script type="text/javascript" src="../assets/datatables/DataTables-1.10.18/js/dataTables.bootstrap.min.js"></script>
<script>
  $(document).ready(function() {
    $('#peserta').DataTable({
      "processing": true,
      "serverSide": true,
      "ajax": "data_peserta.php"
    });
} );
</script>
</body>
</html>