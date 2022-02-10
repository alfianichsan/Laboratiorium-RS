<?php
include "koneksi.php";
$username = $_POST['username'];
$password = $_POST['password'];

if (empty($username)){
echo "<script>alert('Username belum diisi')</script>";
echo "<meta http-equiv='refresh' content='0; url=../login.php'>";
}else if (empty($password)){
echo "<script>alert('Password belum diisi')</script>";
echo "<meta http-equiv='refresh' content='0; url=../login.php'>";
}else{
session_start();
$login = mysqli_query($conn,"select * from users where username='$username' and password='$password'");
if (mysqli_num_rows($login) > 0){
$_SESSION['username'] = $username;
header("location:../index.php");
}else{
echo "<script>alert('Username atau Password salah')</script>";
echo "<meta http-equiv='refresh' content='0; url=../login.php'>";
}
}

?>