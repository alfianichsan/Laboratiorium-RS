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
            <h1 class="m-0 text-dark">Rawat Inap</h1>
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
                <form method="POST" action="php/proses_hasil.php" enctype="multipart/form-data">
                <div class="container-fluid mt-3">
                  <div class="row">
                    <!---------------------------------------------Group 1-------------------------------------------->
                      <div class="col-lg-6 bg-light">
                        <div class="form-group">
                           <label for="nomor_periksa">Nomor Billing</label>                                
                                <?php
                                $no_registrasi = $_POST['no_registrasi'];
                                echo "<input name='no_registrasi' type='text' class='form-control' aria-label='Sizing example input' value='".$no_registrasi."' readonly=''>";
                                ?>

                        </div>
                        
                        <div class="form-group">
                        <label>Nama Lengkap</label>
                                 <?php
                                $nama_pasien = $_POST['nama_pasien'];
                                echo "<input name='nama_pasien' type='text' class='form-control' aria-label='Sizing example input' value='".$nama_pasien."' readonly=''>";
                                ?>
                        </div>
                        
                        <label>Tanggal Masuk</label>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                         <?php
                                          $tgl_masuk = $_POST['tgl_masuk'];
                                          echo "<input name='tgl_masuk' type='date' class='form-control' aria-label='Sizing example input' value='".$tgl_masuk."' readonly=''>";
                                          ?>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                          <div class="scrollable">
                                      <table class="table table-sm text-center">
                                        <thead class="thead-dark">
                                          <tr>                                             
                                                <th scope="col">Nama Pemeriksaan</th>
                                                <th scope="col">Hasil Pemeriksaan</th>
                                                <th scope="col">Nilai Normal</th>                 
                                                <th scope="col">Satuan</th>
                                                <th scope="col">Harga Periksa</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                include 'php/koneksi.php';
                                                  $id_pasien = $_POST['id_pasien'];
                                                    $query=mysqli_query($conn, "SELECT kode_pemeriksaan FROM rawat_inap WHERE id_pasien = '$id_pasien'");
                                                         if(mysqli_num_rows($query) == 0){
                                                            
                                                            }else{      
                                                        $data = mysqli_fetch_array($query);

                                                       $tags = $data['kode_pemeriksaan'];

                                                        $tag = explode(",", $tags);
                                                        foreach($tag as $t):
                                                            $query2=mysqli_query($conn, "SELECT * FROM pemeriksaan WHERE kode_pemeriksaan = '$t'");
                                                            if(mysqli_num_rows($query)) {?>
                                                            <?php while ($row2=mysqli_fetch_array($query2)) {?>
                                                            <tr>
                                                              <?php echo "<input name='kode_pemeriksaan[]' type='hidden' class='form-control' aria-label='Sizing example input' value='".$t."'>";?>
                                                              <td><?php echo $row2 ["nama_pemeriksaan"] ?></td>  
                                                              <td><?php echo "<input name='hasil_pemeriksaan[]' type='text' class='form-control' aria-label='Sizing example input'>" ?></td>  
                                                              <td><?php echo $row2 ["nilai_normal"] ?></td> 
                                                              <td><?php echo $row2 ["satuan"] ?></td> 
                                                              <td>Rp. <?php echo $row2 ["harga"] ?></td>  
                                                            </tr>
                                                            <?php }
                                                        
                                                        }
                                                        endforeach;
                                                      }
                                            ?>
                                          </tbody>
                                        </table>
                                    </div>
                        </div>
                        
                        <div class="row">
                          <div class="col-md-6">
                                
                            </div>                        
                            <div class="col-md-6">
                              
                            </div>
                        </div>
                        
                        </div>
                        
                  <!---------------------------------------------Group 2-------------------------------------------->
                        <div class="col-lg-6 bg-light">
                            <div class="form-group">
                               <label>Nomor Periksa/ID Pasien</label>
                                     <?php
                                      $id_pasien = $_POST['id_pasien'];
                                      echo "<input name='id_pasien' type='text' class='form-control' aria-label='Sizing example input' value='".$id_pasien."' readonly=''>";
                                      ?>
                            </div>
                            
                            <div class="row">
                              <div class="col-md-12">
                                <label>Invoice</label>
                                    <div class="form-group">
                                        <?php

                                          include "php/koneksi.php";
                                          $query = "SELECT max(invoice) as maxKode FROM pembayaran";
                                          $hasil = mysqli_query($conn,$query);
                                          $data = mysqli_fetch_array($hasil);
                                          $invoice = $data['maxKode'];
                                          $date = date("mm-dd");
                                          $exdate = explode('-', $date);
                                          $noUrut = (int) substr($invoice, 8, 10);
                                          $noUrut++;
                                          $char = "IV";
                                          $invoice = $char . $exdate[0] . sprintf("%03s", $noUrut);
                                          echo "<input name='invoice' type='text' class='form-control' aria-label='Sizing example input' value='".$invoice."' readonly=''>";
                                          ?>
                                    </div>                                
                                </div>
                            </div>

                            <div class="row">
                              <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Keterangan</label>
                                            <textarea name="keterangan" class="form-control"></textarea>
                                    </div>                                
                                </div>
                            </div>
                                     
                        <div class="row">
                            <div class="col-md-8">
                              <div class="form-group">
                                <label>Upload File </label>
                                   Pilih file: <input type="file" name="file">
                                   
                                </div>
                            </div>
                            <div class="col-md-4">
                                
                            </div>
                        </div>                
                        <div class="row">
                            <div class="col-md-8">
                              <div class="form-group">
                                <label>Total Harga </label>
                                    <?php
                                        include 'php/koneksi.php';
                                          $id_pasien = $_POST['id_pasien'];
                                                $query=mysqli_query($conn, "SELECT kode_pemeriksaan FROM rawat_inap WHERE id_pasien = '$id_pasien'");
                                                if(mysqli_num_rows($query) == 0){
                                                  
                                                  }else{      
                                              $data = mysqli_fetch_array($query);

                                             $tags = $data['kode_pemeriksaan'];
                                             $total = 0;
                                              $tag = explode(",", $tags);
                                              foreach($tag as $t):
                                                  $query2=mysqli_query($conn, "SELECT harga FROM pemeriksaan WHERE kode_pemeriksaan = '$t'");
                                                  if(mysqli_num_rows($query)) {?>
                                                  <?php while ($row2=mysqli_fetch_array($query2)) {?>
                                                      <?php
                                                          
                                                          $total = $total + $row2[0];
                                                          
                                                      ?>
                                                  <?php }
                                              }

                                              endforeach;
                                            }
                                            echo "<input name='total_harga' type='text' class='form-control' aria-label='Sizing example input' value='Rp. ".$total."' readonly=''>";
                                          ?>
                                </div>
                            </div>
                            <div class="col-md-4">
                                
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
