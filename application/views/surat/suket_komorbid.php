<div class="card card-primary">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-file"></i> Laporan Komorbid</h3>
	</div>
	<form action="" method="post" enctype="multipart/form-data">
		<div class="card-body">

			<?php
			$queryData = "SELECT *
		                    FROM `tb_komorbid` JOIN `tb_pdd`
		                      ON `tb_komorbid`.`id_pdd` = `tb_pdd`.`id_pend`
		                   WHERE `tb_pdd`.`id_pend` = `id_pdd`
		                  ";

		    $dataPenduduk = $this->db->query($queryData)->result_array();

		    // var_dump($dataPenduduk);
		    // die;
		    ?>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Bulan</label>
				<div class="col-sm-4">
					<select name="bulan" id="bulan" class="form-control" required>
						<option selected="selected">- Pilih Bulan -</option>
						<!-- <?php foreach($dataPenduduk as $pd) : ?>
			              <?php echo '<option value="'.$pd['id_komorbid'].'">'.$pd['nama'].' - NIK '.$pd['nik'].'</option>'; ?>
			            <?php endforeach; ?> -->
						<option value="01">Januari</option>
						<option value="02">Februari</option>
						<option value="03">Maret</option>
						<option value="04">April</option>
						<option value="05">Mei</option>
						<option value="06">Juni</option>
						<option value="07">Juli</option>
						<option value="08">Agustus</option>
						<option value="09">September</option>
						<option value="10">Oktober</option>
						<option value="11">November</option>
						<option value="12">Desember</option>
					</select>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Tahun</label>
				<div class="col-sm-4">
					<select name="tahun" id="tahun" class="form-control" required>
						<option selected="selected">- Pilih Tahun -</option>
						<!-- <?php foreach($dataPenduduk as $pd) : ?>
			              <?php echo '<option value="'.$pd['id_komorbid'].'">'.$pd['nama'].' - NIK '.$pd['nik'].'</option>'; ?>
			            <?php endforeach; ?> -->
						<?php
							for($i=date('Y'); $i>=date('Y')-100; $i-=1){
								echo"<option value='$i'> $i </option>";
							}
						?>
					</select>
				</div>
			</div>

		</div>
		<div class="card-footer">
			<input type="submit" name="Cetak" value="Cetak" class="btn btn-info">
		</div>
	</form>
</div>
