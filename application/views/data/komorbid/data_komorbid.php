<div class="card card-dark">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-table"></i> Data Komorbid dan Covid</h3>
	</div>
	<!-- /.card-header -->
	<div class="card-body">
		<div class="table-responsive">

			<?php if($this->session->flashdata('flash')) : ?>
			  <div class="row mt-3">
			    <div class="pr-2 pl-2" style="width: 100%;">
			      <div class="alert alert-success alert-dismissible fade show" role="alert">
			        Data Komorbid dan Covid <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
			        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			    </div>
			  </div>
			<?php endif; ?>

			<div>
				<a href="<?php echo base_url('Komorbid/tambah'); ?>" class="btn btn-primary" style="color: white">
					<i class="fa fa-edit" style="color: white"></i> Tambah Data</a>
			</div>
			<br>
			<table id="example1" class="table table-bordered table-striped">
				<thead>
					<tr class="bg-dark">
						<th>No</th>
						<th>NIK</th>
						<th>Nama</th>
						<th>Alamat</th>
						<th>Gejala</th>
						<th>Resiko</th>
						<th>Covid</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php $no=1; ?>
					<?php foreach($komorbid as $kmbr) : ?>
					<tr>
						<td>
							<?php echo $no; ?>
						</td>
						<td>
							<?php echo $kmbr->nik; ?>
						</td>
						<td>
							<?php echo $kmbr->nama; ?>
						</td>
						<td>
							<?php echo $kmbr->desa; ?>
							RT
							<?php echo $kmbr->rt; ?>/ RW
							<?php echo $kmbr->rw; ?>.
						</td>
						<td>
							<?php echo $kmbr->gejala; ?>
						</td>
						<td>
							<?php echo $kmbr->resiko; ?>
						</td>
						<td>
							<?php echo $kmbr->covid; ?>
						</td>
						<td>
							<a href="<?= base_url('Komorbid/ubah/'); ?><?= $kmbr->id_komorbid; ?>" title="Ubah"
							 class="btn btn-success btn-sm">
								<i class="fa fa-edit"></i>
							</a>
							<a href="<?= base_url('Komorbid/hapus/'); ?><?= $kmbr->id_komorbid; ?>" onclick="return confirm('Apakah anda yakin hapus data ini ?')"
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
	<!-- /.card-body -->
	
</div>