<?php
$koneksi = mysqli_connect("localhost","root","");
$db = mysqli_select_db($koneksi, 'laboratorium');

    if(isset($_POST['updatedata'])){
        $kode_dokter = $_POST['kode_dokter'];
        $nama_dokter = $_POST['nama_dokter'];
        $alamat_dokter = $_POST['alamat_dokter'];
        $no_telpon = $_POST['no_telpon'];

        $query = "UPDATE data_dokter SET nama_dokter='$nama_dokter', alamat_dokter='$alamat_dokter', no_telpon='$no_telpon' WHERE kode_dokter='$kode_dokter' ";
        $query_run = mysqli_query($koneksi, $query);

        if($query_run) {
            echo '<script> alert("Data Updated");</script>';
            header("location:../data_dokter.php");
        } else {
            echo '<script> alert("Data Not Updated");</script>';
        }
    }
?>