<div class="card card-primary">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-file"></i> Su-Ket Kelahiran</h3>
	</div>
	<form action="" method="post" enctype="multipart/form-data">
		<div class="card-body">

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Kelahiran</label>
				<div class="col-sm-6">
					<select name="id" id="id" class="form-control select2bs4" required>
						<option selected="selected">- Pilih Data -</option>
						<!-- <?php
				// ambil data dari database
				$query = "select * from tb_lahir";
				$hasil = mysqli_query($koneksi, $query);
				while ($row = mysqli_fetch_array($hasil)) {
				?>
						<option value="<?php echo $row['id_lahir'] ?>">
							<?php echo $row['nama'] ?>
						</option>
						<?php
				}
				?> -->
						<?php foreach($lahir as $lhr) : ?>
			              <?php echo '<option value="'.$lhr['id_lahir'].'">'.$lhr['nama_bayi'].' - Tempat Lahir '.$lhr['tempat_lhr'].' - Tanggal '.$lhr['tgl_lhr'].'</option>'; ?>
			            <?php endforeach; ?>
					</select>
				</div>
			</div>

		</div>
		<div class="card-footer">

			<input type="submit" name="Cetak" value="Cetak" class="btn btn-info">
		</div>
	</form>
</div>