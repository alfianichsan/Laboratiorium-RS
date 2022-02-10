<?php 
	include "koneksi.php";
	$id_pasien = $_POST['id_pasien'];
	$nama_pasien = $_POST['nama_pasien'];
	$tmptlahir_pasien = $_POST['tmptlahir_pasien'];
	$ttl_pasien = $_POST['ttl_pasien'];
	$alamat_pasien = $_POST['alamat_pasien'];
	$gender_pasien = $_POST['gender_pasien'];

	$no_pendaftaran = $_POST['no_pendaftaran'];
	$tgl_masuk = $_POST['tgl_masuk'];
	$jam_masuk = $_POST['jam_masuk'];
	$pembayaran_rj = $_POST['pembayaran_rj'];
	$data = implode(",", $_POST['kode_pemeriksaan']);

	$sql1 = "INSERT INTO data_pasien (nama_pasien, tmptlahir_pasien, ttl_pasien, alamat_pasien, gender_pasien, id_pasien) VALUES('$nama_pasien','$tmptlahir_pasien','$ttl_pasien','$alamat_pasien','$gender_pasien','$id_pasien')";
	
	$sql2 = "INSERT INTO registrasi_internal (no_pendaftaran, tgl_masuk, jam_masuk, id_pasien, kode_pemeriksaan) VALUES('$no_pendaftaran','$tgl_masuk','$jam_masuk','$id_pasien','$data')";
	
	
 

	mysqli_query($conn,$sql1);
	mysqli_query($conn,$sql2);
	header("location:../registrasi_internal.php");
?>