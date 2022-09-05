<?php

include '../koneksi.php';
$nama_desa = $_POST['nama_desa'];

mysqli_query($koneksi,"INSERT INTO desa VALUES('', '$nama_desa')");

header("location:desa.php");
?>