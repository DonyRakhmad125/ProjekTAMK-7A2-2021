<?php

	$tanggal = date("m/Y");
	$tgl = date("d/m/Y");

	$data_mendu = $meninggal['id_pdd'];
	// $datas = $meninggal['sebab'];

	$queryData = "SELECT *
                    FROM `tb_mendu` JOIN `tb_pdd`
                      ON `tb_mendu`.`id_pdd` = `tb_pdd`.`id_pend`
                   WHERE `tb_pdd`.`id_pend` = $data_mendu
                  ";

    $dataPenduduk = $this->db->query($queryData)->result_array();

    var_dump($dataPenduduk);
    die;
?>


<!DOCTYPE html>
<html lang="en">

<head>
	<title>CETAK SURAT</title>
</head>

<body>
	<td><img src="<?php echo base_url('dist/img/logo.png'); ?>" width="70px"></td>
	<center>

		<h2>PEMERINTAH KABUPATEN PERCONTOHAN</h2>
		<h3>KECAMATAN PERCONTOHAN
			<br>DESA PERCONTOHAN</h3>
		<p>________________________________________________________________________</p>

	</center>

	<center>
		<h4>
			<u>SURAT KETARANGAN KEMATIAN</u>
		</h4>
		<h4>No Surat :
			<?php foreach($dataPenduduk as $pnd) : ?>
			<?php echo $pnd['id_mendu']; ?>/Ket.Kematian/<?php echo $tanggal; ?>
		</h4>
	</center>
	<p>Yang bertandatangan dibawah ini Kepala Desa ............., Kecamatan .........., Kabupaten .............., dengan ini menerangkan
		bahawa :</P>
	<table>
		<tbody>
			<tr>
				<td>NIK</td>
				<td>:</td>
				<td>
					<?php echo $pnd['nik']; ?>
				</td>
			</tr>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td>
					<?php echo $pnd['nama']; ?>
				</td>
			</tr>
			<tr>
				<td>Tanggal Kematian</td>
				<td>:</td>
				<td>
					<?php echo $pnd['tgl_mendu']; ?>
				</td>
			</tr>
			<tr>
				<td>Sebab</td>
				<td>:</td>
				<td>
					<?php echo $pnd['sebab']; ?>
				</td>
			</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
	<p>Benar-benar telah
		<b>Meninggal Dunia</b>, pada waktu yang telah disebutkan diatas.</P>
	<p>Demikian Surat ini dibuat, agar dapat digunakan sebagaimana mestinya.</P>
	<br>
	<br>
	<br>
	<br>
	<br>
	<p align="right">
		Maju Jaya,
		<?php echo $tgl; ?>
		<br> KEPALA DESA ..............
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
