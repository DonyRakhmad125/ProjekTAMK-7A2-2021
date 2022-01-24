<div class="card card-primary">
	<div class="card-header">
		<h3 class="card-title" style="color: white">
			<i class="fa fa-edit" style="color: white"></i> Tambah Data Pendatang</h3>
	</div>
	<form action="" method="post" enctype="multipart/form-data" autocomplete="off">
		<div class="card-body">

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">NIK</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="nik" name="nik" placeholder="NIK" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama</label>
				<div class="col-sm-6">
					<input type="text" onkeyup="this.value = this.value.toUpperCase()" class="form-control" id="nama_datang" name="nama_datang" placeholder="Nama Pendatang" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Jenis Kelamin</label>
				<div class="col-sm-3">
					<select name="jekel" id="jekel" class="form-control">
						<option>- Pilih -</option>
						<option value="LAKI-LAKI">LAKI-LAKI</option>
						<option value="PEREMPUAN">PEREMPUAN</option>
					</select>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Tgl Datang</label>
				<div class="col-sm-3">
					<input type="date" class="form-control" id="tgl_datang" name="tgl_datang" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">RT/RW</label>
				<div class="col-sm-3">
					<select name="rt" id="rt" class="form-control">
						<option>*Pilih Rt*</option>
						<option value=".01">.01</option>
						<option value=".02">.02</option>
						<option value=".03">.03</option>
						<option value=".04">.04</option>
						<option value=".05">.05</option>
						<option value=".06">.06</option>
						<option value=".07">.07</option>
						<option value=".08">.08</option>
						<option value=".09">.09</option>
						<option value=".10">.010</option>
						<option value=".11">.011</option>
						<option value=".12">.012</option>
					</select>
				</div>
				<div class="col-sm-3">
					<select name="rw" id="rw" class="form-control">
						<option>*Pilih Rw*</option>
						<option value=".01">.01</option>
						<option value=".02">.02</option>
						<option value=".03">.03</option>
						<option value=".04">.04</option>
						<option value=".05">.05</option>
						<option value=".06">.06</option>
						<option value=".07">.07</option>
						<option value=".08">.08</option>
						<option value=".09">.09</option>
						<option value=".10">.010</option>
						<option value=".11">.011</option>
					</select>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Pelapor</label>
				<div class="col-sm-6">
					<select name="pelapor" id="pelapor" class="form-control select2bs4" required>
						<option>- Pilih Penduduk -</option>
						<?php foreach($penduduk as $pnd) : ?>
			              <?php echo '<option value="'.$pnd['id_pend'].'">'.$pnd['id_pend'].' - '.$pnd['nama'].' - '.$pnd['nik'].'</option>'; ?>
			            <?php endforeach; ?>
					</select>
				</div>
			</div>

		</div>
		<div class="card-footer">
			<input type="submit" name="Simpan" value="Simpan" class="btn btn-info">
			<a href="<?php echo base_url('Pendatang'); ?>" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>