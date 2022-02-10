<?php
	$koneksi = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($koneksi, 'laboratorium');

	if(isset($_POST['deletedata'])) {
		$kode_dokter = $_POST['delete_dokter'];

		$query = "DELETE FROM data_dokter WHERE kode_dokter='$kode_dokter' ";
		$query_run = mysqli_query($koneksi, $query);

		if ($query_run) {
			echo '<script> alert("Data Deleted");</script>';
			header("location:../data_dokter.php");
		} else {
			echo '<script> alert("Data Not Deleted");</script>';
		}
	}
?>