<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="assets/fontawesome/css/all.css">
	<link href="assets/css/bootstrap.css" type="text/css" rel="stylesheet">
	<script type="text/javascript" src="assets/js/jquery.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.js"></script>
	<title>Sistem Inforamasi Pendataan Penduduk - Login</title>
	<style type="text/css">
		body{
			background-color: #F0F3F4;
		}
	</style>
</head>
<body>

	<div class="container-fluid">
		<h1 class="text-center mt-5">Sistem Informasi Pendataan Penduduk</h1>
		<h2 class="text-center mb-5">Halaman Login</h2>

		<div class="row">
			<div class="col-md-4 mx-auto">
				<?php 
					if(isset($_GET['pesan'])){
						if($_GET['pesan']=="gagal"){
							echo "<div class='alert alert-danger text-center'>Maaf! Username dan Password Salah!</div>";
						}else if ($_GET['pesan']=="logout") {
							echo "<div class='alert alert-success text-center'>Anda Telah Berhasil Logout</div>";
						}else if ($_GET['pesan']=="belumlogin") {
							echo "<div class='alert alert-warning text-center'>Anda Harus Login Terlebih Dahulu</div>";
						}
					}
				?>
			</div>	
		</div>

		<div class="row">
			<div class="col-md-4 mx-auto">
			
				<div class="card mt-4">
					<div class="card-body">

						<center>
							<i class="fa fa-city fa-3x"></i>
						</center>

						<br/>
						
						<form action="aksi_login.php" method="POST">

							<div class="form-group">
								<label>Username</label>
								<input type="text" name="Uname" required="required" class="form-control" placeholder="Masukkan Username..">
							</div>

							<div class="form-group">
								<label>Password</label>
								<input type="Password" name="password" required="required" class="form-control" placeholder="Masukkan Password..">
							</div>
							
							<input type="submit" value="Login" class="btn btn-primary btn-block mb-3">
						</form>
					</div>
				</div>
			</div>
		</div>


	</div>
	

</body>
</html>