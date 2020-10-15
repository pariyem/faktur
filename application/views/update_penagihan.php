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
		<h1>Data Faktur Penagihan</h1>
		<h3>Edit Data</h3>
	</center>
	<?php foreach($dataPenagihan as $penagihan){ ?>
	<form action="<?php echo base_url(). 'Faktur_Penagihan/update'; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>Nama Instansi</td>
				<td>
					<input type="hidden" name="id" value="<?php echo $penagihan->id ?>">
					<input type="text" name="pembeli" value="<?php echo $penagihan->pembeli ?>">
				</td>
			</tr>
			<tr>
				<td align="left">Nama User</td>
				<td><input type="text" name="nm_user" value="<?php echo $penagihan->nm_user ?>"></td>
			</tr>
			<tr>
				<td>Nama Barang</td>
				<td><input type="text" name="nm_brg" value="<?php echo $penagihan->nm_brg ?>"></td>
			</tr>
			<tr>
				<td>Jumlah Barang</td>
				<td><input type="text" name="jml_brg" value="<?php echo $penagihan->jml_brg ?>"></td>
			</tr>
			<tr>
				<td>Harga Satuan</td>
				<td><input type="text" name="hrg_satuan" value="<?php echo $penagihan->hrg_satuan ?>"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td width="600px"><textarea type="text" name="alamat" value="<?php echo $penagihan->alamat ?>"></textarea></td>
			</tr>
			<tr>
				<td>PPN</td>
				<td><input type="text" name="PPN" value="<?php echo $penagihan->PPN ?>"></td>
			</tr>
			<tr>
				<td>DP</td>
				<td><input type="text" name="DP" value="<?php echo $penagihan->DP ?>"></td>
			</tr>
			<tr>
				<td>No. Hp</td>
				<td><input type="text" name="NO_HP" value="<?php echo $penagihan->NO_HP ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>
			</tr>
		</table>
	</form>	
	<?php } ?>


<p class="credit">Aplikasi Faktur By<a href="https://www.medialoot.com">Faktur</a></p>
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