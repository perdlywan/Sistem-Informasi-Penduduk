<?php

include 'koneksi.php';

session_start();

$username = $_POST['Uname'];
$password = md5($_POST['password']);

$cek = mysqli_query($koneksi,"SELECT * FROM admin WHERE username='$username' AND password='$password'");

$jumlah = mysqli_num_rows($cek);

if ($jumlah > 0) {
	//jika login berhasil
	$_SESSION['status'] = "berhasil";
	header("location:admin/index.php");
}else{
	header("location:index.php?pesan=gagal");
}
?>