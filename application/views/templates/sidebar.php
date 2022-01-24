		<!-- Main Sidebar Container -->
		<aside class="main-sidebar sidebar-dark-primary elevation-4">
			<!-- Brand Logo -->
			<a href="<?= base_url('admin'); ?>" class="brand-link">
				<img src="<?= base_url('dist/img/logo.png'); ?>" alt="AdminLTE Logo" class="brand-image" style="opacity: .8">
				<marquee direction='right'>
					<span class="brand-text"><b>PEMDES KALITENGAH</b></span>
				</marquee>
			</a>

			<!-- Sidebar -->
			<div class="sidebar">
				<!-- Sidebar user (optional) -->
				<div class="user-panel mt-2 pb-2 mb-2 d-flex">
					<div class="image">
						<img src="<?= base_url('dist/img/admin.ico'); ?>">
					</div>
					<div class="info">
						<a href="<?= base_url('admin'); ?>" class="d-block">
							<b>PEMDES KALITENGAH</b>
						</a>
						<span class="badge badge-success">
							<b>Admin</b>
						</span>
					</div>
				</div>

				<!-- Sidebar Menu -->
				<nav class="mt-2">
					<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

						<li class="nav-item">
							<a href="<?= base_url('admin'); ?>" class="nav-link">
								<i class="nav-icon fas fa-tachometer-alt"></i>
								<p>
									Dashboard
								</p>
							</a>
						</li>

						<li class="nav-item has-treeview">
							<a href="#" class="nav-link">
								<i class="nav-icon fas fa-table"></i>
								<p>
									Kelola Data
									<i class="fas fa-angle-left right"></i>
								</p>
							</a>
							<ul class="nav nav-treeview">
								<li class="nav-item">
									<a href="<?= base_url('penduduk'); ?>" class="nav-link">
										<i class="nav-icon far fa-circle text-warning"></i>
										<p>Data Penduduk</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="<?= base_url('komorbid'); ?>" class="nav-link">
										<i class="nav-icon far fa-circle text-warning"></i>
										<p>Data Komorbid dan Covid</p>
									</a>
								</li>
							</ul>
						</li>
						<li class="nav-item has-treeview">
							<a href="index.php" class="nav-link">
								<i class="nav-icon fas fa-cogs"></i>
								<p>
									Sirkulasi Penduduk
									<i class="fas fa-angle-left right"></i>
								</p>
							</a>
							<ul class="nav nav-treeview">
								<li class="nav-item">
									<a href="<?= base_url('lahir'); ?>" class="nav-link">
										<i class="nav-icon far fa-circle text-warning"></i>
										<p>Data Lahir</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="<?= base_url('meninggal'); ?>" class="nav-link">
										<i class="nav-icon far fa-circle text-warning"></i>
										<p>Data Meninggal</p>
									</a>
								</li>

								<li class="nav-item">
									<a href="<?= base_url('pendatang'); ?>" class="nav-link">
										<i class="nav-icon far fa-circle text-warning"></i>
										<p>Data Pendatang</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="<?= base_url('pindah'); ?>" class="nav-link">
										<i class="nav-icon far fa-circle text-warning"></i>
										<p>Data Pindah</p>
									</a>
								</li>
							</ul>
						</li>

						<li class="nav-item has-treeview">
							<a href="#" class="nav-link">
								<i class="nav-icon fas fa-file"></i>
								<p>
									Kelola Laporan
									<i class="fas fa-angle-left right"></i>
								</p>
							</a>
							<ul class="nav nav-treeview">

								<!-- <li class="nav-item">
									<a href="<?php echo base_url('Penduduk/olahPenduduk'); ?>" class="nav-link">
										<i class="nav-icon far fa-circle text-warning"></i>
										<p>Domisili</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="<?php echo base_url('Lahir/olahLahir'); ?>" class="nav-link">
										<i class="nav-icon far fa-circle text-warning"></i>
										<p>Kelahiran</p>
									</a>
								</li> -->
								<li class="nav-item">
									<a href="<?php echo base_url('Meninggal/olahMeninggal'); ?>" class="nav-link">
										<i class="nav-icon far fa-circle text-warning"></i>
										<p>Kematian</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="<?php echo base_url('Komorbid/olahKomorbid'); ?>" class="nav-link">
										<i class="nav-icon far fa-circle text-warning"></i>
										<p>Komorbid</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="<?php echo base_url('Komorbid/olahCovid'); ?>" class="nav-link">
										<i class="nav-icon far fa-circle text-warning"></i>
										<p>Covid</p>
									</a>
								</li>
								<!-- <li class="nav-item">
									<a href="<?php echo base_url('Pendatang/olahPendatang'); ?>" class="nav-link">
										<i class="nav-icon far fa-circle text-warning"></i>
										<p>Pendatang</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="<?php echo base_url('Pindah/olahPindah'); ?>" class="nav-link">
										<i class="nav-icon far fa-circle text-warning"></i>
										<p>Pindah</p>
									</a>
								</li> -->
							</ul>
						</li>

						<li class="nav-header">Setting</li>

						<li class="nav-item">
							<a onclick="return confirm('Apakah anda yakin akan keluar ?')" href="<?= base_url('auth/logout'); ?>" class="nav-link">
								<i class="nav-icon fas fa-arrow-circle-right"></i>
								<p>
									Logout
								</p>
							</a>
						</li>

				</nav>
				<!-- /.sidebar-menu -->
			</div>
			<!-- /.sidebar -->
		</aside>

		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<!-- Content Header (Page header) -->
			<section class="content-header">
			</section>

			<!-- Main content -->
			<section class="content">
				<!-- /. WEB DINAMIS DISINI ############################################################################### -->
				<div class="container-fluid">
