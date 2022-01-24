<div class="card card-primary">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-file"></i> Su-Ket Domisili</h3>
	</div>
	<form action="" method="post" enctype="multipart/form-data">
		<div class="card-body">

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Penduduk</label>
				<div class="col-sm-6">
					<select name="id" id="id" class="form-control select2bs4" required>
						<option selected="selected">- Pilih Data -</option>
						<?php foreach($penduduk as $pnd) : ?>
			              <?php echo '<option value="'.$pnd['id_pend'].'">'.$pnd['nama'].' - NIK '.$pnd['nik'].' - KK '.$pnd['no_kk'].'</option>'; ?>
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