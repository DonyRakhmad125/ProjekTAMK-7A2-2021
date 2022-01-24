<div class="card card-primary">
	<div class="card-header">
		<h3 class="card-title" style="color: white">
			<i class="fa fa-edit" style="color: white"></i> Tambah Data Komorbid dan Covid</h3>
	</div>
	<form action="" method="post" enctype="multipart/form-data" autocomplete="off">
		<div class="card-body">

			<div class="form-group row" >
				<label class="col-sm-2 col-form-label">Penduduk</label>
				<div class="col-sm-6">
					<select name="pend" id="pend" class="form-control" required>
						<option>- Pilih Penduduk -</option>
						<?php foreach($penduduk as $pnd) : ?>
			              <?php echo '<option value="'.$pnd['id_pend'].'">'.$pnd['nik'].' - '.$pnd['nama'].' - '.$pnd['no_kk'].' - RT '.$pnd['rt'].' - RW '.$pnd['rw'].'</option>'; ?>
			            <?php endforeach; ?>
					</select>
				</div>
			</div>

<!-- 			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Tgl Komorbid</label>
				<div class="col-sm-3">
					<input type="text" class="form-control" id="tgl_komor" name="tgl_komor" readonly value="<?= date("Y-m-d")?>">
				</div>
			</div> -->

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Tgl Komorbid</label>
				<div class="col-sm-5">
					<input type="date" class="form-control" id="tgl_komor" name="tgl_komor">
					<div class="form-check">
					  <input class="form-check-input" type="checkbox" value="" id="toggleFromTglKomorbid" onclick="functionToggleFromTglKomor()">
					  <label class="form-check-label" for="toggleFromTglKomorbid">
					    Disable
					  </label>
					</div>
					<footer class="blockquote-footer">NB: Disable dan Kosongi bila tidak punya riwayat <cite title="Source Title">KOMORBID</cite></footer>
				</div>
			</div>


			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Gejala</label>
				<div class="col-sm-6">
					<select name="gejala" id="gejala" class="form-control">
						<option>- Pilih -</option>
						<option value="DIABETES">DIABETES</option>
						<option value="DBD">DBD</option>
						<option value="TEKANAN DARAH TINGGI">TEKANAN DARAH TINGGI</option>
						<option value="PERNYAKIT JANTUNG">PERNYAKIT JANTUNG</option>
						<option value="MASALAH PADA PARU-PARU">MASALAH PADA PARU-PARU</option>
						<option value="TIDAK ADA">TIDAK ADA</option>
					</select>
					<footer class="blockquote-footer">NB: Pilih TIDAK ADA bila tidak punya riwayat <cite title="Source Title">KOMORBID</cite> tapi sudah terindikasi <cite title="Source Title">COVID-19</cite></footer>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Resiko Terdampak Covid</label>
				<div class="col-sm-3">
					<select name="resiko" id="resiko" class="form-control">
						<option>- Pilih -</option>
						<option value="RENDAH">RENDAH</option>
						<option value="MEDIUM">MEDIUM</option>
						<option value="TINGGI">TINGGI</option>
						<option value="TERINDIKASI">TERINDIKASI</option>
					</select>
					<footer class="blockquote-footer">NB: Pilih TERINDIKASI bila sudah <cite title="Source Title">COVID-19</cite></footer>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Tgl Terindikasi</label>
				<div class="col-sm-5">
					<input type="date" class="form-control" id="tgl_indi" name="tgl_indi">
					<div class="form-check">
					  <input class="form-check-input" type="checkbox" value="" id="toggleFromTglIndi" onclick="functionToggleFormTglIndi()">
					  <label class="form-check-label" for="toggleFromTglIndi">
					    Disable
					  </label>
					</div>
					<footer class="blockquote-footer">NB: Disable dan Kosongi bila belum terindikasi <cite title="Source Title">COVID-19</cite></footer>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Covid</label>
				<div class="col-sm-4">
					<select name="covid" id="covid" class="form-control">
						<option>- Pilih -</option>
						<option value="YA">YA</option>
						<option value="TIDAK">TIDAK</option>
					</select>
					<footer class="blockquote-footer">NB: Pilih TIDAK bila belum terindikasi <cite title="Source Title">COVID-19</cite></footer>
				</div>
			</div>

		</div>
		<div class="card-footer">
			<input type="submit" name="Simpan" value="Simpan" class="btn btn-info">
			<a href="<?php echo base_url('Komorbid'); ?>" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>