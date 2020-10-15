<!DOCTYPE html>
<html>
<head>
	<title>User</title>
</head>
<body>
	<center>
		<h1>Data Faktur Penawaran</h1>
		<h3>Edit Data</h3>
	</center>
	<?php foreach($dataPenawaran as $penawaran){ ?>
	<form action="<?php echo base_url(). 'Faktur_Penawaran/update'; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>Nama Pembeli</td>
				<td>
					<input type="hidden" name="id" value="<?php echo $penawaran->id ?>">
					<input type="text" name="pembeli" value="<?php echo $penawaran->pembeli ?>">
				</td>
			</tr>
			<tr>
				<td>Nama Barang</td>
				<td><input type="text" name="nm_brg" value="<?php echo $penawaran->nm_brg ?>"></td>
			</tr>
			<tr>
				<td>Jumlah Barant</td>
				<td><input type="text" name="jml_brg" value="<?php echo $penawaran->jml_brg ?>"></td>
			</tr>
			<tr>
				<td>Harga Satuan</td>
				<td><input type="text" name="hrg_satuan" value="<?php echo $penawaran->hrg_satuan ?>"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat" value="<?php echo $penawaran->alamat ?>"></td>
			</tr>
			<tr>
				<td>PPN</td>
				<td><input type="text" name="PPN" value="<?php echo $penawaran->PPN ?>"></td>
			</tr>
			<tr>
				<td>DP</td>
				<td><input type="text" name="DP" value="<?php echo $penawaran->DP ?>"></td>
			</tr>
			<tr>
				<td>No. Hp</td>
				<td><input type="text" name="NO_HP" value="<?php echo $penawaran->NO_HP ?>"></td>
			</tr>
			<tr>
				<td>Total harga</td>
				<td><input type="text" name="total_harga" value="<?php echo $penawaran->total_harga ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>
			</tr>
		</table>
	</form>	
	<?php } ?>
</body>
</html>