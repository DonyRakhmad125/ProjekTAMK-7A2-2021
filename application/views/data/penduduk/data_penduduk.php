				<div class="card card-dark">
					<div class="card-header">
						<h3 class="card-title" style="color: white">
							<i class="fa fa-table" style="color: white"></i> Data Penduduk
						</h3>
					</div>
					<!-- /.card-header -->
					<div class="card-body">
						<div class="table-responsive" style="color: black">

							<?php if($this->session->flashdata('flash')) : ?>
							  <div class="row mt-3">
							    <div class="pr-2 pl-2" style="width: 100%;">
							      <div class="alert alert-success alert-dismissible fade show" role="alert">
							        Data Penduduk <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
							        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
							          <span aria-hidden="true">&times;</span>
							        </button>
							      </div>
							    </div>
							  </div>
							<?php endif; ?>
							
							<div>
								<a href="<?php echo base_url('Penduduk/tambah/'); ?>" class="btn btn-primary" style="color: white"><i class="fa fa-edit" style="color: white"></i> 
								Tambah Data</a>
							</div>
							<br>
							<table id="example1" class="table table-bordered table-striped">
								<thead>
									<tr class="bg-dark">
										<th>No</th>
										<th>NIK</th>
										<th>Nama</th>
										<th>Status</th>
										<th>Alamat</th>
										<th>No KK</th>
										<th>Aksi</th>
									</tr>
								</thead>
								<tbody>
									<?php $no = 1; ?>
									<?php foreach($penduduk as $pdd) : ?>
									<tr>
										<td>
											<?php echo $no; ?>
										</td>
										<td>
											<?php echo $pdd['nik']; ?>
										</td>
										<td>
											<?php echo $pdd['nama']; ?>
										</td>
										<td>
											<?php echo $pdd['hubungan']; ?>
										</td>
										<td>
											<?php echo $pdd['desa']; ?>
											RT
											<?php echo $pdd['rt']; ?>/ RW
											<?php echo $pdd['rw']; ?>.
										</td>
										<td>
											<?php echo $pdd['no_kk']; ?> 
											<!-- <?php echo $pdd['kepala']; ?> -->
										</td>

										<td width='15%'>
											<a href="<?= base_url('Penduduk/detail/'); ?><?= $pdd['id_pend']; ?>" title="Detail"
											 class="btn btn-info btn-sm">
												<i class="fa fa-eye"></i>
											</a>
											<a href="<?= base_url('Penduduk/ubah/'); ?><?= $pdd['id_pend']; ?>" title="Ubah"
											 class="btn btn-success btn-sm">
												<i class="fa fa-edit"></i>
											</a>
											<a href="<?= base_url('Penduduk/hapus/'); ?><?= $pdd['id_pend']; ?>" onclick="return confirm('Apakah anda yakin hapus data ini ?')"
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