<div class="card card-success">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-edit"></i> Ubah Data Penduduk</h3>
	</div>
	<form action="" method="post" enctype="multipart/form-data" autocomplete="off">
		<div class="card-body">

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">No Data</label>
				<div class="col-sm-2">
					<input type="text" class="form-control" id="id" name="id" value="<?php echo $penduduk['id_pend']; ?>"
					 readonly/>
				</div>
			</div>

			<!-- <input type="hidden" name="id" value="<?= $penduduk['id_pend']; ?>"> -->

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">NO KK</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="no_kk" name="no_kk" value="<?php echo $penduduk['no_kk']; ?>"
					/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="nama" name="nama" value="<?php echo $penduduk['nama']; ?>"
					/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">NIK</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="nik" name="nik" value="<?php echo $penduduk['nik']; ?>"
					/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">TTL</label>
				<div class="col-sm-3">
					<input type="text" class="form-control" id="tempat_lh" name="tempat_lh" value="<?php echo $penduduk['tempat_lh']; ?>"
					/>
				</div>
				<div class="col-sm-3">
					<input type="date" class="form-control" id="tgl_lh" name="tgl_lh" value="<?php echo $penduduk['tgl_lh']; ?>"
					/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Jenis Kelamin</label>
				<div class="col-sm-3">
					<select name="jekel" id="jekel" class="form-control">
						<option value="">-- Pilih jekel --</option>
						<?php
			                //menhecek data yg dipilih sebelumnya
			                if ($penduduk['jekel'] == "LAKI-LAKI") echo "<option value='LAKI-LAKI' selected>LAKI-LAKI</option>";
			                else echo "<option value='LAKI-LAKI'>LAKI-LAKI</option>";

			                if ($penduduk['jekel'] == "PEREMPUAN") echo "<option value='PEREMPUAN' selected>PEREMPUAN</option>";
			                else echo "<option value='PEREMPUAN'>PEREMPUAN</option>";
			            ?>
					</select>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Status Keluarga</label>
				<div class="col-sm-3">
					<select name="hubungan" id="hubungan" class="form-control">
						<option value="">-- Pilih status --</option>
						<?php
			                //menhecek data yg dipilih sebelumnya
			                if ($penduduk['hubungan'] == "KEPALA KELUARGA") echo "<option value='KEPALA KELUARGA' selected>KEPALA KELUARGA</option>";
			                else echo "<option value='KEPALA KELUARGA'>KEPALA KELUARGA</option>";

			                if ($penduduk['hubungan'] == "ISTRI") echo "<option value='ISTRI' selected>ISTRI</option>";
			                else echo "<option value='ISTRI'>ISTRI</option>";

			                if ($penduduk['hubungan'] == "ANAK") echo "<option value='ANAK' selected>ANAK</option>";
			                else echo "<option value='ANAK'>ANAK</option>";

			                if ($penduduk['hubungan'] == "ORANG TUA") echo "<option value='ORANG TUA' selected>ORANG TUA</option>";
			                else echo "<option value='ORANG TUA'>ORANG TUA</option>";

			                if ($penduduk['hubungan'] == "METRUA") echo "<option value='METRUA' selected>METRUA</option>";
			                else echo "<option value='METRUA'>METRUA</option>";

			                if ($penduduk['hubungan'] == "MENANTU") echo "<option value='MENANTU' selected>MENANTU</option>";
			                else echo "<option value='MENANTU'>MENANTU</option>";

			                if ($penduduk['hubungan'] == "CUCU") echo "<option value='CUCU' selected>CUCU</option>";
			                else echo "<option value='CUCU'>CUCU</option>";

			                if ($penduduk['hubungan'] == "KELUARGA LAIN") echo "<option value='KELUARGA LAIN' selected>KELUARGA LAIN</option>";
			                else echo "<option value='KELUARGA LAIN'>KELUARGA LAIN</option>";
			            ?>
					</select>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Desa</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="desa" name="desa" value="<?php echo $penduduk['desa']; ?>"
					/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">RT/RW</label>
				<div class="col-sm-3">
					<input type="text" class="form-control" id="rt" name="rt" value="<?php echo $penduduk['rt']; ?>"
					/>
				</div>
				<div class="col-sm-3">
					<input type="text" class="form-control" id="rw" name="rw" value="<?php echo $penduduk['rw']; ?>"
					/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Agama</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="agama" name="agama" value="<?php echo $penduduk['agama']; ?>"
					/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Status Perkawinan</label>
				<div class="col-sm-3">
					<select name="kawin" id="kawin" class="form-control">
						<option value="">-- Pilih Status --</option>
						<?php
                //menhecek data yg dipilih sebelumnya
                if ($penduduk['kawin'] == "BELUM KAWIN") echo "<option value='BELUM KAWIN' selected>BELUM KAWIN</option>";
                else echo "<option value='BELUM KAWIN'>BELUM KAWIN</option>";

                if ($penduduk['kawin'] == "KAWIN TERCATAT") echo "<option value='KAWIN TERCATAT' selected>KAWIN TERCATAT</option>";
				else echo "<option value='KAWIN TERCATAT'>KAWIN TERCATAT</option>";
				
				if ($penduduk['kawin'] == "CERAI HIDUP") echo "<option value='CERAI HIDUP' selected>CERAI HIDUP</option>";
                else echo "<option value='CERAI HIDUP'>CERAI HIDUP</option>";

                if ($penduduk['kawin'] == "CERAI MATI") echo "<option value='CERAI MATI' selected>CERAI MATI</option>";
                else echo "<option value='CERAI MATI'>CERAI MATI</option>";
            ?>
					</select>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Pekerjaan</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="pekerjaan" name="pekerjaan" value="<?php echo $penduduk['pekerjaan']; ?>"
					/>
				</div>
			</div>

		</div>
		<div class="card-footer">
			<input type="submit" name="Perbarui" value="Perbarui" class="btn btn-success">
			<a href="<?php echo base_url('Penduduk'); ?>" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>