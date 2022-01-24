<div class="card card-primary">
	<div class="card-header">
		<h3 class="card-title" style="color: white">
			<i class="fa fa-edit" style="color: white"></i> Ubah Data Meninggal</h3>
	</div>
	<form action="" method="post" enctype="multipart/form-data" autocomplete="off">
		<div class="card-body">

			<?php
			$pdk = $meninggal['id_pdd'];

			$queryData = "SELECT *
                            FROM `tb_mendu` JOIN `tb_pdd`
                              ON `tb_mendu`.`id_pdd` = `tb_pdd`.`id_pend`
                           WHERE `tb_pdd`.`id_pend` = $pdk
                          ";
            $dataPenduduk = $this->db->query($queryData)->result_array();

            // var_dump($dataPenduduk);
            // die;
            ?>

			<!-- <div class="form-group row">
				<label class="col-sm-2 col-form-label">Penduduk</label>
				<div class="col-sm-6">
					<select name="pend" id="pend" class="form-control select2bs4" required>
						<option selected="selected">- Pilih Penduduk -</option>
						<?php foreach($penduduk as $pnd) : ?>
              <?php echo '<option value="'.$pnd['id_pend'].'">'.$pnd['nik'].' - '.$pnd['nama'].' - '.$pnd['no_kk'].'</option>'; ?>
            <?php endforeach; ?>
					</select>
				</div>
			</div> -->

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama</label>
				<div class="col-sm-3">
					<?php foreach($dataPenduduk as $dp_nama) : ?>
					<input type="text" class="form-control" value="<?php echo $dp_nama['nama']; ?>" readonly/>
				<?php endforeach;?>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">NIK</label>
				<div class="col-sm-3">
					<?php foreach($dataPenduduk as $dp_no_nik) : ?>
					<input type="text" class="form-control" value="<?php echo $dp_no_nik['nik']; ?>" readonly/>
				<?php endforeach;?>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">RT/RW</label>
				<div class="col-sm-3">
					<?php foreach($dataPenduduk as $dp_rt) : ?>
					<input type="text" class="form-control" value="<?php echo $dp_rt['rt']; ?>" readonly/>
				<?php endforeach;?>
				</div>
				<div class="col-sm-3">
					<?php foreach($dataPenduduk as $dp_rw) : ?>
					<input type="text" class="form-control" value="<?php echo $dp_rw['rw']; ?>" readonly/>
				<?php endforeach;?>
				</div>
			</div>

			<input type="hidden" name="id" value="<?= $meninggal['id_mendu']; ?>">
			<input type="hidden" name="pend" value="<?= $meninggal['id_pdd']; ?>">

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Tgl Meninggal</label>
				<div class="col-sm-3">
					<input type="date" class="form-control" id="tgl_mendu" name="tgl_mendu" value="<?php echo $meninggal['tgl_mendu']; ?>" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Sebab</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="sebab" name="sebab" placeholder="Penyebab" value="<?php echo $meninggal['sebab']; ?>" required>
				</div>
			</div>

		</div>
		<div class="card-footer">
			<input type="submit" name="Perbarui" value="Perbarui" class="btn btn-info">
			<a href="<?php echo base_url('Meninggal'); ?>" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>