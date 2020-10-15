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

	<style type="text/css">
		a.MyButton {
	width: 200px;
	padding: 5px;
	cursor: pointer;
	font-weight: bold;
	font-size: 90%;
	background: #FF8C00;
	color: #fff;
	border: 1px solid #FF8C00;
	border-radius: 5px;
	}
	a.MyButton:hover {
	color: #ffff00;
	background: #000;
	border: 1px solid #fff;
	}

			a.MyButton1 {
	width: 200px;
	padding: 5px;
	cursor: pointer;
	font-weight: bold;
	font-size: 85%;
	background: red;
	color: #fff;
	border: 1px solid red;
	border-radius: 5px;
	}
	a.MyButton1:hover {
	color: #ffff00;
	background: #000;
	border: 1px solid #fff;
	}

		a.MyButton2 {
	width: 200px;
	padding: 5px;
	cursor: pointer;
	font-weight: bold;
	font-size: 85%;
	background: #5F9EAD;
	color: #fff;
	border: 1px solid #5F9EAD;
	border-radius: 5px;
	}
	a.MyButton2:hover {
	color: #ffff00;
	background: #000;
	border: 1px solid #fff;
	}

	</style>
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
<div class="row grid-responsive">
	<div class="column ">
		<div class="card">
		<div class="card-title">
	<center><h1>Data Produk</h1></center>
	</div>
		<div class="card-block">
	<div class="pull-left">
        <a href="<?php echo base_url('Produk/index'); ?>" class="MyButton2"><em class="fa fa-plus"></em>&nbsp; &nbsp;Add Product</a>
    </div>
	<table>
		<thead>
			<tr>
				<th width="50px">No</th>
				<th width="400px">Nama</th>
				<th>Serial Number</th>
				<th>Keterangan</th>
				<th width="150px">Aksi</th>
			</tr>
		</thead>
		
		<?php 
		$no = 1;
		foreach($dataProduk as $produk){ 
		?>
		<tbody>
			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $produk->nama ?></td>
				<td><?php echo $produk->serial_number ?></td>
				<td><?php echo $produk->keterangan ?></td>
				<td><a class="MyButton" href="<?php echo site_url('Produk/Update_produk/'.$produk->id);?>"><em class="fa fa-pencil-square-o"></em></a>&nbsp;&nbsp;
				<a class="MyButton1" href="<?php echo site_url('Produk/Delete_produk/'.$produk->id);?>"><em class="fa fa-trash-o"></em></a> <br><br>
				</td>
			</tr>
		</tbody>
		<?php } ?>
	</table>
</div>
</div>
</div>
</div>
</body>
</html>

<p align="center">&copy; Create by:<a href="http://bandungtechnologyzone.co.id">Us</a></p>