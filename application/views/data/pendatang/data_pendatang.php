<div class="card card-dark">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-table"></i> Data Pendatang</h3>
	</div>
	<!-- /.card-header -->
	<div class="card-body">
		<div class="table-responsive">

			<?php if($this->session->flashdata('flash')) : ?>
			  <div class="row mt-3">
			    <div class="pr-2 pl-2" style="width: 100%;">
			      <div class="alert alert-success alert-dismissible fade show" role="alert">
			        Data Pendatang <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
			        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			    </div>
			  </div>
			<?php endif; ?>

			<div>
				<a href="<?php echo base_url('Pendatang/tambah'); ?>" class="btn btn-primary" style="color: white">
					<i class="fa fa-edit" style="color: white"></i> Tambah Data</a>
			</div>
			<br>
			<table id="example1" class="table table-bordered table-striped">
				<thead>
					<tr class="bg-dark">
						<th>No</th>
						<th>NIK</th>
						<th>Nama</th>
						<th>Jekel</th>
						<th>Tanggal</th>
						<th>RT/RW</th>
						<th>Pelapor</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php $no=1; ?>
					<?php foreach($pendatang as $pend) : ?>
					<tr>
						<td>
							<?php echo $no; ?>
						</td>
						<td>
							<?php echo $pend->nik; ?>
						</td>
						<td>
							<?php echo $pend->nama_datang; ?>
						</td>
						<td>
							<?php echo $pend->jekel; ?>
						</td>
						<td>
							<?php echo $pend->tgl_datang; ?>
						</td>
						<td>
							RT
							<?php echo $pend->rt; ?>/ RW
							<?php echo $pend->rw; ?>.
						</td>
						<td>
							<?php echo $pend->nama; ?>
						</td>
						<td>
							<a href="<?= base_url('Pendatang/ubah/'); ?><?= $pend->id_datang; ?>" title="Ubah"
							 class="btn btn-success btn-sm">
								<i class="fa fa-edit"></i>
							</a>
							<a href="<?= base_url('Pendatang/hapus/'); ?><?= $pend->id_datang; ?>" onclick="return confirm('Apakah anda yakin hapus data ini ?')"
							 title="Hapus" class="btn btn-danger btn-sm">
								<i class="fa fa-trash"></i>
						</td>
					</tr>
					<?php $no++; ?>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>