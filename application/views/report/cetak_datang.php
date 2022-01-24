<?php
	$tanggal = date("m/Y");
	$tgl = date("d/m/Y");
?>


<!DOCTYPE html>
<html lang="en">

<head>
	<title>CETAK SURAT</title>
</head>

<body>
	<td><img src="<?php echo base_url('dist/img/logo.png'); ?>" width="70px"></td>
	<center>

		<h2>PEMERINTAH KABUPATEN SIDOARJO</h2>
		<h3>KECAMATAN TANGGULANGIN
			<br>DESA KALITENGAH</h3>
		<p>________________________________________________________________________</p>

	</center>

	<center>
		<h4>
			<u>SURAT KETARANGAN PENDATANG</u>
		</h4>
		<h4>No Surat :
			<?php echo $datang['id_datang']; ?>/Ket.Pendatang/<?php echo $tanggal; ?>
		</h4>
	</center>
	<p>Yang bertandatangan dibawah ini Kepala Desa ........., Kecamatan ............., Kabupaten .........., dengan ini menerangkan
		bahawa :</P>
	<table>
		<tbody>
			<tr>
				<td>NIK</td>
				<td>:</td>
				<td>
					<?php echo $datang['nik']; ?>
				</td>
			</tr>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td>
					<?php echo $datang['nama_datang']; ?>
				</td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>:</td>
				<td>
					<?php echo $datang['jekel']; ?>
				</td>
			</tr>
			<tr>
				<td>Tanggal Datang</td>
				<td>:</td>
				<td>
					<?php echo $datang['tgl_datang']; ?>
				</td>
			</tr>
		</tbody>
	</table>
	<p>Benar-benar Telah datang dan berencana untuk tinggal di Desa Kalitengah, Kecamatan Tanggulangin, Kabupuaten Sidoarjo.</P>
	<p>Demikian Surat ini dibuat, agar dapat digunakan sebagaimana mestinya.</P>
	<br>
	<br>
	<br>
	<br>
	<br>
	<p align="right">
		Maju Jaya,
		<?php echo $tgl; ?>
		<br> KEPALA DESA ...............
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>(....................................................)
	</p>


	<script>
		window.print();
	</script>

</body>

</html>