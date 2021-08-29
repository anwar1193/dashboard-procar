<?php

	session_start();
	include 'koneksi.php';

	// Cek Jika Belum Login, Kembalikan Ke Halaman Login
	if(!isset($_SESSION['login'])){
		header('location:login.php');
		exit;
	}

	$bulan = date('m');
	
	$tanggal_now = date('d');
	$tanggal_kemarin = $tanggal_now-1;
	$bulan_now = date('m');
	$tahun_now = date("Y");

	//Ambil tanggal sales
	$q_tglSales = "SELECT * FROM tbl_tgl_sales order by id DESC LIMIT 0,1";
	$r_tglSales = mysqli_query($koneksi, $q_tglSales) or die ('error fungsi');
	$row_tglSales = mysqli_fetch_array($r_tglSales);
	$tgl_sales = $row_tglSales['tanggal'];
	$tanggal_sales = substr($tgl_sales, 0,2);
	$bulan_sales = substr($tgl_sales, 3,2);
	$tahun_sales = substr($tgl_sales, 6,4);
	$bul_sales = $bulan_sales-1;
	
	//Ambil tanggal Collectibility
	//$q_tglColl = "SELECT * FROM tbl_tgl_coll order by id DESC LIMIT 0,1";
	//$r_tglColl = mysqli_query($koneksi, $q_tglColl) or die ('error fungsi');
	//$row_tglColl = mysqli_fetch_array($r_tglColl);
	//$tgl_coll = $row_tglColl['tanggal'];
	
	//Ambil tanggal Tunggakan
	$q_tglTung = "SELECT * FROM tbl_tgl_tung order by id DESC LIMIT 0,1";
	$r_tglTung = mysqli_query($koneksi, $q_tglTung) or die ('error fungsi');
	$row_tglTung = mysqli_fetch_array($r_tglTung);
	$tgl_tung = $row_tglTung['tanggal'];
	$tanggal_tung = substr($tgl_tung, 0,2);
	$bulan_tung = substr($tgl_tung, 3,2);
	$tahun_tung = substr($tgl_tung, 6,4);
	
	//Ambil tanggal Ayda
	$q_tglAyda = "SELECT * FROM tbl_tgl_ayda order by id DESC LIMIT 0,1";
	$r_tglAyda = mysqli_query($koneksi, $q_tglAyda) or die ('error fungsi');
	$row_tglAyda = mysqli_fetch_array($r_tglAyda);
	$tgl_ayda = $row_tglAyda['tanggal'];
	$tanggal_ayda = substr($tgl_ayda, 0,2);
	$bulan_ayda = substr($tgl_ayda, 3,2);
	$tahun_ayda = substr($tgl_ayda, 6,4);
	
	//--------------------------------------------------------------------------------------------
	//query data sales bulan ini
	$query_sales = "SELECT SUM(IF( Bulan = '$bulan_now' AND Tahun = $tahun_now, TotalPenjualan, 0)) AS penjualan
						FROM tbl_sales";
	$result_sales = mysqli_query($koneksi,$query_sales) or die ('error fungsi');
	$row_sales = mysqli_fetch_array($result_sales);
	$sales = $row_sales['penjualan'];
	
	//query target sales bulan ini
	if($bulan_now=='01'){
		$query_tar_sales = "SELECT JAN AS target FROM tbl_target_nas";
	}else if($bulan_now=='02'){
		$query_tar_sales = "SELECT FEB AS target FROM tbl_target_nas";
	}else if($bulan_now=='03'){
		$query_tar_sales = "SELECT MAR AS target FROM tbl_target_nas";
	}else if($bulan_now=='04'){
		$query_tar_sales = "SELECT APR AS target FROM tbl_target_nas";
	}else if($bulan_now=='05'){
		$query_tar_sales = "SELECT MEI AS target FROM tbl_target_nas";
	}else if($bulan_now=='06'){
		$query_tar_sales = "SELECT JUN AS target FROM tbl_target_nas";
	}else if($bulan_now=='07'){
		$query_tar_sales = "SELECT JUL AS target FROM tbl_target_nas";
	}else if($bulan_now=='08'){
		$query_tar_sales = "SELECT AGU AS target FROM tbl_target_nas";
	}else if($bulan_now=='09'){
		$query_tar_sales = "SELECT SEP AS target FROM tbl_target_nas";
	}else if($bulan_now=='10'){
		$query_tar_sales = "SELECT OKT AS target FROM tbl_target_nas";
	}else if($bulan_now=='11'){
		$query_tar_sales = "SELECT NOV AS target FROM tbl_target_nas";
	}else if($bulan_now=='12'){
		$query_tar_sales = "SELECT DES AS target FROM tbl_target_nas";
	}
	$result_tar_sales = mysqli_query($koneksi,$query_tar_sales) or die ('error fungsi');
	$row_tar_sales = mysqli_fetch_array($result_tar_sales);
	$target_sales = $row_tar_sales['target'];
	
	//Persentase sales bulan ini
	$persen_sales = ($sales/$target_sales)*100;
	
	//--------------------------------------------------------------------------------------- 
	
	
	// Query Pencapaian Collection Bulan Ini
	$query_collpay = "SELECT * FROM tbl_coll_payment WHERE cabang='TOTAL'";
	$res_collpay = mysqli_query($koneksi,$query_collpay) or die ('error fungsi');
	$row_collpay = mysqli_fetch_array($res_collpay);
	
	$total_payment_coll = $row_collpay['pencapaian'];
	$target_coll = $row_collpay['target_cabang'];
	
	$persentase_collection = ($total_payment_coll/$target_coll)*100;
	
	//--------------------------------------------------------------------------------------- 
	
	// Query Collection (Tunggakan) Sampai Hari ini
	
	$query_tunggakan = "SELECT SUM(IF( DPD<=0, OSPokokReal, 0)) AS current,
							SUM(IF( DPD BETWEEN 1 AND 7, OSPokokReal, 0)) AS tunggakan1,
							SUM(IF( DPD BETWEEN 8 AND 30, OSPokokReal, 0)) AS tunggakan2,
							SUM(IF( DPD BETWEEN 31 AND 60, OSPokokReal, 0)) AS tunggakan3,
							SUM(IF( DPD BETWEEN 61 AND 90, OSPokokReal, 0)) AS tunggakan5,
							SUM(IF( DPD>=91, OSPokokReal, 0)) AS tunggakan4,
							SUM(OSPokokReal) AS total_tunggakan
							FROM tbl_collection";
	$result_tunggakan = mysqli_query($koneksi,$query_tunggakan) or die ('error fungsi');
	$row_tunggakan = mysqli_fetch_array($result_tunggakan);
	
	$total_tung = $row_tunggakan['total_tunggakan'];
	
	$current = $row_tunggakan['current'];
	$pers_current = ($current/$total_tung) * 100;
	
	$t1_7 = $row_tunggakan['tunggakan1'];
	$pers1_7 = ($t1_7/$total_tung) * 100;
	
	$t8_30 = $row_tunggakan['tunggakan2'];
	$pers8_30 = ($t8_30/$total_tung) * 100;
	
	$t31_60 = $row_tunggakan['tunggakan3'];
	$pers31_60 = ($t31_60/$total_tung) * 100;
	
	$t61_90 = $row_tunggakan['tunggakan5'];
	$pers61_90 = ($t61_90/$total_tung) * 100;
	
	$t91_up = $row_tunggakan['tunggakan4'];
	$pers91_up = ($t91_up/$total_tung) * 100;
	
	
	//--------------------------------------------------------------------------------------- 
	
	
	// Query Ayda Nasional (OS Akhir dan Unit Akhir)
	
	$query_ayda = "SELECT 
					SUM(IF(bulan = ($bulan_now - 1) AND tahun = $tahun_now, os_akhir, 0)) AS os_akhir_new,
					SUM(IF(bulan = ($bulan_now - 1) AND tahun = $tahun_now, unit_akhir, 0)) AS unit_akhir_new
				FROM tbl_ayda_asli;
	";
	$result_ayda = mysqli_query($koneksi,$query_ayda) or die ('error fungsi os');
	$row_ayda = mysqli_fetch_array($result_ayda);
	$os_akhir = $row_ayda['os_akhir_new'];
	$unit_akhir = $row_ayda['unit_akhir_new'];
	
	//Bentuk Rupiah
	function rupiah($angka){
		$hasil_rupiah = number_format($angka,0,',','.');
		return $hasil_rupiah;
	}
	
	//------------------------------------------------------------------------------------------
	
	//Query Ayda Realtime
	
	// 1. Ayda Out
		
		//OS
		$qayda_out_os = "SELECT SUM(os_ayda) AS total_penjualan FROM tbl_ayda_out";
		$res_out_os = mysqli_query($koneksi,$qayda_out_os) or die ('error fungsi');
		$row_out_os = mysqli_fetch_array($res_out_os);
		$ayda_out_os = $row_out_os['total_penjualan'];
		
		//Unit
		$qayda_out_unit = "SELECT COUNT(*) AS total_penjualan_unit FROM tbl_ayda_out";
		$res_out_unit = mysqli_query($koneksi,$qayda_out_unit) or die ('error fungsi');
		$row_out_unit = mysqli_fetch_array($res_out_unit);
		$ayda_out_unit = $row_out_unit['total_penjualan_unit'];
	
	// 2. Ayda In
		
		//OS
		$qayda_in_os =  "SELECT 
							SUM(IF(MONTH(CLOSETXNDATE)=$bulan_now AND YEAR(CLOSETXNDATE)= $tahun_now, OSPokokReal, 0)) AS penambahan_os
							FROM tbl_ayda";
		$res_in_os = mysqli_query($koneksi,$qayda_in_os) or die ('error fungsi');
		$row_in_os = mysqli_fetch_array($res_in_os);
		$ayda_in_os = $row_in_os['penambahan_os'];
		
		//Unit
		$qayda_in_unit = "SELECT COUNT(*) AS penambahan_unit FROM tbl_ayda WHERE MONTH(CLOSETXNDATE)=$bulan_now AND YEAR(CLOSETXNDATE)=$tahun_now";
		$res_in_unit = mysqli_query($koneksi,$qayda_in_unit) or die ('error fungsi');
		$row_in_unit = mysqli_fetch_array($res_in_unit);
		$ayda_in_unit = $row_in_unit['penambahan_unit'];
	
	//-----------------------------------------------------------------------------------------------------------------------
	
	//Ambil tanggal Tunggakan
	$q_tglTung = "SELECT * FROM tbl_tgl_tung order by id DESC LIMIT 0,1";
	$r_tglTung = mysqli_query($koneksi, $q_tglTung) or die ('error fungsi');
	$row_tglTung = mysqli_fetch_array($r_tglTung);
	$tgl_tung = $row_tglTung['tanggal'];

?>
<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Grafik PT Procar Int'l Finance</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!--js-->
<script src="js/jquery-2.1.1.min.js"></script> 
<!--icons-css-->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!--Google Fonts-->
<link href='//fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Work+Sans:400,500,600' rel='stylesheet' type='text/css'>
<!--static chart-->
<script src="js/Chart.min.js"></script>
<!--//charts-->

<!--skycons-icons-->
<script src="js/skycons.js"></script>
<!--//skycons-icons-->

<style type="text/css"> /** CSS AYDA **/
@import 'https://code.highcharts.com/css/highcharts.css';

#ayda {
	height: 250px;
	max-width: 600px;
	margin: 0 auto;
}

/* Link the series colors to axis colors */
.highcharts-color-0 {
	fill: #7cb5ec;
	stroke: #7cb5ec;
}
.highcharts-axis.highcharts-color-0 .highcharts-axis-line {
	stroke: #7cb5ec;
}
.highcharts-axis.highcharts-color-0 text {
	fill: #7cb5ec;
}
.highcharts-color-1 {
	fill: #90ed7d;
	stroke: #90ed7d;
}
.highcharts-axis.highcharts-color-1 .highcharts-axis-line {
	stroke: #90ed7d;
}
.highcharts-axis.highcharts-color-1 text {
	fill: #90ed7d;
}


.highcharts-yaxis .highcharts-axis-line {
	stroke-width: 2px;
}

</style>

<style>
		
			/** ini untuk kotak tunggakan **/
			
			#box_current_a{
				width:50px;
				height:20px;
				background:green;
				margin-left:5px;
				color:white;
				padding: 2px;
				display: inline-block;
				font-size:12px;
				text-align: right;
				font-weight: bold;
			}
			
			#box_current_b{
				width:110px;
				height:20px;
				background:green;
				margin-left:0px;
				color:white;
				padding: 2px;
				display: inline-block;
				font-size:12px;
				text-align: right;
				font-weight: bold;
			}
			
			#box_1_7a{
				width:50px;
				height:20px;
				background:orange;
				margin-left:5px;
				color:white;
				padding: 2px;
				display: inline-block;
				font-size:12px;
				text-align: right;
				font-weight: bold;
			}
			
			#box_1_7b{
				width:110px;
				height:20px;
				background:orange;
				margin-left:0px;
				color:white;
				padding: 2px;
				display: inline-block;
				font-size:12px;
				text-align: right;
				font-weight: bold;
			}
			
			#box_8_30a{
				width:50px;
				height:20px;
				background:#248fed;
				margin-left:5px;
				color:white;
				padding: 2px;
				display: inline-block;
				font-size:12px;
				text-align: right;
				font-weight: bold;
			}
			
			#box_8_30b{
				width:110px;
				height:20px;
				background:#248fed;
				margin-left:0px;
				color:white;
				padding: 2px;
				display: inline-block;
				font-size:12px;
				text-align: right;
				font-weight: bold;
			}
			
			#box_31_90a{
				width:50px;
				height:20px;
				background:yellow;
				margin-left:5px;
				color:black;
				padding: 2px;
				display: inline-block;
				font-size:12px;
				text-align: right;
				font-weight: bold;
			}
			
			#box_31_90b{
				width:110px;
				height:20px;
				background:yellow;
				margin-left:0px;
				color:black;
				padding: 2px;
				display: inline-block;
				font-size:12px;
				text-align: right;
				font-weight: bold;
			}
			
			#box_61_90a{
				width:50px;
				height:20px;
				background:#c2f542;
				margin-left:5px;
				color:black;
				padding: 2px;
				display: inline-block;
				font-size:12px;
				text-align: right;
				font-weight: bold;
			}
			
			#box_61_90b{
				width:110px;
				height:20px;
				background:#c2f542;
				margin-left:0px;
				color:black;
				padding: 2px;
				display: inline-block;
				font-size:12px;
				text-align: right;
				font-weight: bold;
			}
			
			#box_90_upa{
				width:50px;
				height:20px;
				background:red;
				margin-left:5px;
				color:white;
				padding: 2px;
				display: inline-block;
				font-size:11px;
				text-align: right;
				font-weight: bold;
			}
			
			#box_90_upb{
				width:110px;
				height:20px;
				background:red;
				margin-left:0px;
				color:white;
				padding: 2px;
				display: inline-block;
				font-size:12px;
				text-align: right;
				font-weight: bold;
			}
			
			#total_a{
				width:50px;
				height:20px;
				background:gray;
				margin-left:5px;
				color:white;
				padding: 2px;
				display: inline-block;
				font-size:11px;
				text-align: right;
				font-weight: bold;
			}
			
			#total_b{
				width:110px;
				height:20px;
				background:gray;
				margin-left:0px;
				color:white;
				padding: 2px;
				display: inline-block;
				font-size:12px;
				text-align: right;
				font-weight: bold;
			}
			
			#box_ayda1{
				width:55px;
				height:20px;
				background:gray;
				color:white;
				padding: 2px;
				display: inline-block;
				font-size:12px;
				margin-top:5px;
				text-align: right;
				font-weight: bold;
			}
			
			#box_ayda2{
				width:110px;
				height:20px;
				background:gray;
				color:white;
				padding: 2px;
				display: inline-block;
				font-size:12px;
				text-align: right;
				font-weight: bold;
			}
			
			#teks{
				width: 55px;
				display: inline-block;
				font-size:12px;
				margin-left:5px;
			}
			
			#teks_judul{
				display: inline-block;
				font-size:12px;
				margin-left:5px;
			}
			
			#header_4{
				font-size: 13px;
				text-align: center;
			}
			
			#ket_waktu{
				font-size : 11px;
				text-align: center;
			}
			
			
			
</style>
</head>
<body>


<div class="page-container">	
   <div class="left-content">
	   <div class="mother-grid-inner">
			
			<!--header start here-->
				<div class="header-main" style="padding:2px">
					&nbsp;&nbsp;
					<h5 style="display: inline-block;">Dashboard PT Procar Finance (Data Bulan Berjalan)</h5>
					 &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
					<!-- Button Peta modal -->
					<button type="button" style="display: inline-block;" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#exampleModal">
					  Peta Cabang
					</button>
					
					<!-- Button Data Bulan Lalu -->
					<a href="index_lalu.php" class="btn btn-success btn-sm" style="display: inline-block;">Bulan Lalu</a>
				
				</div>
			<!--heder end here-->
			
<!-- script-for sticky-nav -->
		<script>
		$(document).ready(function() {
			 var navoffeset=$(".header-main").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop(); 
				if(scrollpos >=navoffeset){
					$(".header-main").addClass("fixed");
				}else{
					$(".header-main").removeClass("fixed");
				}
			 });
			 
		});
		</script>
		<!-- /script-for sticky-nav -->
		
<!--inner block start here-->
<div style="margin-top:18px;"><!-- sebelumnya : <div class="inner-block"> -->

<!--mainpage chit-chating-->
<div> <!-- sebelumnya <div class="chit-chat-layer1"> -> supaya naik ke atas -->
	<div class="col-md-12 chit-chat-layer1-left">
		<div class="work-progres">
		
<!-- Panggil Highchart -->
	<script src="highcharts/highcharts.js"></script>
	<script src="highcharts/highcharts-more.js"></script>
	<script src="highcharts/solid-gauge.js"></script>
<!-- Penutup Panggil Highchart -->  

					 
<div class="row">
	<div class="col-md-12">

			<script src="highcharts/data.js"></script>
			<script src="highcharts/exporting.js"></script>
			<script src="highcharts/export-data.js"></script>
			<script src="highcharts/highcharts-3d.js"></script>

					<?php
					
						include 'nama_bulan.php';
					
					?>
					
<div id="container_payment_coll" style=""></div>

<div class="row"> <!-- row content -->
	
	<div class="col-md-4"> <!-- Colum grafik collection (tunggakan) -->
		
		<div class="tampil_collectibility" style="border:double;">
			<div class="market-update-block clr-block-3" style="padding:5px">
				<div class="col-md-12 market-update-left">
					
					<p id="header_4">TUNGGAKAN <?php echo $nama_bulan.' '; //sebelumnya $nama_bulan; ?> <?php echo $tahun_now; ?> (Real)</p>
					<p id="ket_waktu">Data per <?php echo $tgl_tung; ?></p>
					
				</div>
			  <div class="clearfix"> </div>
			</div>
		</div>	
		
		<div class="" style="border:double;"><br />
			<div style="width: 250px; height: 210px; margin: 0 auto; "> <!-- Lebar Area Seluruh Grafik -->
				
				&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
				<p id="teks_judul"><b>(%)</b></p>
				&nbsp; &nbsp; &nbsp;
				<p id="teks_judul"><b>OS Pokok</b></p>
				
				<p id="teks"><b>Current</b></p>
				<div id="box_current_a"><?php echo substr($pers_current,0,4); ?>%</div> 
				<div id="box_current_b"><?php echo rupiah($current); ?></div>
				
				<br />
				
				<p id="teks"><b>&nbsp; &nbsp; &nbsp;1 - 7</b></p>
				<div id="box_1_7a"><?php echo substr($pers1_7,0,4);?>%</div> 
				<div id="box_1_7b"><?php echo rupiah($t1_7); ?></div>				
				
				<br />
				
				<p id="teks"><b>&nbsp; 8 - 30</b></p>
				<div id="box_8_30a"><?php echo substr($pers8_30,0,4);?>%</div> 
				<div id="box_8_30b"><?php echo rupiah($t8_30); ?></div>				
				
				<br />
				
				<p id="teks"><b>&nbsp;31 - 60</b></p>
				<div id="box_31_90a"><?php echo substr($pers31_60,0,4);?>%</div> 
				<div id="box_31_90b"><?php echo rupiah($t31_60); ?></div>
				
				<br />
				
				<p id="teks"><b>&nbsp;61 - 90</b></p>
				<div id="box_61_90a"><?php echo substr($pers61_90,0,4);?>%</div> 
				<div id="box_61_90b"><?php echo rupiah($t61_90); ?></div>
				
				<br />
				
				<p id="teks"><b>&nbsp; &nbsp;91 Up</b></p>
				<div id="box_90_upa"><?php echo substr($pers91_up,0,4);?>%</div> 
				<div id="box_90_upb"><?php echo rupiah($t91_up); ?></div>
				
				<br />
				
				<p id="teks"><b>&nbsp; &nbsp;Total</b></p>
				<div id="total_a">100%</div> 
				<div id="total_b"><?php echo rupiah($current+$t1_7+$t8_30+$t31_60+$t61_90+$t91_up); ?></div>
								
			</div>
		</div>
	</div>
	
	
	
</div> <!-- Penutup row content --><br />



</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
	<div class="modal-content">
	  <div class="modal-header">
		<h5 class="modal-title" id="exampleModalLabel">Branch Map</h5>
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		  <span aria-hidden="true">&times;</span>
		</button>
	  </div>
	  <div class="modal-body">
		<div class="row"> <!-- row content map -->
	<div class="col-md-12"> <!-- Colum map -->

<div class="tampil_header_maps" style="border:double; padding:5px; background-color:orange;color:white">
	<h4>Peta Cabang PT Procar Int'l Finance</h4>
</div>
		
<div class="tampil_peta" style="border:double;">
			
<!-- Masukkan Peta Disini -->
					
<div id="dvMap" style="width: 870px; height: 500px"></div>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBOCBn5SDwH35NoxyLkaBq4WOetWXhCICQ" async defer></script>
  <script type="text/javascript">
	var markers = [
	<?php
	$sql = mysqli_query($koneksi, "SELECT * FROM tbl_lokasi");
	while(($data =  mysqli_fetch_assoc($sql))) {
	?>
	{
		 "lat": '<?php echo $data['lat']; ?>',
		 "long": '<?php echo $data['longi']; ?>',
		 "alamat": '<?php echo $data['alamat']; ?>'
	},
	<?php
	}
	?>
	];
	</script>
	<script type="text/javascript">
		window.onload = function () {
			var mapOptions = {
			center: new google.maps.LatLng(-2.2459632,112.2409634),
				zoom: 5,
				mapTypeId: google.maps.MapTypeId.ROADMAP
			}; 
			var infoWindow = new google.maps.InfoWindow();
			var map = new google.maps.Map(document.getElementById("dvMap"), mapOptions);
			for (i = 0; i < markers.length; i++) {
				var data = markers[i];
		var latnya = data.lat;
		var longnya = data.long;
		
		var myLatlng = new google.maps.LatLng(latnya, longnya);
				var marker = new google.maps.Marker({
					position: myLatlng,
					map: map,
					title: data.alamat,
					icon: "images/icon_maps.png"
				});
				(function (marker, data) {
					google.maps.event.addListener(marker, "click", function (e) {
						infoWindow.setContent('<b><a href="sales_map.php?BranchName=' + '%27' + data.alamat + '%27' + '"> Lihat Data</b> :' + data.alamat +'</a><br>');
						infoWindow.open(map, marker);
					});
				})(marker, data);
			}
		}
	</script>
					
					
<!-- Penutup Peta -->

</div>
	</div>
</div>
			 
	</div>
				
				
			</div> 
			
			<!-- Penutup row grafik ke 1 - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  - - - - --> 
			
			
			
	  </div>
	  <div class="modal-footer">
		<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		<button type="button" class="btn btn-primary">Save changes</button>
	  </div>
	</div>
  </div>
</div>
							
		</div>
	</div>
	  
	 <div class="clearfix"> </div>
</div>

</div>
<!--inner block end here-->
<!--copy rights start here-->
<?php require 'footer.php'; ?>	
<!--COPY rights end here-->
</div>
</div>

<?php require 'sidebar.php' ?>

</div>

<!--Script Grafik Collection -->

<script type="text/javascript">


var gaugeOptions = {

	chart: {
		type: 'solidgauge'
	},

	title: null,

	pane: {
		center: ['50%', '85%'],
		size: '100%', // besar grafik
		startAngle: -90,
		endAngle: 90,
		background: {
			backgroundColor: (Highcharts.theme && Highcharts.theme.background2) || '#EEE',
			innerRadius: '60%',
			outerRadius: '100%',
			shape: 'arc'
		}
	},

	tooltip: {
		enabled: false
	},

	// the value axis
	yAxis: {
		stops: [
			[0.1, '#55BF3B'], // green
			[0.5, '#DDDF0D'], // yellow
			[0.9, '#DF5353'] // red
		],
		lineWidth: 0,
		minorTickInterval: null,
		tickAmount: 2,
		title: {
			y: -70
		},
		labels: {
			y: 16
		}
	},

	plotOptions: {
		solidgauge: {
			dataLabels: {
				y: 5,
				borderWidth: 0,
				useHTML: true
			}
		}
	}
};

// The sales gauge
var chartSpeed = Highcharts.chart('sales', Highcharts.merge(gaugeOptions, {
	yAxis: {
		min: 0,
		max: 100,
		title: {
			text: 'Target : <?php echo rupiah($target_sales) ?> <br /> Realisasi : <?php echo rupiah($sales) ?>'
		}
	},

	credits: {
		enabled: false
	},

	series: [{
		name: 'Sales',
		data: [
				<?php echo substr($persen_sales,0,4);?>
		],
		dataLabels: {
			format: '<div style="text-align:center"><span style="font-size:25px;color:' +
				((Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black') + '">{y}</span><br/>' +
				   '<span style="font-size:12px;color:silver">Percent (%)</span></div>'
		},
		tooltip: {
			valueSuffix: ' percent'
		}
	}]

}));


// The Collection gauge
var chartSpeed = Highcharts.chart('collection', Highcharts.merge(gaugeOptions, {
	yAxis: {
		min: 0,
		max: 100,
		title: {
			text: 'Target : <?php echo rupiah($target_coll) ?> <br /> Realisasi : <?php echo rupiah($total_payment_coll) ?> '
		}
	},

	credits: {
		enabled: false
	},

	series: [{
		name: 'Collection',
		data: [
				<?php echo substr($persentase_collection,0,4);?>
		],
		dataLabels: {
			format: '<div style="text-align:center"><span style="font-size:25px;color:' +
				((Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black') + '">{y}</span><br/>' +
				   '<span style="font-size:12px;color:silver">Percent (%)</span></div>'
		},
		tooltip: {
			valueSuffix: ' percent'
		}
	}]

}));

</script>

<!-- Penutup Script Grafik Collection -->

<!--slide bar menu end here-->
<script>
var toggle = true;
			
$(".sidebar-icon").click(function() {                
  if (toggle)
  {
	$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
	$("#menu span").css({"position":"absolute"});
  }
  else
  {
	$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
	setTimeout(function() {
	  $("#menu span").css({"position":"relative"});
	}, 400);
  }               
				toggle = !toggle;
			});
</script>
<!--scrolling js-->
		<script src="js/jquery.nicescroll.js"></script>
		<script src="js/scripts.js"></script>
		<!--//scrolling js-->
<script src="js/bootstrap.js"> </script>
<!-- mother grid end here-->
</body>
</html>                     