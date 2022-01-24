<div class="card card-primary">
	<div class="card-header">
		<h3 class="card-title" style="color: white">
			<i class="fa fa-edit" style="color: white"></i> Ubah Data Lahir</h3>
	</div>
	<form action="" method="post" enctype="multipart/form-data" autocomplete="off">
		<div class="card-body">

			<?php
			$pdk = $lahir['id_pdd'];

			$queryData = "SELECT *
                            FROM `tb_lahir` JOIN `tb_pdd`
                              ON `tb_lahir`.`id_pdd` = `tb_pdd`.`id_pend`
                           WHERE `tb_pdd`.`id_pend` = $pdk
                          ";
            $dataPenduduk = $this->db->query($queryData)->result_array();

            // var_dump($dataPenduduk);
            // die;
            ?>


            <div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama Ibu</label>
				<div class="col-sm-3">
					<?php foreach($dataPenduduk as $dp_nama) : ?>
					<input type="text" class="form-control" value="<?php echo $dp_nama['nama']; ?>" readonly/>
				<?php endforeach;?>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">KK</label>
				<div class="col-sm-3">
					<?php foreach($dataPenduduk as $dp_no_kk) : ?>
					<input type="text" class="form-control" value="<?php echo $dp_no_kk['no_kk']; ?>" readonly/>
				<?php endforeach;?>
				</div>
			</div>

			<input type="hidden" name="id" value="<?= $lahir['id_lahir']; ?>">
			<input type="hidden" name="pend" value="<?= $lahir['id_pdd']; ?>">

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama Bayi</label>
				<div class="col-sm-6">
					<input type="text" onkeyup="this.value = this.value.toUpperCase()" class="form-control" id="nama_bayi" name="nama_bayi" placeholder="Nama Bayi" value="<?php echo $lahir['nama_bayi']; ?>" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">TTL</label>
				<div class="col-sm-3">
					<input type="text" onkeyup="this.value = this.value.toUpperCase()" class="form-control" id="tempat_lhr" name="tempat_lhr" placeholder="Tempat Lahir" value="<?php echo $lahir['tempat_lhr']; ?>" required>
				</div>
				<div class="col-sm-3">
					<input type="date" class="form-control" id="tgl_lhr" name="tgl_lhr" placeholder="Tanggal Lahir" value="<?php echo $lahir['tgl_lhr']; ?>" required>
				</div>
			</div>
			
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Jenis Kelamin</label>
				<div class="col-sm-3">
					<select name="jekel" id="jekel" class="form-control">
						<option>- Pilih -</option>
						<?php
							if ($lahir['jekel'] == "LAKI-LAKI") echo "<option value='LAKI-LAKI' selected>LAKI-LAKI</option>";
			                else echo "<option value='LAKI-LAKI'>LAKI-LAKI</option>";

			                if ($lahir['jekel'] == "PEREMPUAN") echo "<option value='PEREMPUAN' selected>PEREMPUAN</option>";
			                else echo "<option value='PEREMPUAN'>PEREMPUAN</option>";
						?>
					</select>
				</div>
			</div>

			<!-- <div class="form-group row">
				<label class="col-sm-2 col-form-label">Keluarga (Nama Ibu)</label>
				<div class="col-sm-6">
					<select name="pend" id="pend" class="form-control select2bs4" required>
						<option selected="selected">- Pilih KK -</option>
						<?php foreach($penduduk as $pnd) : ?>
              <?php echo '<option value="'.$pnd['id_pend'].'">'.$pnd['nama'].' - '.$pnd['nik'].' - '.$pnd['no_kk'].'</option>'; ?>
            <?php endforeach; ?>
					</select>
				</div>
			</div> -->

			<div class="card-footer">
				<input type="submit" name="Perbarui" value="Perbarui" class="btn btn-info">
				<a href="<?php echo base_url('Lahir'); ?>" title="Kembali" class="btn btn-secondary">Batal</a>
			</div>
	</form>
</div>