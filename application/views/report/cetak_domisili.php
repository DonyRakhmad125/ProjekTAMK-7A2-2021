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

		<h3>PEMERINTAH KABUPATEN SIDOARJO
			<br>KECAMATAN TANGGULANGIN
			<br>DESA KALITENGAH</h3>
		<p>________________________________________________________________________</p>

	</center>

	<center>
		<h4>
			<u>SURAT KETARANGAN DOMISILI</u>
		</h4>
		<h4>No Surat :
			<?php echo $penduduk['id_pend']; ?>/Ket.Domisili/<?php echo $tanggal; ?>
		</h4>
	</center>
	<p>Yang bertandatangan dibawah ini Kepala Desa .............., Kecamatan ............., Kabupaten ............, dengan ini menerangkan
		bahawa :</P>
	<table>
		<tbody>
			<tr>
				<td>NIK</td>
				<td>:</td>
				<td>
					<?php echo $penduduk['nik']; ?>
				</td>
			</tr>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td>
					<?php echo $penduduk['nama']; ?>
				</td>
			</tr>
			<tr>
				<td>TTL</td>
				<td>:</td>
				<td>
					<?php echo $penduduk['tempat_lh']; ?>/
					<?php echo $penduduk['tgl_lh']; ?>
				</td>
			</tr>
		</tbody>
	</table>
	<p>Adalah benar-benar warga Desa ......., Kecamatan ..........., Kabupuaten ..............</P>
	<p>Demikian Surat ini dibuat, agar dapat digunakan sebagai mana mestinya.</P>
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