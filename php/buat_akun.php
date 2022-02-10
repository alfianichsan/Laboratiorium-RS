<?php 
	include "koneksi.php";
	$username = $_POST['username'];
	$password = $_POST['password'];
	$nama_user = $_POST['nama_user'];
	$email_user = $_POST['email_user'];
	$no_telpon = $_POST['no_telpon'];
	

	$sql1 = "INSERT INTO users (username, password, nama_user, email_user, no_telpon) VALUES('$username','$password','$nama_user','$email_user','$no_telpon')";
	
	
	mysqli_query($conn,$sql1);
	header("location:../login.php");
?>