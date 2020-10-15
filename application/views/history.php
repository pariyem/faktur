<!DOCTYPE html>
<html>
<head> 
	<meta charset="utf-8">
	<title>Aplikasi Faktur</title>
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700" rel="stylesheet">
	
	<!-- Template Styles -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/template_admin/css/font-awesome.min.css">
	
	<!-- CSS Reset -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/template_admin/css/normalize.css">
	
	<!-- Milligram CSS minified -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/template_admin/css/milligram.min.css">
	
	<!-- Main Styles -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/template_admin/css/history.css">
	
	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<style>
	a.MyButton {
	width: 200px;
	padding: 5px;
	cursor: pointer;
	font-weight: bold;
	font-size: 70%;
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
	background: #006400;
	color: #fff;
	border: 1px solid #006400;
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
				
				<li><a href="#buttons"><em class="fa fa-history"></em> History</a></li>
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
		<center><h3>Faktur Penawaran</h3></center>
		</div>
		<div class="card-block">
	<table>
		<thead>
			<tr>
				<th width="10px">No.</th>
				<th width="100px">Pembeli</th>
				<th width="140px">Nama Barang</th>
				<th width="10px">Jumlah Barang</th>
				<th width="100px">Harga Satuan</th>
				<th width="70px">Alamat</th>
				<th width="50px">PPN</th>
				<th width="40px">DP</th>
				<th width="40px">No HP</th>
				<th width="50px">Total Harga</th>
				<th width="100px">Aksi</th>
			</tr>
		</thead>
			
		<?php 
		$no = 1;
		foreach($dataFakturPenawaran as $penawaran){ 
		?>
		<tbody>
			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $penawaran->pembeli ?></td>
				<td><?php echo $penawaran->nm_brg ?></td>
				<td><?php echo $penawaran->jml_brg ?></td>
				<td><?php echo $penawaran->hrg_satuan ?></td>
				<td><?php echo $penawaran->alamat ?></td>
				<td><?php echo $penawaran->PPN ?></td>
				<td><?php echo $penawaran->DP ?></td>
				<td><?php echo $penawaran->NO_HP ?></td>
				<td><?php echo $penawaran->total_harga ?></td>
				<td><a class="MyButton" href="<?php echo site_url('Faktur_penawaran/Update_penawaran/'.$penawaran->id);?>"><em class="fa fa-pencil-square-o"></em></a>&nbsp;
					<a class="MyButton1" href="<?php echo site_url('Faktur_penawaran/Delete_penawaran/'.$penawaran->id);?>"><em class="fa fa-trash-o"></em></a>&nbsp;
					<a class="MyButton2" href="<?php echo site_url('Faktur_penawaran/Print_penawaran/'.$penawaran->id);?>"><em class="fa fa-print"></em></a>
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

<br>

<body>
<div class="row grid-responsive">
	<div class="column ">
		<div class="card">
		<div class="card-title">
	<center><h3>Faktur Pemesanan</h3></center>
	</div>
		<div class="card-block">
	<table>
		<thead>
			<tr>
				<th width="10px">No.</th>
				<th width="100px">Pembeli</th>
				<th width="140px">Nama Barang</th>
				<th width="10px">Jumlah Barang</th>
				<th width="100px">Harga Satuan</th>
				<th width="40px">Alamat</th>
				<th width="50px">PPN</th>
				<th width="40px">DP</th>
				<th width="40px">No HP</th>
				<th width="50px">Total Harga</th>
				<th width="100px">Aksi</th>
			</tr>
		</thead>
			
		<?php 
		$no = 1;
		foreach($dataFakturPemesanan as $pemesanan){ 
		?>
		<tbody>
			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $pemesanan->pembeli ?></td>
				<td><?php echo $pemesanan->nm_brg ?></td>
				<td><?php echo $pemesanan->jml_brg ?></td>
				<td><?php echo $pemesanan->hrg_satuan ?></td>
				<td><?php echo $pemesanan->alamat ?></td>
				<td><?php echo $pemesanan->PPN ?></td>
				<td><?php echo $pemesanan->DP ?></td>
				<td><?php echo $pemesanan->NO_HP ?></td>
				<td><?php echo $pemesanan->total_harga ?></td>
				<td><a class="MyButton" href="<?php echo site_url('Faktur_Pemesanan/Update_pemesanan/'.$pemesanan->id);?>"><em class="fa fa-pencil-square-o"></em></a>&nbsp;
					<a class="MyButton1" href="<?php echo site_url('Faktur_Pemesanan/Delete_pemesanan/'.$pemesanan->id);?>"><em class="fa fa-trash-o"></em></a>&nbsp;
					<a class="MyButton2" href="<?php echo site_url('Faktur_Pemesanan/Print_pemesanan/'.$pemesanan->id);?>"><em class="fa fa-print"></em></a>
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

<br>

<body>
<div class="row grid-responsive">
	<div class="column ">
		<div class="card">
		<div class="card-title">
	<center><h3>Faktur Surat Jalan</h3></center>
	</div>
		<div class="card-block">
	<table>
		<thead>
			<tr>
				<th width="10px">No.</th>
				<th width="100px">Pembeli</th>
				<th width="70px">Nama Barang</th>
				<th width="70px">Jumlah Barang</th>
				<th width="50px">No. Hp</th>
				<th width="100px">Alamat</th>
				<th width="50px">Total Harga</th>
				<th width="70px">Aksi</th>
			</tr>
		</thead>
			
		<?php 
		$no = 1;
		foreach($dataFakturJalan as $surat_jalan){ 
		?>
		<tbody>
			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $surat_jalan->pembeli ?></td>
				<td><?php echo $surat_jalan->nm_brg ?></td>
				<td><?php echo $surat_jalan->jml_brg ?></td>
				<td><?php echo $surat_jalan->NO_HP ?></td>
				<td><?php echo $surat_jalan->alamat ?></td>
				<td><?php echo $surat_jalan->total_harga ?></td>
				<td><a class="MyButton" href="<?php echo site_url('Faktur_Surat_Jalan/Update_jalan/'.$surat_jalan->id);?>"><em class="fa fa-pencil-square-o"></em></a>&nbsp;
					<a class="MyButton1" href="<?php echo site_url('Faktur_Surat_Jalan/Delete_jalan/'.$surat_jalan->id);?>"><em class="fa fa-trash-o"></em></a>&nbsp;
					<a class="MyButton2" href="<?php echo site_url('Faktur_Surat_Jalan/Print_surat_jalan/'.$surat_jalan->id);?>"><em class="fa fa-print"></em></a>
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

<br>

<body>
<div class="row grid-responsive">
	<div class="column ">
		<div class="card">
		<div class="card-title">
	<center><h3>Faktur Penagihan</h3></center>
	</div>
		<div class="card-block">
	<table>
		<thead>
			<tr>
				<th width="10px">No.</th>
				<th width="100px">Pembeli</th>
				<th width="140px">Nama Barang</th>
				<th width="50px">Jumlah Barang</th>
				<th width="100px">Harga Satuan</th>
				<th width="40px">Alamat</th>
				<th width="50px">PPN</th>
				<th width="40px">DP</th>
				<th width="40px">No HP</th>
				<th width="80px">Total Harga</th>
				<th width="100px">Aksi</th>
			</tr>
		</thead>
			
		<?php 
		$no = 1;
		foreach($dataFakturPenagihan as $penagihan){ ?>
		<tbody>
			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $penagihan->pembeli ?></td>
				<td><?php echo $penagihan->nm_brg ?></td>
				<td><?php echo $penagihan->jml_brg ?></td>
				<td><?php echo $penagihan->hrg_satuan ?></td>
				<td><?php echo $penagihan->alamat ?></td>
				<td><?php echo $penagihan->PPN ?></td>
				<td><?php echo $penagihan->DP ?></td>
				<td><?php echo $penagihan->NO_HP ?></td>
				<td><?php echo $penagihan->total_harga ?></td>
				<td><a class="MyButton" href="<?php echo site_url('Faktur_Penagihan/Update_penagihan/'.$penagihan->id);?>"><em class="fa fa-pencil-square-o"></em></a>&nbsp;
					<a class="MyButton1" href="<?php echo site_url('Faktur_Penagihan/Delete_penagihan/'.$penagihan->id);?>"><em class="fa fa-trash-o"></em></a>&nbsp;
					<a class="MyButton2" href="<?php echo site_url('Faktur_Penagihan/Print_penagihan/'.$penagihan->id);?>"><em class="fa fa-print"></em></a>
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

<br>

<body>
<div class="row grid-responsive">
	<div class="column ">
		<div class="card">
		<div class="card-title">
	<center><h3>Faktur Tanda Lunas</h3></center>
	</div>
		<div class="card-block">
	<table>
		<thead>
			<tr>
				<th width="10px">No.</th>
				<th width="10px">Pembeli</th>
				<th width="140px">Nama Barang</th>
				<th width="50px">Jumlah Barang</th>
				<th width="100px">Harga Satuan</th>
				<th width="40px">Alamat</th>
				<th width="50px">PPN</th>
				<th width="40px">DP</th>
				<th width="40px">No HP</th>
				<th width="40px">Status</th>
				<th width="50px">Total Harga</th>
				<th width="100px">Aksi</th>
			</tr>
		</thead>
			
		<?php 
		$no = 1;
		foreach($dataFakturTandaLunas as $srt_td_lunas){ 
		?>
		<tbody>
			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $srt_td_lunas->pembeli ?></td>
				<td><?php echo $srt_td_lunas->nm_brg ?></td>
				<td><?php echo $srt_td_lunas->jml_brg ?></td>
				<td><?php echo $srt_td_lunas->hrg_satuan ?></td>
				<td><?php echo $srt_td_lunas->alamat ?></td>
				<td><?php echo $srt_td_lunas->PPN ?></td>
				<td><?php echo $srt_td_lunas->DP ?></td>
				<td><?php echo $srt_td_lunas->NO_HP ?></td>
				<td><?php echo $srt_td_lunas->status ?></td>
				<td><?php echo $srt_td_lunas->total_harga ?></td>
				<td><a class="MyButton" href="<?php echo site_url('Faktur_Tanda_Lunas/Update_tdlunas/'.$srt_td_lunas->id);?>"><em class="fa fa-pencil-square-o"></em></a>&nbsp;					
					<a class="MyButton1" href="<?php echo site_url('Faktur_Tanda_Lunas/Delete_tdlunas/'.$srt_td_lunas->id);?>"><em class="fa fa-trash-o"></em></a>&nbsp;
					<a class="MyButton2" href="<?php echo site_url('Faktur_Tanda_Lunas/Print_Tanda_Lunas/'.$srt_td_lunas->id);?>"><em class="fa fa-print"></em></a>
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

<br>

<body>
<div class="row grid-responsive">
	<div class="column ">
		<div class="card">
		<div class="card-title">
	<center><h3>Faktur Service</h3></center>
	</div>
		<div class="card-block">
	<table>
		<thead>
			<tr>
				<th width="10px">No.</th>
				<th width="100px">Pembeli</th>
				<th width="50px">Nama Barang</th>
				<th width="40px">Alamat</th>
				<th width="50px">Harga Satuan</th>
				<th width="50px">Jumlah Barang</th>
				<th width="100px">Keterangan</th>
				<th width="40px">Total Harga</th>
				<th width="140px">No. Hp</th>
				<th width="100px">Aksi</th>
			</tr>
		</thead>
			
		<?php 
		$no = 1;
		foreach($dataFakturService as $surat_service){ 
		?>
		<tbody>
			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $surat_service->pembeli ?></td>
				<td><?php echo $surat_service->nm_brg ?></td>
				<td><?php echo $surat_service->alamat ?></td>
				<td><?php echo $surat_service->hrg_satuan ?></td>
				<td><?php echo $surat_service->jml_brg ?></td>
				<td><?php echo $surat_service->keterangan ?></td>
				<td><?php echo $surat_service->total_harga ?></td>
				<td><?php echo $surat_service->no_hp ?></td>
				<td><a class="MyButton" href="<?php echo site_url('Faktur_Service/Update_service/'.$surat_service->id);?>"><em class="fa fa-pencil-square-o"></em></a>&nbsp;
					<a class="MyButton1" href="<?php echo site_url('Faktur_Service/Delete_service/'.$surat_service->id);?>"><em class="fa fa-trash-o"></em></a>&nbsp;
					<a class="MyButton2" href="<?php echo site_url('Faktur_Service/Print_Surat_Service/'.$surat_service->id);?>"><em class="fa fa-print"></em></a>
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
		</section>
	</div>
	
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script>
	window.onload = function () {
		var chart1 = document.getElementById("line-chart").getContext("2d");
		window.myLine = new Chart(chart1).Line(lineChartData, {
		responsive: true,
		scaleLineColor: "rgba(0,0,0,.2)",
		scaleGridLineColor: "rgba(0,0,0,.05)",
		scaleFontColor: "#c5c7cc"
		});
		var chart2 = document.getElementById("bar-chart").getContext("2d");
		window.myBar = new Chart(chart2).Bar(barChartData, {
		responsive: true,
		scaleLineColor: "rgba(0,0,0,.2)",
		scaleGridLineColor: "rgba(0,0,0,.05)",
		scaleFontColor: "#c5c7cc"
		});
		var chart4 = document.getElementById("pie-chart").getContext("2d");
		window.myPie = new Chart(chart4).Pie(pieData, {
		responsive: true,
		segmentShowStroke: false
		});
		var chart5 = document.getElementById("radar-chart").getContext("2d");
		window.myRadarChart = new Chart(chart5).Radar(radarData, {
		responsive: true,
		scaleLineColor: "rgba(0,0,0,.05)",
		angleLineColor: "rgba(0,0,0,.2)"
		});
		var chart6 = document.getElementById("polar-area-chart").getContext("2d");
		window.myPolarAreaChart = new Chart(chart6).PolarArea(polarData, {
		responsive: true,
		scaleLineColor: "rgba(0,0,0,.2)",
		segmentShowStroke: false
		});
	};
	</script>			

</body>
</html> 