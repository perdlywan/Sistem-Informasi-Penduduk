<?php

include '../koneksi.php';
$nama_dusun = $_POST['nama_dusun'];

mysqli_query($koneksi,"INSERT INTO dusun VALUES('', '$nama_dusun')");

header("location:dusun.php");
?>