				</div>
			</section>
			<!-- /.content -->
		</div>
		<!-- /.content-wrapper -->

		<footer class="main-footer bg-dark">
			<b>BANGGA KALITENGAH</b>
		</footer>

		<!-- Control Sidebar -->
		<aside class="control-sidebar control-sidebar-dark">
			<!-- Control sidebar content goes here -->
		</aside>
		<!-- /.control-sidebar -->
	</div>
	<!-- ./wrapper -->

	<!-- jQuery -->
	<script src="<?= base_url('plugins/jquery/jquery.min.js'); ?>"></script>
	<!-- Bootstrap 4 -->
	<script src="<?= base_url('plugins/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
	<!-- Select2 -->
	<script src="<?= base_url('plugins/select2/js/select2.full.min.js'); ?>"></script>
	<!-- DataTables -->
	<script src="<?= base_url('plugins/datatables/jquery.dataTables.js'); ?>"></script>
	<script src="<?= base_url('plugins/datatables-bs4/js/dataTables.bootstrap4.js'); ?>"></script>
	<!-- AdminLTE App -->
	<script src="<?= base_url('dist/js/adminlte.min.js'); ?>"></script>
	<!-- AdminLTE for demo purposes -->
	<script src="<?= base_url('dist/js/demo.js'); ?>"></script>
	<!-- page script -->
	<script src="<?= base_url('plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js'); ?>"></script>
	<script src="<?= base_url('plugins/jquery-datatable/extensions/export/buttons.flash.min.js'); ?>"></script>
	<script src="<?= base_url('plugins/jquery-datatable/extensions/export/jszip.min.js'); ?>"></script>
	<script src="<?= base_url('plugins/jquery-datatable/extensions/export/pdfmake.min.js'); ?>"></script>
	<script src="<?= base_url('plugins/jquery-datatable/extensions/export/vfs_fonts.js'); ?>"></script>
	<script src="<?= base_url('plugins/jquery-datatable/extensions/export/buttons.html5.min.js'); ?>"></script>
	<script src="<?= base_url('plugins/jquery-datatable/extensions/export/buttons.print.min.js'); ?>"></script>

	<script>
		$(function() {
			$("#example1").DataTable();
			$('#example2').DataTable({
				"paging": true,
				"lengthChange": false,
				"searching": false,
				"ordering": true,
				"info": true,
				"autoWidth": false,
			});
		});
	</script>

	<script>
		$(function() {
			//Initialize Select2 Elements
			$('.select2').select2()

			//Initialize Select2 Elements
			$('.select2bs4').select2({
				theme: 'bootstrap4'
			})
		})
	</script>

	<!-- <script src="<?= base_url('dist/scriptR.js'); ?>"></script> -->
	<script src="<?= base_url('dist/scriptD.js'); ?>"></script>

</body>

</html>	