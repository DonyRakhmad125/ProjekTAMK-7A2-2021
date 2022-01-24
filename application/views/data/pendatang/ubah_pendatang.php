<div class="card card-primary">
	<div class="card-header">
		<h3 class="card-title" style="color: white">
			<i class="fa fa-edit" style="color: white"></i> Ubah Data Pendatang</h3>
	</div>
	<form action="" method="post" enctype="multipart/form-data" autocomplete="off">
		<div class="card-body">

			<?php
			$pdk = $datang['pelapor'];

			$queryData = "SELECT *
                            FROM `tb_datang` JOIN `tb_pdd`
                              ON `tb_datang`.`pelapor` = `tb_pdd`.`id_pend`
                           WHERE `tb_pdd`.`id_pend` = $pdk
                          ";
            $dataPenduduk = $this->db->query($queryData)->result_array();

            // var_dump($dataPenduduk);
            // die;
            ?>

			<input type="hidden" name="id" value="<?= $datang['id_datang']; ?>">
			<input type="hidden" name="pelapor" value="<?= $datang['pelapor']; ?>">

			<div class="text-primary"><h4><b>Data Pendatang</b></h4></div>
			<br>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">NIK</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="nik" name="nik" placeholder="NIK" value="<?php echo $datang['nik']; ?>" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama</label>
				<div class="col-sm-6">
					<input type="text" onkeyup="this.value = this.value.toUpperCase()" class="form-control" id="nama_datang" name="nama_datang" value="<?php echo $datang['nama_datang']; ?>" placeholder="Nama Pendatang" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Jenis Kelamin</label>
				<div class="col-sm-3">
					<select name="jekel" id="jekel" class="form-control">
						<option>- Pilih -</option>
						<?php
							if ($datang['jekel'] == "LAKI-LAKI") echo "<option value='LAKI-LAKI' selected>LAKI-LAKI</option>";
              else echo "<option value='LAKI-LAKI'>LAKI-LAKI</option>";

              if ($datang['jekel'] == "PEREMPUAN") echo "<option value='PEREMPUAN' selected>PEREMPUAN</option>";
              else echo "<option value='PEREMPUAN'>PEREMPUAN</option>";
						?>
					</select>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Tgl Datang</label>
				<div class="col-sm-3">
					<input type="date" class="form-control" id="tgl_datang" name="tgl_datang" value="<?php echo $datang['tgl_datang']; ?>" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">RT/RW</label>
				<div class="col-sm-3">
					<select name="rt" id="rt" class="form-control">
						<option>*Pilih Rt*</option>
						<?php
							if ($datang['rt'] == ".01") echo "<option value='.01' selected>.01</option>";
              else echo "<option value='.01'>.01</option>";

              if ($datang['rt'] == ".02") echo "<option value='.02' selected>.02</option>";
              else echo "<option value='.02'>.02</option>";

              if ($datang['rt'] == ".03") echo "<option value='.03' selected>.03</option>";
              else echo "<option value='.03'>.03</option>";

              if ($datang['rt'] == ".04") echo "<option value='.04' selected>.04</option>";
              else echo "<option value='.04'>.04</option>";

              if ($datang['rt'] == ".05") echo "<option value='.05' selected>.05</option>";
              else echo "<option value='.05'>.05</option>";

              if ($datang['rt'] == ".06") echo "<option value='.06' selected>.06</option>";
              else echo "<option value='.06'>.06</option>";

              if ($datang['rt'] == ".07") echo "<option value='.07' selected>.07</option>";
              else echo "<option value='.07'>.07</option>";

              if ($datang['rt'] == ".08") echo "<option value='.08' selected>.08</option>";
              else echo "<option value='.08'>.08</option>";

              if ($datang['rt'] == ".09") echo "<option value='.09' selected>.09</option>";
              else echo "<option value='.09'>.09</option>";

              if ($datang['rt'] == ".10") echo "<option value='.10' selected>.10</option>";
              else echo "<option value='.10'>.10</option>";

              if ($datang['rt'] == ".11") echo "<option value='.11' selected>.11</option>";
              else echo "<option value='.11'>.11</option>";

              if ($datang['rt'] == ".12") echo "<option value='.12' selected>.12</option>";
              else echo "<option value='.12'>.12</option>";
						?>
					</select>
				</div>
				<div class="col-sm-3">
					<select name="rw" id="rw" class="form-control">
						<option>*Pilih Rw*</option>
						<?php
							if ($datang['rw'] == ".01") echo "<option value='.01' selected>.01</option>";
              else echo "<option value='.01'>.01</option>";

              if ($datang['rw'] == ".02") echo "<option value='.02' selected>.02</option>";
              else echo "<option value='.02'>.02</option>";

              if ($datang['rw'] == ".03") echo "<option value='.03' selected>.03</option>";
              else echo "<option value='.03'>.03</option>";

              if ($datang['rw'] == ".04") echo "<option value='.04' selected>.04</option>";
              else echo "<option value='.04'>.04</option>";

              if ($datang['rw'] == ".05") echo "<option value='.05' selected>.05</option>";
              else echo "<option value='.05'>.05</option>";

              if ($datang['rw'] == ".06") echo "<option value='.06' selected>.06</option>";
              else echo "<option value='.06'>.06</option>";

              if ($datang['rw'] == ".07") echo "<option value='.07' selected>.07</option>";
              else echo "<option value='.07'>.07</option>";

              if ($datang['rw'] == ".08") echo "<option value='.08' selected>.08</option>";
              else echo "<option value='.08'>.08</option>";

              if ($datang['rw'] == ".09") echo "<option value='.09' selected>.09</option>";
              else echo "<option value='.09'>.09</option>";

              if ($datang['rw'] == ".10") echo "<option value='.10' selected>.10</option>";
              else echo "<option value='.10'>.10</option>";

              if ($datang['rw'] == ".11") echo "<option value='.11' selected>.11</option>";
              else echo "<option value='.11'>.11</option>";
						?>
					</select>
				</div>
			</div>

			<!-- <div class="form-group row">
				<label class="col-sm-2 col-form-label">Pelapor</label>
				<div class="col-sm-6">
					<select name="pelapor" id="pelapor" class="form-control select2bs4" required>
						<option>- Pilih Penduduk -</option>
						<?php foreach($penduduk as $pnd) : ?>
			              <?php echo '<option value="'.$pnd['id_pend'].'">'.$pnd['id_pend'].' - '.$pnd['nama'].' - '.$pnd['nik'].'</option>'; ?>
			            <?php endforeach; ?>
					</select>
				</div>
			</div> -->

			<hr>
			<div class="text-primary"><h4><b>Data Pelapor</b></h4></div>
			<br>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama Pelapor</label>
				<div class="col-sm-3">
					<?php foreach($dataPenduduk as $dp_nama) : ?>
					<input type="text" class="form-control" value="<?php echo $dp_nama['nama']; ?>" readonly/>
				<?php endforeach;?>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">NIK Pelapor</label>
				<div class="col-sm-3">
					<?php foreach($dataPenduduk as $dp_no_nik) : ?>
					<input type="text" class="form-control" value="<?php echo $dp_no_nik['nik']; ?>" readonly/>
				<?php endforeach;?>
				</div>
			</div>

		</div>
		<div class="card-footer">
			<input type="submit" name="Perbarui" value="Perbarui" class="btn btn-info">
			<a href="<?php echo base_url('Pendatang'); ?>" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>