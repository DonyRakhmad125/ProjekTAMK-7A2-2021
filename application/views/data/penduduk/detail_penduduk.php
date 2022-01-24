<div class="card card-success">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-user"></i> Detail Penduduk</h3>
		</h3>
		<div class="card-tools">
		</div>
	</div>
	<div class="card-body p-0">
		<table class="table">
			<tbody>
				<tr>
					<td style="width: 150px">
						<b>NO. KK</b>
					</td>
					<td>:
						<?php echo $penduduk['no_kk']; ?>
					</td>
				</tr>
				<tr>
					<td style="width: 150px">
						<b>Nama</b>
					</td>
					<td>:
						<?php echo $penduduk['nama']; ?>
					</td>
				</tr>
				<tr>
					<td style="width: 150px">
						<b>NIK</b>
					</td>
					<td>:
						<?php echo $penduduk['nik']; ?>
					</td>
				</tr>
				<tr>
					<td style="width: 150px">
						<b>TTL</b>
					</td>
					<td>:
						<?php echo $penduduk['tempat_lh']; ?>
						/
						<?php echo $penduduk['tgl_lh']; ?>
					</td>
				</tr>
				<tr>
					<td style="width: 150px">
						<b>Status</b>
					</td>
					<td>:
						<?php echo $penduduk['hubungan']; ?>
					</td>
				</tr>
				<tr>
					<td style="width: 150px">
						<b>Jenis Kelamin</b>
					</td>
					<td>:
						<?php echo $penduduk['jekel']; ?>
					</td>
				</tr>
				<tr>
					<td style="width: 150px">
						<b>Alamat</b>
					</td>
					<td>:
						<?php echo $penduduk['desa']; ?>, RT
						<?php echo $penduduk['rt']; ?>/ RW
						<?php echo $penduduk['rw']; ?>
					</td>
				</tr>
				<tr>
					<td style="width: 150px">
						<b>Agama</b>
					</td>
					<td>:
						<?php echo $penduduk['agama']; ?>
					</td>
				</tr>
				<tr>
					<td style="width: 150px">
						<b>Status Kawin</b>
					</td>
					<td>:
						<?php echo $penduduk['kawin']; ?>
					</td>
				</tr>
				<tr>
					<td style="width: 150px">
						<b>Pekerjaan</b>
					</td>
					<td>:
						<?php echo $penduduk['pekerjaan']; ?>
					</td>
				</tr>
			</tbody>
		</table>
		<div class="card-footer">
			<a href="<?php echo base_url('Penduduk'); ?>" class="btn btn-warning">Kembali</a>
		</div>
	</div>
</div>