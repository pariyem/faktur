<!DOCTYPE html> 
<html>
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
	font-size: 85%;
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
	<center><h3>Data User</h3></center>
	</div>
		<div class="card-block">
	<div class="pull-left">
        <a href="<?php echo base_url('User/RegisterUser'); ?>" class="MyButton2"><em class="fa fa-plus"></em>&nbsp; &nbsp;Add User</a>
    </div>
	<table>
		<thead>
			<tr>
				<th width="10px"> No</th>
				<th width="140px">Nama</th>
				<th width="50px">No Hp</th>
				<th width="200px">Alamat</th>
				<th width="40px">Email</th>
				<th width="50px">Keterangan</th>
				<th width="130px">Aksi</th>
			</tr>
		</thead>
			
		<?php 
		$no = 1;
		foreach($dataUser as $users){ 
		?>
		<tbody>
			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $users->nama ?></td>
				<td><?php echo $users->no_hp ?></td>
				<td><?php echo $users->alamat ?></td>
				<td><?php echo $users->email ?></td>
				<td><?php echo $users->keterangan ?></td>
				<td><a class="MyButton" href="<?php echo site_url('User/Update_user/'.$users->id);?>"><em class="fa fa-pencil-square-o"></em></a>&nbsp;&nbsp;&nbsp;
					<a class="MyButton1" href="<?php echo site_url('User/Delete_user/'.$users->id);?>"><em class="fa fa-trash-o"></em></a></td>

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
<br>

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