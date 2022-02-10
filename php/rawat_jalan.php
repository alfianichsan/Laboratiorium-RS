<?php 
	include "koneksi.php";
	$nopemeriksaan_rj = $_POST['nomor_periksa'];
	$nama_pasien = $_POST['nama_pasien'];
	$tmptlahir_pasien = $_POST['tmptlahir_pasien'];
	$ttl_pasien = $_POST['ttl_pasien'];
	$alamat_pasien = $_POST['alamat_pasien'];
	$gender_pasien = $_POST['gender_pasien'];

	$nobilling_rj = $_POST['nomor_billing'];
	$nama_dokter = $_POST['nama_dokter'];
	$dokter_umum = $_POST['dokter_umum'];
	$tgl_masuk = $_POST['tgl_masuk'];
	$jam_masuk = $_POST['jam_masuk'];
	$pembayaran_rj = $_POST['pembayaran_rj'];
	$data = implode(",", $_POST['kode_pemeriksaan']);

	$sql1 = "INSERT INTO data_pasien (nama_pasien, tmptlahir_pasien, ttl_pasien, alamat_pasien, gender_pasien, id_pasien) VALUES('$nama_pasien','$tmptlahir_pasien','$ttl_pasien','$alamat_pasien','$gender_pasien','$nopemeriksaan_rj')";
	
	$sql2 = "INSERT INTO rawat_jalan (nomorbilling_rj, nama_dokter, dokter_umum, tgl_masuk, jam_masuk, pembayaran_rj, id_pasien, kode_pemeriksaan) VALUES('$nobilling_rj','$nama_dokter','$dokter_umum','$tgl_masuk','$jam_masuk','$pembayaran_rj','$nopemeriksaan_rj','$data')";
	
	
 

	mysqli_query($conn,$sql1);
	mysqli_query($conn,$sql2);
	header("location:../rawat_jalan.php");
?>