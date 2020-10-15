<?php
 $total = NULL;
 $post = $_POST;
  
 /* untuk invoice bisa di ambil dari database, karena pada dasarnya invoice tidak akan pernah recordnya itu di delete  */
 /* berapa jumlah invoice kemudian di tambahkan 1 */
 $numrows_invoice_db = 000;
 $invoice = $numrows_invoice_db + 1;
 ?>
 
 

<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="UTF-8">
	<title>Print Penagihan</title>	

	<style type="text/css">

  header{background: url('header.JPG');}

  body{margin : 30px;}
  h1{margin-left:30px;
  	padding-left: 64px;
  	font-size:1.5em;
  	line-height: 0.5em;
  	font-weight:bold;
  	color: #26216A;
  	font-family: Arial;}
 h2{margin-left:30px;
  	padding-left:64px;
    padding-top: 10px;
  	line-height: 0.5em;
  	font-size:1.3em;
  	font-weight:normal;
  	color: #FA7B06;
  	font-family: Arial;}
  h3{margin-left:30px;
  	padding-left:70px;
    padding-top: 10px;
  	line-height: 0.5em;
  	font-size:1.3em;
  	font-weight:normal;
  	color: #26216A;
  	font-family: Arial;}

  p{margin-left: 30px;
    padding-left: 95px;
    font-family: Arial;
    color:#26216A;
    font-size:1.3em;
    font-weight: normal;
  	margin:0;}

  table{margin:0 90px 0 0;
  	padding-left: 90px;
  	border:0px solid #ffffff;
  	width:100%;
  	border-spacing:5; }
  
  table th{font-family: Arial;
  	line-height: 0.5em;
  	font-size:1.4em;
  	color: #26216A;
  	border:#ffffff;;
  	font-weight:bold;
  	text-align:left;}

  table td{font-family: Arial;
  	font-size:1.3em;
  	color: #ffffff;
  	border: #ffffff;
  	padding-left: 90px;
  	padding:8px  5px;
  	font-weight:normal;
  	text-align:left;
  	border-top:4px solid #ffffff;
  	border-left:8px solid #ffffff;}
  
  table tr.total td{font-size:2em; }
  
  .btnsubmit{display:inline-block;
  	padding:10px;
  	border:1px solid #ffffff;
  	background:#eee;
  	color:#000;
  	text-decoration:none;
  	margin:2em 0;}

  form{margin:2em 0 0 0;}

  label{display:inline-block;
  	width:auto;}

  input[type=text]{border:1px solid #ffffff;
  	padding:10px;
  	width:30em;}

  textarea{border:1px solid #ffffff;
  	padding:10px;
  	width:30em;
  	height:5em;
  	vertical-align:text-top;
  	margin:0.3em 0 0 0;}

  [class*="span"] {
    float: left;
    min-height: 200px;
    margin-left: 5px;}
  .span {
    width: 600px;}

  .submitbtn{font-size:1.5em;
  	display:inline-block;
  	padding:10px;
  	border:1px solid #ffffff;
  	background:#eee;
  	color:#ffffff;
  	text-decoration:none;
  	margin:0.5em 0 0 8em;};

    button{
      border-style: none;
      background: transparent;
    }

    @media print { 
    #printbtn {
        display :  none;
    }
}
  </style>
</head>


<header>
<div id='masthead'>
<div id='headline'>
<img src="<?php echo base_url(); ?>assets/header.jpg" />
</div>
</header>

<body>
  <?php
    foreach($dataFakturPenagihan as $penagihan){ ?>
  <div class="span center">
	<h1 align="text-center"><?php echo $penagihan->nm_user ?></h1>
	<br>
	<h1 align="text-center"><?php echo $penagihan->pembeli ?></h1>
	<p align="text-center"><?php echo $penagihan->alamat ?></p>
  <?php } ?>
  </div>

	 <div class="span center" style="float: right" id="wrapshopcart">
   	<h1 align="text-center">Nomor &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo $invoice;?> /IN/Q1/BTZ/2018 &nbsp;</h1>
 	<h1 align="text-center">Tanggal &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;<?php $tgl=date('d-M-Y'); echo $tgl;?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h1>
 	<h1 align="text-center">Jml Lampiran &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp; - &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </h1>

 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
</div>

 	<table>
		<thead>
			<tr>
				<th width="140px">Deskripsi Layanan &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
				<th width="100px">&nbsp;&nbsp;Harga</th>
				<th width="20px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Volume</th>
				<th width="50px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Subtotal</th>
			</tr>
		</thead>
		<?php
		$no = 1;
		foreach($dataFakturPenagihan as $penagihan){ ?>
		<tbody>
			<tr style="background-color: #26216A;">		
				<td><?php echo $penagihan->nm_brg ?></td>
				<td>&nbsp;&nbsp;Rp <?php echo $penagihan->hrg_satuan ?></td>
				<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $penagihan->jml_brg ?></td>
				<td>Rp <?php echo $penagihan->total_harga ?></td>
      </tr>
      <tr>
        <td style="background-color: #ffffff;"></td>
        <td colspan="2"; style="background-color: #26216A; color: #FA7B06;"> Total Tagihan </td>
        <td style="background-color: #26216A; color: #FA7B06;">Rp <?php echo $penagihan->total_harga ?></td>
      </tr>

		</tbody>
		<?php } ?>
	</table>
</div>
</div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input id ="printbtn" type="button" value="Print"   onClick="window.print();"> 

  
    

</a>
</div>
<br>



<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>


<div class="span center">
<h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pembayaran melalui</h3>
<h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bank Mandiri</h2>
<h3>&nbsp;&nbsp;&nbsp;&nbsp;dengan nomor rekening</h3>
<h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;130-00-1511783-4</h2>
<h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;atas nama</h3>
<h2>PT Bandung Zona Teknologi</h2>
</div>

<div class="span center" style="float: right" id="wrapshopcart">
<h3 class="text-center">Hormat Kami,</h3>
<h1 class="text-center">PT Bandung Zona Teknologi</h1>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<h1 class="text-center">Ariya M Suryaman S.Si.Kom</h1>
<br>
<br>
<br>
<br>
</div>
</body>
</html>

<footer><div id='masthead'>
<div id='headline'>
<img src="<?php echo base_url(); ?>assets/footer.jpg" />
</div></footer>

