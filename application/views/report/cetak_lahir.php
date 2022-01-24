<?php
	$tanggal = date("m/Y");
	$tgl = date("d/m/Y");

	// $pdk = $lahir['id_pdd'];

	// $queryData = "SELECT *
 //                    FROM `tb_lahir` JOIN `tb_pdd`
 //                      ON `tb_lahir`.`id_pdd` = `tb_pdd`.`id_pend`
 //                   WHERE `tb_pdd`.`id_pend` = $pdk
 //                  ";
 //    $dataPenduduk = $this->db->query($queryData)->result_array();

    // var_dump($dataPenduduk);
    // die;
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
			<u>SURAT KETARANGAN KELAHIRAN</u>
		</h4>
		<h4>No Surat :
			<?php echo $lahir['id_lahir']; ?>/Ket.Kelahiran/<?php echo $tanggal; ?>
		</h4>
	</center>
	<p>Yang bertandatangan dibawah ini Kepala Desa .................., Kecamatan ..........., Kabupaten ..............., dengan ini menerangkan
		bahawa :</P>
	<table>
		<tbody>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td>
					<?php echo $lahir['nama_bayi']; ?>
				</td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>:</td>
				<td>
					<?php echo $lahir['jekel']; ?>
				</td>
			</tr>
			<tr>
				<td>Tanggal Lahir</td>
				<td>:</td>
				<td>
					<?php echo $lahir['tgl_lhr']; ?>
				</td>
			</tr>
		</tbody>
	</table>
	<p>Telah benar-benar Lahir di Desa ..........., Kecamatan ..........., Kabupuaten ................</P>
	<p>Demikian Surat ini dibuat, agar dapat digunakan sebagaimana mestinya.</P>
	<br>
	<br>
	<br>
	<br>
	<br>
	<p align="right">
		Maju Jaya,
		<?php echo $tgl; ?>
		<br> KEPALA DESA .................
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
