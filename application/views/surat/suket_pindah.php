<div class="card card-primary">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-file"></i> Su-Ket Pindah</h3>
	</div>
	<form action="" method="post" enctype="multipart/form-data">
		<div class="card-body">

			<?php
			$queryData = "SELECT *
		                    FROM `tb_pindah` JOIN `tb_pdd`
		                      ON `tb_pindah`.`id_pdd` = `tb_pdd`.`id_pend`
		                   WHERE `tb_pdd`.`id_pend` = `id_pdd`
		                  ";

		    $dataPenduduk = $this->db->query($queryData)->result_array();

		    // var_dump($dataPenduduk);
		    // die;
		    ?>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Penduduk</label>
				<div class="col-sm-6">
					<select name="id" id="id" class="form-control select2bs4" required>
						<option selected="selected">- Pilih Data -</option>
						<?php foreach($dataPenduduk as $pd) : ?>
			              <?php echo '<option value="'.$pd['id_pindah'].'">'.$pd['nama'].' - NIK '.$pd['nik'].'</option>'; ?>
			            <?php endforeach; ?>
					</select>
				</div>
			</div>

		</div>
		<div class="card-footer">
			<input type="submit" name="Cetak" value="Cetak" class="btn btn-info">
		</div>
	</form>
</div>