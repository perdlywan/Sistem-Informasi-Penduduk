<?php  
	include 'header.php';
?>
	<div class="container-fluid">
		<div class="card">
			<div class="card-body">
				<h3>Data Warga</h3>
				<p class="text-muted">Semua Data Warga</p>

				<hr>

				<div class="row">
					<div class="col-md-4 mx-auto">
						<div class="card bg-info">
							<div class="card-body">
								<form method="GET" action="warga_filter.php">
									<div class="form-group">
										<label>Filter Desa</label>
										<select name="desa" class="form-control" required="required">
											<option value="">- Pilih -</option>

												<?php 
													$id_desa = $_GET['desa']; 
													$desa = mysqli_query($koneksi,"SELECT * FROM desa");
													while ($d = mysqli_fetch_array($desa)) {
												?>

											<option <?php if($d['desa_id'] == $id_desa){echo "Selected='selected'";} ?>value="<?php echo $d['desa_id']; ?>"><?php echo $d['desa_nama']; ?></option>
											<?php  
											}	
											?>
										</select>
									</div>
									<input type="submit" name="submit" value="Tampilkan Data" class="btn btn-secondary btn-sm">
								</form>
							</div>
						</div>
					</div>
				</div>

				<a href="warga_tambah.php" class="btn btn-primary btn-sm mb-4">Tambah Warga</a>

				<a href="warga_cetak_filter.php?id= <?php echo $id_desa; ?>" class="btn btn-warning btn-sm mb-4" target="_blank">Cetak</a>

				<table class="table table-bordered table-hover table-striped tabel-saya">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama</th>
							<th>No. KTP</th>
							<th>Jenis Kelamin</th>
							<th>Desa</th>
							<th>Dusun</th>
							<th>RT</th>
							<th>RW</th>
							<th>Status</th>
							<th>Pendidikan</th>
							<th>Agama</th>
							<th width="13%">Opsi</th>
						</tr>
					</thead>
					
					<tbody>
						<?php  
						$no = 1;
						$desa = $_GET["desa"];
						$warga = mysqli_query($koneksi,"SELECT * FROM warga,desa,dusun WHERE warga_desa=desa_id AND warga_dusun=dusun_id AND warga_desa = '$desa' ORDER BY warga_id ASC");
						while ($w = mysqli_fetch_array($warga)) {
						?>

						<tr>
							<td><?php echo $no++; ?></td>
							<td><?php echo $w['warga_nama']; ?></td>
							<td><?php echo $w['warga_ktp']; ?></td>
							<td><?php echo $w['warga_jk']; ?></td>
							<td><?php echo $w['desa_nama']; ?></td>
							<td><?php echo $w['dusun_nama']; ?></td>
							<td><?php echo $w['warga_rt']; ?></td>
							<td><?php echo $w['warga_rw']; ?></td>
							<td><?php echo $w['warga_status']; ?></td>
							<td><?php echo $w['warga_pendidikan']; ?></td>
							<td><?php echo $w['warga_agama']; ?></td>
							<td>
								<a href="warga_edit.php?id=<?php echo $w['warga_id']; ?>" class="btn btn-success btn-sm">Edit</a>
								<a href="warga_hapus.php?id=<?php echo $w['warga_id']; ?>" class="btn btn-danger btn-sm">Hapus</a>
							</td>
						</tr>

						<?php  
						}
						?>
				</tbody>

					

				</table>
			</div>
		</div>
	</div>
<?php include 'footer.php'; ?>




?>