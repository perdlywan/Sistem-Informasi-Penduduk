<?php 
	include 'header.php';
?>
	<div class="container">
		<div class="row">
			<div class="col-md-6 mx-auto">
				<div class="card">
					<div class="card-body">

						<h3>Tambah Desa</h3>
						<p class="text-muted">Tambah Desa Baru</p>

						<hr>

						<form action="desa_tambah_aksi.php" method="POST">
								
							<div class="form-group">
								<label>Nama Desa</label>
								<input type="text" name="nama_desa" required="required" class="form-control">
							</div>

							<input type="submit" value="Simpan" class="btn btn-primary btn-sm">
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php include 'footer.php'; ?>



