<?php
	include 'koneksi.php';
	if (isset($_POST['btnReset'])) 
	{
		$username = $_POST['username'];
		$cek = mysqli_query($conn, "SELECT username FROM users WHERE username = '$username' ");
		if (mysqli_num_rows($cek) == 1 ) 
		{
			$password   = $_POST['password'];
			$repassword = $_POST['repassword'];
			if($password != $repassword)
			{
				?>
					<script>
						alert("Inputan password tidak sama");
						window.location.href = '../lupa_akun.php';
					</script>
				<?php
			}else{
				$sql = mysqli_query($conn, "UPDATE users SET password = '$password' WHERE username = '$username' ");
				if ($sql) 
				{
					?>
						<script>
							alert("Password telah di perbarui");
							window.location.href = '../login.php';
						</script>
					<?php
				}else{
					?>
						<script>
							alert("Password gagal diperbaharui");
							window.location.href = '../lupa_akun.php';
						</script>
					<?php
				}
			}
		}else{
			?>
				<script>
					alert("Pastikan username yang anda masukan benar!");
					window.location.href = '../lupa_akun.php';
				</script>
			<?php
		}
	}
?>