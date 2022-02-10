<?php 
	include "koneksi.php";
	$id_pasien = $_POST['id_pasien'];
	$invoice = $_POST['invoice'];
	$keterangan = $_POST['keterangan'];
	$total_harga = $_POST['total_harga'];
	$data = implode(",", $_POST['kode_pemeriksaan']);
	$data2 = implode(";", $_POST['hasil_pemeriksaan']);
	$nama_file = $_FILES['file']['name'];
	$source = $_FILES['file']['tmp_name'];
	$folder = '../upload/';

	move_uploaded_file($source, $folder.$nama_file);
	$sql1 = "INSERT INTO pembayaran (invoice, id_pasien, kode_pemeriksaan, keterangan, file, total_harga, hasil_pemeriksaan) VALUES('$invoice','$id_pasien','$data','$keterangan','$nama_file','$total_harga','$data2')";
	
	mysqli_query($conn,$sql1);
	header("location:../input_hasil.php");
?>