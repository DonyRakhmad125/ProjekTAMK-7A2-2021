<div class="card card-primary">
	<div class="card-header">
		<h3 class="card-title" style="color: white">
			<i class="fa fa-edit" style="color: white"></i> Ubah Data Komorbid dan Covid</h3>
	</div>
	<form action="" method="post" enctype="multipart/form-data" autocomplete="off">
		<div class="card-body">

			<?php
			$pdk = $komorbid['id_pdd'];

			$queryData = "SELECT *
                            FROM `tb_komorbid` JOIN `tb_pdd`
                              ON `tb_komorbid`.`id_pdd` = `tb_pdd`.`id_pend`
                           WHERE `tb_pdd`.`id_pend` = $pdk
                          ";
            $dataPenduduk = $this->db->query($queryData)->result_array();

            // var_dump($dataPenduduk);
            // die;
            ?>
			<!-- <div class="form-group row">
				<label class="col-sm-2 col-form-label">Pelapor</label>
				<div class="col-sm-6">
					<select name="pend" id="pend" class="form-control select2bs4" required>
						<option>- Pilih Penduduk -</option>
						<?php foreach($penduduk as $pnd) : ?>
			              <?php echo '<option value="'.$pnd['id_pend'].'">'.$pnd['nik'].' - '.$pnd['nama'].' - '.$pnd['no_kk'].'</option>'; ?>
			            <?php endforeach; ?>
					</select>
				</div>
			</div> -->

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nik</label>
				<div class="col-sm-5">
					<?php foreach($dataPenduduk as $dp_nik) : ?>
					<input type="text" class="form-control" value="<?php echo $dp_nik['nik']; ?>" readonly/>
				<?php endforeach;?>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama</label>
				<div class="col-sm-5">
					<?php foreach($dataPenduduk as $dp_nama) : ?>
					<input type="text" class="form-control" value="<?php echo $dp_nama['nama']; ?>" readonly/>
				<?php endforeach;?>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">KK</label>
				<div class="col-sm-4">
					<?php foreach($dataPenduduk as $dp_no_kk) : ?>
					<input type="text" class="form-control" value="<?php echo $dp_no_kk['no_kk']; ?>" readonly/>
				<?php endforeach;?>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Alamat</label>
				<div class="col-sm-5">
					<?php foreach($dataPenduduk as $dp_ds_rt_rw) : ?>
					<input type="text" class="form-control" value="<?php echo $dp_ds_rt_rw['desa']." - RT ".$dp_ds_rt_rw['rt']." - RW ".$dp_ds_rt_rw['rw'] ; ?>" readonly/>
				<?php endforeach;?>
				</div>
			</div>

			<!-- <?php echo $percobaan['nama']; ?> -->

			<input type="hidden" name="id" value="<?= $komorbid['id_komorbid']; ?>">
			<input type="hidden" name="pend" value="<?= $komorbid['id_pdd']; ?>">

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Tgl Komorbid</label>
				<div class="col-sm-5">
					<input type="date" class="form-control" id="tgl_komor" name="tgl_komor" value="<?php echo $komorbid['tgl_komor']; ?>" required>
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
						<?php
							if ($komorbid['gejala'] == "DIABETES") echo "<option value='DIABETES' selected>DIABETES</option>";
			                else echo "<option value='DIABETES'>DIABETES</option>";

			                if ($komorbid['gejala'] == "DBD") echo "<option value='DBD' selected>DBD</option>";
			                else echo "<option value='DBD'>DBD</option>";

			                if ($komorbid['gejala'] == "TEKANAN DARAH TINGGI") echo "<option value='TEKANAN DARAH TINGGI' selected>TEKANAN DARAH TINGGI</option>";
			                else echo "<option value='TEKANAN DARAH TINGGI'>TEKANAN DARAH TINGGI</option>";

			                if ($komorbid['gejala'] == "PERNYAKIT JANTUNG") echo "<option value='PERNYAKIT JANTUNG' selected>PERNYAKIT JANTUNG</option>";
			                else echo "<option value='PERNYAKIT JANTUNG'>PERNYAKIT JANTUNG</option>";

			                if ($komorbid['gejala'] == "MASALAH PADA PARU-PARU") echo "<option value='MASALAH PADA PARU-PARU' selected>MASALAH PADA PARU-PARU</option>";
			                else echo "<option value='MASALAH PADA PARU-PARU'>MASALAH PADA PARU-PARU</option>";

			                if ($komorbid['gejala'] == "TIDAK ADA") echo "<option value='TIDAK ADA' selected>TIDAK ADA</option>";
			                else echo "<option value='TIDAK ADA'>TIDAK ADA</option>";
						?>
					</select>
					<footer class="blockquote-footer">NB: Pilih TIDAK ADA bila tidak punya riwayat <cite title="Source Title">KOMORBID</cite> tapi sudah terindikasi <cite title="Source Title">COVID-19</cite></footer>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Resiko</label>
				<div class="col-sm-3">
					<select name="resiko" id="resiko" class="form-control">
						<option>- Pilih -</option>
						<?php
							if ($komorbid['resiko'] == "RENDAH") echo "<option value='RENDAH' selected>RENDAH</option>";
			                else echo "<option value='RENDAH'>RENDAH</option>";

			                if ($komorbid['resiko'] == "MEDIUM") echo "<option value='MEDIUM' selected>MEDIUM</option>";
			                else echo "<option value='MEDIUM'>MEDIUM</option>";

			                if ($komorbid['resiko'] == "TINGGI") echo "<option value='TINGGI' selected>TINGGI</option>";
			                else echo "<option value='TINGGI'>TINGGI</option>";

			                if ($komorbid['resiko'] == "TERINDIKASI") echo "<option value='TERINDIKASI' selected>TERINDIKASI</option>";
			                else echo "<option value='TERINDIKASI'>TERINDIKASI</option>";
						?>
					</select>
					<footer class="blockquote-footer">NB: Pilih TERINDIKASI bila sudah <cite title="Source Title">COVID-19</cite></footer>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Tgl Terindikasi</label>
				<div class="col-sm-5">
					<input type="date" class="form-control" id="tgl_indi" name="tgl_indi" value="<?php echo $komorbid['tgl_indi']; ?>" required>
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
				<div class="col-sm-3">
					<select name="covid" id="covid" class="form-control">
						<option>- Pilih -</option>
						<?php
							if ($komorbid['covid'] == "YA") echo "<option value='YA' selected>YA</option>";
			                else echo "<option value='YA'>YA</option>";

			                if ($komorbid['covid'] == "TIDAK") echo "<option value='TIDAK' selected>TIDAK</option>";
			                else echo "<option value='TIDAK'>TIDAK</option>";
						?>
					</select>
					<footer class="blockquote-footer">NB: Pilih TIDAK bila belum terindikasi <cite title="Source Title">COVID-19</cite></footer>
				</div>
			</div>

		</div>
		<div class="card-footer">
			<input type="submit" name="Perbarui" value="Perbarui" class="btn btn-info">
			<a href="<?php echo base_url('Komorbid'); ?>" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>