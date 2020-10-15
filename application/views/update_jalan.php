<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Aplikasi Faktur</title>
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/template_admin/css/dropdown.css">
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700" rel="stylesheet">
	
	<!-- Template Styles -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/template_admin/css/font-awesome.min.css">
	
	<!-- CSS Reset -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/template_admin/css/normalize.css">
	
	<!-- Milligram CSS minified -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/template_admin/css/milligram.min.css">
	
	<!-- Main Styles -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/template_admin/css/styles.css">
	
	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>

<body>
	<div class="navbar">
		<div class="row">
			<div class="column column-30 col-site-title"><a href="#" class="site-title float-left">Aplikasi Faktur</a></div>
			<div class="column column-30">
				<div class="user-section"><a href="#">
					<img src="https://www.webmedia.link/sites/default/files/pictures/picture-1-1505503146.png" alt="profile photo" class="circle float-left profile-photo" width="50" height="auto">
					<div class="username">
						<h4>Admin Faktur</h4>
						<p>Profile</p>

					</div>
				</a></div>
			</div>
		</div>
	</div>
	<div class="row">
		<div id="sidebar" class="column">
			<h5>Navigation</h5>
			<ul>	
				<li><a href="<?php echo base_url('Faktur/ListFaktur'); ?>"><em class="fa fa-pencil-square-o"></em> Faktur</a>

				<li><a href="<?php echo base_url('User/ListUser'); ?>"><em class="fa fa-user"></em> User</a></li>				
				<li><a href="<?php echo base_url('Produk/ListProduk'); ?>"><em class="fa fa-columns"></em> Product</a></li>
				
				<li><a href="<?php echo base_url('History/history'); ?>"><em class="fa fa-history"></em> History</a></li>
				<li><a href="<?php echo base_url('Auth/logout'); ?>"><em class="fa fa-sign-out"></em> Sign out</a></li>
			</ul>
		</div>
		<section id="main-content" class="column column-offset-20">
			<div class="row grid-responsive">
			</div>
<body> 
	<center>
		<h1>Data Faktur Surat Jalan</h1>
		<h3>Edit Data</h3>
	</center>
	<?php foreach($dataFakturJalan as $surat_jalan){ ?>
	<form action="<?php echo base_url(). 'Faktur_Surat_Jalan/update'; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td align="left">Nama Instansi</td>
				<td>
					<input type="hidden" name="id" value="<?php echo $surat_jalan->id ?>">
					<input type="text" name="pembeli" value="<?php echo $surat_jalan->pembeli ?>">
				</td>
			</tr>

			<tr>
				<td align="left">Nama User</td>
				<td><input type="text" name="nm_user" value="<?php echo $surat_jalan->nm_user ?>"></td>
			</tr>
			
			<tr>
				<td>Jumlah Barang</td>
				<td><input type="text" name="jml_brg" value="<?php echo $surat_jalan->jml_brg ?>"></td>
			</tr>

			<tr>
				<td>NO_HP</td>
				<td><input type="text" name="NO_HP" value="<?php echo $surat_jalan->NO_HP ?>"></td>
			</tr>

			<tr>
				<td>Alamat</td>
				<td width="600px;"><textarea type="text" name="alamat" value="<?php echo $surat_jalan->alamat ?>"></textarea></td>
			</tr>

			<tr>
				<td>Total Harga</td>
				<td><input type="text" name="total_harga" value="<?php echo $surat_jalan->total_harga ?>"></td>
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