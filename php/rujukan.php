<?php 
	include "koneksi.php";
	$id_pasien = $_POST['id_pasien'];
	$nama_pasien = $_POST['nama_pasien'];
	$tmptlahir_pasien = $_POST['tmptlahir_pasien'];
	$ttl_pasien = $_POST['ttl_pasien'];
	$alamat_pasien = $_POST['alamat_pasien'];
	$gender_pasien = $_POST['gender_pasien'];

	$no_rujukan = $_POST['no_rujukan'];
	$dokter_umum = $_POST['dokter_umum'];
	$nama_instansi = $_POST['nama_instansi'];
	$jenis_periksa = $_POST['jenis_periksa'];
	$tgl_masuk = $_POST['tgl_masuk'];
	$tgl_keluar = $_POST['tgl_keluar'];
	$jam_masuk = $_POST['jam_masuk'];
	$jam_keluar = $_POST['jam_keluar'];
	$pembayaran = $_POST['pembayaran_rj'];
	$data = implode(",", $_POST['kode_pemeriksaan']);

	$sql1 = "INSERT INTO data_pasien (nama_pasien, tmptlahir_pasien, ttl_pasien, alamat_pasien, gender_pasien, id_pasien) VALUES('$nama_pasien','$tmptlahir_pasien','$ttl_pasien','$alamat_pasien','$gender_pasien','$id_pasien')";
	
	$sql2 = "INSERT INTO rujukan (no_rujukan, dokter_umum, nama_instansi, jenis_periksa, tgl_masuk, jam_masuk, tgl_keluar, jam_keluar, pembayaran, id_pasien, kode_pemeriksaan) VALUES('$no_rujukan','$dokter_umum','$nama_instansi','$jenis_periksa','$tgl_masuk','$jam_masuk','$tgl_keluar','$jam_keluar','$pembayaran','$id_pasien','$data')";
	
	
 

	mysqli_query($conn,$sql1);
	mysqli_query($conn,$sql2);
	header("location:../rujukan.php");
?>