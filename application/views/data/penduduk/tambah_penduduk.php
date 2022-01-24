<div class="card card-primary">
	<div class="card-header">
		<h3 class="card-title" style="color: white">
			<i class="fa fa-edit" style="color: white"></i> TAMBAH DATA PENDUDUK</h3>
	</div>
	<form action="" method="post" enctype="multipart/form-data" autocomplete="off">
		<div class="card-body">

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">No KK</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="no_kk" name="no_kk" placeholder="No KK" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama</label>
				<div class="col-sm-6">
					<input type="text" onkeyup="this.value = this.value.toUpperCase()" class="form-control" id="nama" name="nama" placeholder="Nama Penduduk" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">NIK</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="nik" name="nik" placeholder="NIK" required>
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
				<label class="col-sm-2 col-form-label">TTL</label>
				<div class="col-sm-3">
					<input type="text" onkeyup="this.value = this.value.toUpperCase()" class="form-control" id="tempat_lh" name="tempat_lh" placeholder="Tempat Lahir" required>
				</div>
				<div class="col-sm-3">
					<input type="date" class="form-control" id="tgl_lh" name="tgl_lh" placeholder="Tanggal Lahir" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Agama</label>
				<div class="col-sm-6">
					<input type="text" onkeyup="this.value = this.value.toUpperCase()" class="form-control" id="agama" name="agama" placeholder="Agama" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Pekerjaan</label>
				<div class="col-sm-6">
					<input type="text" onkeyup="this.value = this.value.toUpperCase()" class="form-control" id="pekerjaan" name="pekerjaan" placeholder="Pekerjaan" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Status Perkawinan</label>
				<div class="col-sm-3">
					<select name="kawin" id="kawin" class="form-control">
						<option>- PILIH -</option>
						<option value="BELUM KAWIN">BELUM KAWIN</option>
						<option value="KAWIN TERCATAT">KAWIN TERCATAT</option>
						<option value="CERAI HIDUP">CERAI HIDUP</option>
						<option value="CERAI MATI">CERAI MATI</option>
					</select>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Hub Keluarga</label>
				<div class="col-sm-3">
					<select name="hubungan" id="hubungan" class="form-control">
						<option>- PILIH -</option>
						<option value="KEPALA KELUARGA">KEPALA KELUARGA</option>
						<option value="ISTRI">ISTRI</option>
						<option value="ANAK">ANAK</option>
						<option value="ORANG TUA">ORANG TUA</option>
						<option value="MERTUA">MERTUA</option>
						<option value="MENANTU">MENANTU</option>
						<option value="CUCU">CUCU</option>
						<option value="KELUARGA LAIN">KELUARGA LAIN</option>
					</select>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Desa</label>
				<div class="col-sm-6">
					<input type="text" onkeyup="this.value = this.value.toUpperCase()" class="form-control" id="desa" name="desa" placeholder="Desa" required>
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
		</div>
		<div class="card-footer">
			<input type="submit" name="Simpan" value="Simpan" class="btn btn-info">
			<a href="<?php echo base_url('Penduduk'); ?>" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>