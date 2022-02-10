<?php
	$koneksi = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($koneksi, 'laboratorium');

	if(isset($_POST['deletedata'])) {
		$id_pasien = $_POST['delete_pasien'];

		$query = "DELETE FROM data_pasien WHERE id_pasien='$id_pasien' ";
		$query_run = mysqli_query($koneksi, $query);

		if ($query_run) {
			echo '<script> alert("Data Deleted");</script>';
			header("location:../data_pasien.php");
		} else {
			echo '<script> alert("Data Not Deleted");</script>';
		}
	}
?>