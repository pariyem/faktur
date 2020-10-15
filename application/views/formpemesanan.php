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

	
<div class="container">
	<div class="row">
		<div class="col-md-12 text-center">
			<h2>Form Faktur Pemesanan</h2>
		</div>
	</div>
	
	<div class="row">
		
			<?php 
				echo validation_errors(); 
				
				if(isset($errorMsg))
				{
					echo '<div class="error-msg">';
					echo $errorMsg;
					echo '</div>';
					unset($errorMsg);
				}
			?>
			
			<form action="<?php echo base_url()."Faktur_Pemesanan/AddFakturPemesanan"?>" method="post">
				<div class="form-group">
					<label for="pembeli">Nama Instansi</label>
					<div class="col-sm-5">
					  <input type="text" name="pembeli" style="width:500px;" class="form-control" value="<?php echo set_value('pembeli'); ?>" placeholder="Masukkan nama instansi" id="pembeli">
					</div>
				</div>

				<div class="form-group">
					<label for="nm_user">Nama user</label>
					<div class="col-sm-5">
					  <input type="text" name="nm_user" style="width:500px;" class="form-control" value="<?php echo set_value('nm_user'); ?>" placeholder="Masukkan nama user" id="nm_user">
					</div>
				</div>


				<div class="form-group">
					<label for="nm_brg">Nama Barang</label>
					<div class="col-sm-5">
					  <textarea type="text" name="nm_brg" style="width:500px;" class="form-control" value="<?php echo set_value('nm_brg');?>" placeholder="Masukkan nama barang" id="nm_brg"></textarea> 
					</div>
				</div>

				<div class="form-group">
					<label for="jml_brg">Jumlah Barang</label>
					<div class="col-sm-5">
					  <input type="text" name="jml_brg" style="width:500px;" class="form-control" value="<?php echo set_value('jml_brg'); ?>" placeholder="Masukkan jumlah barang" id="jml_brg">
					</div>
				</div>

				<div class="form-group">
					<label for="hrg_satuan">Harga Satuan</label>
					<div class="col-sm-5">
					  <input type="text"  name="hrg_satuan" style="width:500px;" class="form-control" value="<?php echo set_value('hrg_satuan');?>" placeholder="Masukkan harga satuan" id="hrg_satuan">
					</div>
				</div>
				
				<div class="form-group">
					<label for="alamat">Alamat</label>
					<div class="col-sm-5">
					  <textarea type="text" name="alamat" style="width:500px;" class="form-control" value="<?php echo set_value('alamat'); ?>" placeholder="Masukkan alamat" id="alamat"></textarea>
					</div>
				</div>

				<div class="form-group">
					<label for="PPN">PPN</label>
					<div class="col-sm-5">
					  <input type="text" name="PPN" style="width:500px;" class="form-control" value="<?php echo set_value('PPN'); ?>" placeholder="Masukkan PPN" id="PPN">
					</div>
				</div>
				
				<div class="form-group">
					<label for="DP">DP</label>
					<div class="col-sm-5">
					  <input type="text" name="DP" style="width:500px;" class="form-control" value="<?php echo set_value('DP'); ?>" placeholder="Masukkan DP" id="DP">
					</div>
				</div>

				<div class="form-group">
					<label for="NO_HP">Nomor HP</label>
					<div class="col-sm-5">
					  <input type="text" name="NO_HP" style="width:500px;" class="form-control" value="<?php echo set_value('NO_HP'); ?>" placeholder="Masukkan nomor HP" id="NO_HP">
					</div>
				</div>

				<div class="form-group custom-bottom-margin">
					<label class="control-label col-sm-4 text-right"></label>
					<div class="col-sm-5">
					  <button class="btn btn-primary" type="submit"> Submit</button>
					</div>
				</div>
				
				
			</form>
		</div> 
	</div>
</div>	


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