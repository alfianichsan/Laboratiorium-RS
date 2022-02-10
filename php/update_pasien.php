<?php
$koneksi = mysqli_connect("localhost","root","");
$db = mysqli_select_db($koneksi, 'laboratorium');

	if(isset($_POST['updatedata'])){
		$id_pasien = $_POST['id_pasien'];
		$nama_pasien = $_POST['nama_pasien'];
		$tmptlahir_pasien = $_POST['tmptlahir_pasien'];
		$ttl_pasien = $_POST['ttl_pasien'];
		$alamat_pasien = $_POST['alamat_pasien'];
		$gender_pasien = $_POST['gender_pasien'];

		$query = "UPDATE data_pasien SET nama_pasien='$nama_pasien', tmptlahir_pasien='$tmptlahir_pasien', ttl_pasien='$ttl_pasien', alamat_pasien='$alamat_pasien', gender_pasien='$gender_pasien' WHERE id_pasien='$id_pasien' ";
		$query_run = mysqli_query($koneksi, $query);

		if($query_run) {
			echo '<script> alert("Data Updated");</script>';
			header("location:../data_pasien.php");
		} else {
			echo '<script> alert("Data Not Updated");</script>';
		}
	}
?>