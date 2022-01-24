		<!-- jQuery -->
		<script src="<?= base_url('plugins/jquery/jquery.min.js'); ?>"></script>
		<!-- Bootstrap 4 -->
		<script src="<?= base_url('plugins/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
		<!-- AdminLTE App -->
		<script src="<?= base_url('dist/js/adminlte.min.js'); ?>"></script>
		<!-- Alert -->
		<script src="<?= base_url('plugins/alert.js'); ?>"></script>

		<script src="<?= base_url('dist/paswdin.js'); ?>"></script>

<!-- 		<script>
			$(document).ready(function() {
			  document.getElementById("nama").on('keyup', function() {
			    let empty = false;

			    document.getElementById("nama").each(function() {
			      empty = $(this).val().length == 0;
			    });

			    if (empty)
			      document.getElementById('masuk').setAttribute('disabled', true);
			    else
			      document.getElementById('masuk').removeAttribute('disabled');
			  });
			});
		</script> -->

		<script type="text/javascript">
			const SubmitButton = document.getElementsById("submit");
			const input = document.getElementsById("nama");
			input.addEventListener("keyup", (e) => {
				const value = e.currentTarget.value;
				SubmitButton.setAttribute('disabled', true);
				// SubmitButton.disabled = false;
				if (value !== "") {
					// SubmitButton.disabled = true;
					document.getElementById('submit').removeAttribute('disabled');
				}
			});
		</script>

</body>

</html>