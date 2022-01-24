<div class="card card-primary">
	<div class="card-header">
		<h3 class="card-title" style="color: white">
			<i class="fa fa-edit" style="color: white"></i> TAMBAH DATA LAHIR</h3>
	</div>
	<form action="" method="post" enctype="multipart/form-data" autocomplete="off">
		<div class="card-body">

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama</label>
				<div class="col-sm-6">
					<input type="text" onkeyup="this.value = this.value.toUpperCase()" class="form-control" id="nama_bayi" name="nama_bayi" placeholder="Nama Bayi" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">TTL</label>
				<div class="col-sm-3">
					<input type="text" onkeyup="this.value = this.value.toUpperCase()" class="form-control" id="tempat_lhr" name="tempat_lhr" placeholder="Tempat Lahir" required>
				</div>
				<div class="col-sm-3">
					<input type="date" class="form-control" id="tgl_lhr" name="tgl_lhr" placeholder="Tanggal Lahir" required>
				</div>
			</div>
			
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Jenis Kelain</label>
				<div class="col-sm-3">
					<select name="jekel" id="jekel" class="form-control">
						<option>- Pilih -</option>
						<option value="LAKI-LAKI">LAKI-LAKI</option>
						<option value="PEREMPUAN">PEREMPUAN</option>
					</select>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Keluarga (Nama Ibu)</label>
				<div class="col-sm-6">
					<select name="pend" id="pend" class="form-control select2bs4" required>
						<option selected="selected">- Pilih KK -</option>
						<?php foreach($penduduk as $pnd) : ?>
              <?php echo '<option value="'.$pnd['id_pend'].'">'.$pnd['nama'].' - '.$pnd['nik'].' - '.$pnd['no_kk'].'</option>'; ?>
            <?php endforeach; ?>
					</select>
				</div>
			</div>

			<div class="card-footer">
				<input type="submit" name="Simpan" value="Simpan" class="btn btn-info">
				<a href="<?php echo base_url('Lahir'); ?>" title="Kembali" class="btn btn-secondary">Batal</a>
			</div>
	</form>
</div>