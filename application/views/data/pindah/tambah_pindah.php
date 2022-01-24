<div class="card card-primary">
	<div class="card-header">
		<h3 class="card-title" style="color: white">
			<i class="fa fa-edit" style="color: white"></i> Tambah Data Pindah</h3>
	</div>
	<form action="" method="post" enctype="multipart/form-data">
		<div class="card-body">

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Penduduk</label>
				<div class="col-sm-6">
					<select name="pend" id="pend" class="form-control select2bs4" required>
						<option selected="selected">- Pilih Penduduk -</option>
						<?php foreach($penduduk as $pnd) : ?>
              <?php echo '<option value="'.$pnd['id_pend'].'">'.$pnd['nik'].' - '.$pnd['nama'].' - '.$pnd['no_kk'].'</option>'; ?>
            <?php endforeach; ?>
					</select>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Tgl Pindah</label>
				<div class="col-sm-3">
					<input type="date" class="form-control" id="tgl_pindah" name="tgl_pindah" required>
				</div>
			</div>

			<!-- <div class="form-group row">
				<label class="col-sm-2 col-form-label">Alamat Pindah</label>
				<div class="col-sm-6">
					<input type="text" onkeyup="this.value = this.value.toUpperCase()" class="form-control" id="pindah" name="pindah" placeholder="Alamat Pindah" required>
				</div>
			</div> -->

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Kecamatan Pindah</label>
				<div class="col-sm-6">
					<input type="text" onkeyup="this.value = this.value.toUpperCase()" class="form-control" id="kec_pindah" name="kec_pindah" placeholder="Kecamatan Pindah" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Alasan</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="alasan" name="alasan" placeholder="Alasan Pindah" required>
				</div>
			</div>

		</div>
		<div class="card-footer">
			<input type="submit" name="Simpan" value="Simpan" class="btn btn-info">
			<a href="<?php echo base_url('Pindah'); ?>" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>

<!-- <?php

    if (isset ($_POST['Simpan'])){
    //mulai proses simpan data
        $sql_simpan = "INSERT INTO tb_pindah (id_pdd, tgl_pindah, rt, rw, alasan) VALUES (
			'".$_POST['id_pdd']."',
            '".$_POST['tgl_pindah']."',
             '".$_POST['rt']."',
              '".$_POST['rw']."',
            '".$_POST['alasan']."')";
		$query_simpan = mysqli_query($koneksi, $sql_simpan);
		
		$sql_ubah = "UPDATE tb_pdd SET 
			status='Pindah'
			WHERE id_pend='".$_POST['id_pdd']."'";
		$query_ubah = mysqli_query($koneksi, $sql_ubah);
        mysqli_close($koneksi);

    if ($query_simpan && $query_ubah) {
      echo "<script>
      Swal.fire({title: 'Tambah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
      }).then((result) => {if (result.value){
          window.location = 'index.php?page=data-pindah';
          }
      })</script>";
      }else{
      echo "<script>
      Swal.fire({title: 'Tambah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
      }).then((result) => {if (result.value){
          window.location = 'index.php?page=add-pindah';
          }
      })</script>";
    }}
     //selesai proses simpan data
?> -->