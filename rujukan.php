<?php
include "php/koneksi.php";
session_start();
if (!isset($_SESSION['username'])){
header ("location:login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Laboratorium</title>
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
  <link href="dist/css/style.css" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
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
    <a href="index.php" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Laboratorium</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Admin</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
          <li class="nav-item">
            <a href="index.php" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Home
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Registrasi
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="rawat_jalan.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Rawat Jalan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="rawat_inap.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Rawat Inap</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="rujukan.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Rujukan</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="input_hasil.php" class="nav-link">
              <i class="nav-icon fas fa-notes-medical"></i>
              <p>
                Input Hasil
              </p>
            </a>
          </li>
          
          <li class="nav-header">Data</li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-procedures"></i>
              <p>
                Data Pasien
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="data_pasien.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Semua Pasien</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pasien_rajal.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pasien Rawat Jalan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pasien_ranap.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pasien Rawat Inap</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pasien_rujukan.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pasien Rujukan</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="data_dokter.php" class="nav-link">
              <i class="nav-icon fas fa-user-md"></i>
              <p>
                Data Dokter
              </p>
            </a>
          </li>
           <?php if (!isset($_SESSION['username'])){ ?>
          <li class="nav-item">
            <a href="login.php" class="nav-link">
              <i class="nav-icon fas fa-sign-in-alt"></i>
              <p>
                Login
              </p>
            </a>
          </li> 
      <?php } else { ?>
          <li class="nav-item">
            <a href="php/logout.php" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Logout
              </p>
            </a>
          </li> 
      <?php } ?>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
<!---------------------------------------------------------End Navbar------------------------------------>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Rujukan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
    <div id="layoutSidenav_content">
                <main>
                <form method="POST" action="php/rujukan.php">
                <div class="container-fluid mt-3">
                    <div class="row">
                    <!---------------------------------------------Group 1-------------------------------------------->
                        <div class="col-lg-6 bg-light">
                        <div class="form-group">
                           <label for="nomor_periksa">Nomor Periksa</label>                                
                                <?php

                                include "php/koneksi.php";
                                $query = "SELECT max(id_pasien) as maxKode FROM data_pasien";
                                $hasil = mysqli_query($conn,$query);
                                $data = mysqli_fetch_array($hasil);
                                $id_pasien = $data['maxKode'];
                                $noUrut = (int) substr($id_pasien, 1, 9);
                                $noUrut++;
                                $char = "L";
                                $id_pasien = $char . sprintf("%03s", $noUrut);
                                echo "<input name='id_pasien' type='text' class='form-control' aria-label='Sizing example input' value='".$id_pasien."' readonly=''>";
                                ?>

                        </div>
                        
                        <div class="form-group">
                        <label>Nama Lengkap</label>
                                <input name="nama_pasien" type="text" class="form-control" aria-label="Sizing example input" placeholder="Nama Lengkap">
                        </div>
                        
                        <label>Tempat Tanggal Lahir</label>
                        <div class="row">
                            <div class="col-md-8">
                            <div class="form-group">                                
                                        <input name="tmptlahir_pasien" type="text" class="form-control" aria-label="Sizing example input" placeholder="Tempat Lahir">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                        <input name="ttl_pasien" type="date" class="form-control" aria-label="Sizing example input" >
                            </div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                        <label>Alamat</label>
                                <textarea name="alamat_pasien" class="form-control"></textarea>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                <label>Jenis Kelamin</label>
                                    <select name="gender_pasien" class="form-control">
                                        <option></option>
                                        <option>Laki - Laki</option>
                                        <option>Perempuan</option>
                                    </select>
                                </div>
                            </div>                        
                            <div class="col-md-6">
                                <div class="form-group">
                                <label>Pembayaran</label>
                                    <div class="form-check">
                                        <input name="pembayaran_rj" type="radio" class="form-check-input" name="radio1" id="radio1" value="Tunai">
                                        <label name>Tunai</label>
                                    </div>
                                    <div class="form-check">
                                        <input name='pembayaran_rj' type="radio" class="form-check-input" name="radio1" id="radio1" value="Kontraktor">
                                        <label>Kontraktor</label>
                                    </div>  
                                </div>
                            </div>
                        </div>
                          <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Dokter Umum Pengirim</label>
                                        <input name="dokter_umum" type="text" class="form-control" aria-label="Sizing example input" id="nama_dokter" placeholder="Nama Dokter" >
                                    </div>                                
                                </div>
                                <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nama Instansi</label>
                                    <input name="nama_instansi" type="text" class="form-control" aria-label="Sizing example input" placeholder="Nama Instansi">
                                </div>
                            </div>
                        </div>                        

                        
                        </div>
                        
                    <!---------------------------------------------Group 2-------------------------------------------->
                        <div class="col-lg-6 bg-light">
                            <div class="form-group">
                               <label>Nomor Rujukan</label>
                                    <?php

                                    include "php/koneksi.php";
                                    $query = "SELECT max(no_rujukan) as maxKode FROM rujukan";
                                    $hasil = mysqli_query($conn,$query);
                                    $data = mysqli_fetch_array($hasil);
                                    $no_rujukan = $data['maxKode'];
                                    $noUrut = (int) substr($no_rujukan, 1, 9);
                                    $noUrut++;
                                    $char = "K";
                                    $no_rujukan = $char . sprintf("%03s", $noUrut);
                                    echo "<input name='no_rujukan' type='text' class='form-control' aria-label='Sizing example input' value='".$no_rujukan."' readonly=''>";
                                    ?>
                            </div>
                          
                            <div class="row">
                                <div class="col-md-6">
                                     <div class="form-group">
                                        <label>Jenis Pemeriksaan</label>                                    
                                        <select name="jenis_periksa" class="form-control">
                                        <option></option>
                                        <option>Umum</option>
                                        <option>Rawat Jalan</option>
                                        <option>Rawat Inap</option>
                                    </select>                                      
                                    </div>
                                </div>
                                <div class="col-md-6">
                                   
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                     <div class="form-group">
                                        <label>Tanggal Masuk</label>                                    
                                        <input name="tgl_masuk" type="date" class="form-control" aria-label="Sizing example input" >                                         
                                    </div>
                                </div>
                                <div class="col-md-6">
                                   <div class="form-group">
                                        <label>Tanggal Keluar</label>                                    
                                        <input name="tgl_keluar" type="date" class="form-control" aria-label="Sizing example input" >                                   
                                    </div>
                                </div>
                            </div>
                                                   
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Jam Masuk</label>
                                        <input name="jam_masuk" type="time" class="form-control" aria-label="Sizing example input" >
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Jam Keluar</label>
                                        <input name="jam_keluar" type="time" class="form-control" aria-label="Sizing example input" >
                                </div>
                            </div>
                        </div>  
                            
                        <div class="form-group">
                            <label>Detail Pemeriksaan</label>
                            <div class="container">
                                    <div class="scrollable">
                                        <table class="table table-sm text-center">
                                        <thead class="thead-dark">
                                            <tr>                             
                                                <th scope="col">Select</th>                 
                                                <th scope="col">Kode Pemeriksaan</th>
                                                <th scope="col">Nama Jenis Periksa</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                include 'php/koneksi.php';
                                                    $pemeriksaan = mysqli_query($conn, "SELECT * from pemeriksaan");
                                                                    
                                                    foreach ($pemeriksaan as $row){
                                                                       
                                                    echo "<tr>
                                                        <td><div class='form-check'><input type='checkbox' class='form-check-input' name='kode_pemeriksaan[]' value='".$row['kode_pemeriksaan']."'></div></td>
                                                                            
                                                        <td>".$row['kode_pemeriksaan']."</td>
                                                        <td>".$row['nama_pemeriksaan']."</td>
                                                        </tr>";
                                                                        
                                                    }
                                            ?>
                                          </tbody>
                                        </table>
                                    </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6"></div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <button type="Submit" class="btn btn-success" name="modalSubmit">Submit</button>
                                    <button type="reset" class="btn btn-danger">Cancel</button>
                                </div>
                            </div>
                        </div>   
                    </div>
                </div>
                </form>
                
                
                </main>                
                
            </div>
        </div>
<!-------------------------------------------------------------------END MAIN--------------------------------------------------------------------------->

<!-------------------------------------------------------------------POPUP PEMERIKSAAN-------------------------------------------------------------------->

<div class="modal fade" id="modal_dokter">
  <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-table="close">
                <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
          <div class="container">
            <form method="POST">
          <table class="table table-sm text-center" id="tableDokter">
                <thead class="thead-dark">
                    <tr>
                            <th scope="col">Kode Pemeriksaan</th>
                            <th scope="col">Nama Pemeriksaan</th>
                            <th scope="col">Action</th>
                    </tr>
                </thead>
                    <tbody>
                        <?php
                            include 'php/koneksi.php';
                                $data = mysqli_query($conn, "SELECT * from data_dokter");
                                                
                                foreach ($data as $row){
                                                   
                                echo "<tr>
                                    <td>".$row['kode_dokter']."</td>
                                    <td>".$row['nama_dokter']."</td>";
                                    ?>
                                    <td><button class="btn btn-xs btn-info" id="select"
                                    data-nama_dokter="<?=$row->nama_dokter?>">
                                    <i class="fa fa-check"></i>Select</button></td>
                                    </tr>
                                    <?php
                                                    
                                }
                        ?>
                    </tbody>
            </table>
            </form>
          </div>
          </div>
          <div class="modal-footer">
          </div>
        </div>
    </div>
</div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
