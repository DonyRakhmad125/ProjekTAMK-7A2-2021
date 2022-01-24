<div class="card card-primary">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-file"></i> Su-Ket Pendatang</h3>
	</div>
	<form action="" method="post" enctype="multipart/form-data">
		<div class="card-body">

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Pendatang</label>
				<div class="col-sm-6">
					<select name="id" id="id" class="form-control select2bs4" required>
						<option selected="selected">- Pilih Data -</option>
						<?php foreach($datang as $dtg) : ?>
			              <?php echo '<option value="'.$dtg['id_datang'].'">'.$dtg['nama_datang'].' - NIK '.$dtg['nik'].'</option>'; ?>
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