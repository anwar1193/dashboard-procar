<?php
	
	session_start();
	error_reporting(0);
	include 'koneksi.php';

	// Cek Jika Belum Login, Kembalikan Ke Halaman Login
	if(!isset($_SESSION['login'])){
		header('location:login.php');
		exit;
	}

	$bulan = date('m');
	$tanggal_now = date('d');
	$bulan_now = date('m');
	$tahun_now = date("Y");
	$cabang = $_GET['BranchName'];
	
	include 'sales_map_query.php';

	//Bentuk Rupiah
	function rupiah($angka){
		$hasil_rupiah = number_format($angka,0,',','.');
		return $hasil_rupiah;
	}
?>

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

<!-- Custom Box Tunggakan -->
<link href="css/custom_tunggakan.css" rel="stylesheet" type="text/css" media="all"/>

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

</head>
<body>


<div class="page-container">	
   <div class="left-content">
	   <div class="mother-grid-inner">
			
			<!--header start here-->
				<div class="header-main" style="padding:2px">
					&nbsp;&nbsp;
					<h5 style="display: inline-block;">Dashboard PT Procar Finance (Data Bulan Berjalan) Cabang <?= $_GET['BranchName'] ?></h5>
					<!-- Button Peta modal -->
					<button type="button" style="display: inline-block;" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#exampleModal">
					  Peta Cabang
					</button>
					
					<!-- Button Data Bulan Lalu -->
					<!-- <a href="index_lalu.php" class="btn btn-success btn-xs" style="display: inline-block;">Bulan Lalu</a> -->
				
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
	
	<div class="col-md-3"> <!-- Colum grafik sales -->	
		
		<a href="sales.php">
		<div class="tampil_sales" style="border:double;">
			<div class="market-update-block" style="padding:5px; background-color: #4ce600">
				<div class="col-md-12 market-update-left">
					
					<p id="header_4">SALES <?php echo $nama_bulan.' '.$tahun_sales; //sebelumnya $nama_bulan;?></p>
					<p id="ket_waktu">Data per <?php echo $tgl_sales ?></p>
					
					
				</div>
			  <div class="clearfix"> </div>
			</div>
		</div>
		</a>	
		
		<div class="tampil_sales" style="border:double;">
			<div style="width: 250px; height: 205px; margin: 0 auto;"> <!-- Lebar Area Seluruh Grafik -->
				<div id="sales" style="width: 240px; height: 205px; float: left"></div> <!-- Spasi Antar Grafik -->
			</div>
		</div>
	</div>
	
	<div class="col-md-3"> <!-- Colum grafik collectibility -->
		
		
		<div class="tampil_collectibility" style="border:double;">
			<div class="market-update-block" style="padding:5px; background-color: #ff8533">
				<div class="col-md-12 market-update-left">
					
					<p id="header_4">COLLECTIBILITY <?php echo $nama_bulan.' '.$tahun_sales; //sebelumnya $nama_bulan;?></p>
					<p id="ket_waktu">Data per <?php echo $tgl_coll; ?></p>
					
				</div>
			  <div class="clearfix"> </div>
			</div>
		</div>	
		
		<div class="tampil_coll" style="border:double;">
			<div style="width: 250px; height: 205px; margin: 0 auto;"> <!-- Lebar Area Seluruh Grafik -->
				<div id="collection" style="width: 240px; height: 205px; float: left"></div>
			</div>
		</div>
	</div>
	
	<div class="col-md-3"> <!-- Colum grafik collection (tunggakan) -->
		<a href="collection.php">
		<div class="tampil_collectibility" style="border:double;">
			<div class="market-update-block" style="padding:5px; background-color: #3333cc">
				<div class="col-md-12 market-update-left">
					
					<p id="header_4">TUNGGAKAN <?php echo $nama_bulan.' '; //sebelumnya $nama_bulan; ?> <?php echo $tahun_tung; ?></p>
					<p id="ket_waktu">Data per <?php echo $tgl_tung; ?></p>
					
						
				</div>
			  <div class="clearfix"> </div>
			</div>
		</div>	
		</a>
		
		<div class="" style="border:double;"><br />
			<div style="width: 250px; height: 185px; margin: 0 auto; "> <!-- Lebar Area Seluruh Grafik -->
				
				&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
				<p id="teks_judul"><b>(%)</b></p>
				&nbsp; &nbsp; &nbsp;
				<p id="teks_judul"><b>OS Pokok</b></p>

				<br>
				
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
	
	<div class="col-md-3"> <!-- Colum grafik ayda -->
		
		<div class="tampil_sales" style="border:double;">
			<div class="market-update-block" style="padding:5px; background-color: #ff3300">
				<div class="col-md-12 market-update-left">
						
						<p id="header_4">AYDA <?php echo $nama_bulan.' '; //sebelumnya $nama_bulan; ?> <?php echo $tahun_ayda; ?></p>
						<p id="ket_waktu">Data per <?php echo $tgl_ayda; ?></p>
						
				</div>
			  <div class="clearfix"> </div>
			</div>
		</div>	
		
		<div class="tampil_ayda" style="border:double;"><br />
			<div style="width: 250px; height: 185px; margin: 0 auto;"> <!-- Lebar Area Seluruh Grafik -->
				
				&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
				<p id="teks_judul"><b>Unit</b></p>
				&nbsp; &nbsp; &nbsp;
				<p id="teks_judul"><b>OS Pokok</b></p>

				<br />
				
				
				<p id="teks"><b>Awal</b></p>
				<?php if($data_ayda['unit_awal'] == ''){ ?>
					<div id="box_ayda1">0</div> 
				<?php }else{ ?>
					<div id="box_ayda1"><?php echo $data_ayda['unit_awal'];?></div> 
				<?php } ?>

				<div id="box_ayda2"><?php echo rupiah($data_ayda['os_awal']); ?></div>				
				
				<br />
				
				
				<p id="teks"><b>Ayda In</b></p>
				<?php if($data_ayda['penambahan_unit'] == ''){ ?>
					<div id="box_ayda1">0</div>
				<?php }else{ ?>
					<div id="box_ayda1"><?php echo $data_ayda['penambahan_unit'];?></div>
				<?php } ?>
				 
				<div id="box_ayda2"><?php echo rupiah($data_ayda['penambahan_os']); ?></div>				
				
				<br />
				
				<p id="teks"><b>Ayda Out</b></p>
				<?php if($data_ayda['pengurangan_unit'] == ''){ ?>
					<div id="box_ayda1">0</div>
				<?php }else{ ?>
					<div id="box_ayda1"><?php echo $data_ayda['pengurangan_unit'];?></div>
				<?php } ?>
				 
				<div id="box_ayda2"><?php echo rupiah($data_ayda['pengurangan_os']); ?></div>			
				
				<br />
				
				
				<p id="teks"><b>Sisa</b></p>
				<?php if($data_ayda['unit_akhir'] == ''){ ?>
					<div id="box_ayda1">0</div>
				<?php }else{ ?>
					<div id="box_ayda1"><?php echo $data_ayda['unit_akhir']; ?></div>
				<?php } ?>
				 
				<div id="box_ayda2"><?php echo rupiah($data_ayda['os_akhir']); ?></div>
				
								
			</div>
		</div>
		
	</div>
	
</div> <!-- Penutup row content --><br />



<!-- row portfolio, sales, coll, ayda perbulan -->

<div class="row">
	
	<!-- col 6-A sementara -->
	<div class="col-md-6">
		
		<!-- Grafik Portfolio dan Sales Perbulan Nasional -->
		<div id="portfolio-sales" style="min-width: 310px; height: 350px; margin: 0 auto"></div>

		<script type="text/javascript">

		Highcharts.chart('portfolio-sales', {
			chart: {
				zoomType: 'xy'
			},
			title: {
				text: '<style="font-size:15px">Portfolio & Sales Nasional <?= $tahun_now; ?></style>'
			},
			credits: { //untuk menghilangkan link highchart.com di bawah grafik
				enabled: false
			},
			xAxis: [{
				categories: ['Jan 22', 'Feb 22', 'Mar 22', 'Apr 22', 'Mei 22', 'Jun 22',
					'Jul 22', 'Agu 22', 'Sep 22', 'Okt 22', 'Nov 22', 'Des 22'],
				crosshair: true
			}],
			yAxis: [{ // Primary yAxis
				labels: {
					format: '{value}',
					style: {
						color: Highcharts.getOptions().colors[1]
					}
				},
				title: {
					text: 'Sales (Rp)',
					style: {
						color: Highcharts.getOptions().colors[1]
					}
				},
				labels: {
						formatter: function() {
						var ret,
							numericSymbols = [' Ribu', ' Juta', ' Milyar', ' Trilyun', ' P', ' E'],
							i = 6;
						if(this.value >=1000) {
							while (i-- && ret === undefined) {
								multi = Math.pow(1000, i + 1);
								if (this.value >= multi && numericSymbols[i] !== null) {
									ret = (this.value / multi) + numericSymbols[i];
								}
							}
						}
						return (ret ? ret : this.value);
					}
				}
			}, { // Secondary yAxis
				title: {
					text: 'Portfolio (Rp)',
					style: {
						color: Highcharts.getOptions().colors[0]
					}
				},
				labels: {
					formatter: function() {
						var ret,
							numericSymbols = [' Ribu', ' Juta', ' Milyar', ' Trilyun', ' P', ' E'],
							i = 6;
						if(this.value >=1000) {
							while (i-- && ret === undefined) {
								multi = Math.pow(1000, i + 1);
								if (this.value >= multi && numericSymbols[i] !== null) {
									ret = (this.value / multi) + numericSymbols[i];
								}
							}
						}
						return (ret ? ret : this.value);
					},
					style: {
						color: Highcharts.getOptions().colors[0]
					}
				},
				opposite: true
			}],
			tooltip: {
				shared: true
			},
			legend: {
				layout: 'horizontal',
				align: 'left',
				x: 170,
				verticalAlign: 'top',
				y: 40,
				floating: true,
				backgroundColor: (Highcharts.theme && Highcharts.theme.legendBackgroundColor) || 'rgba(255,255,255,0.25)'
			},
			series: [{
				name: 'Portfolio (Rp)',
				type: 'column',
				yAxis: 1,
				data: [
				
					<?php
					
						//Mencari Portfolio Tahun Ini
						$q_port = "SELECT * FROM tbl_portfolio WHERE cabang=$cabang AND tahun='$tahun_now'";
						$r_port = mysqli_query($koneksi,$q_port) or die ('error portfolio');
						$row_port = mysqli_fetch_assoc($r_port);
						
						echo $row_port['jan'].',';
						echo $row_port['feb'].',';
						echo $row_port['mar'].',';
						echo $row_port['apr'].',';
						echo $row_port['mei'].',';
						echo $row_port['jun'].',';
						echo $row_port['jul'].',';
						echo $row_port['agu'].',';
						echo $row_port['sep'].',';
						echo $row_port['okt'].',';
						echo $row_port['nov'].',';
						echo $row_port['des'];
					
					?>
				
				],
				tooltip: {
					valueSuffix: ''
				}

			}, {
				name: 'Sales (Rp)',
				type: 'spline',
				data: [
				
					<?php
				
					// sales tahun ini
					$query_s = "SELECT SUM(IF( Bulan = 01 AND Tahun = '$tahun_now', TotalPenjualan, 0)) AS penjualan_1,
										SUM(IF( Bulan = 02 AND Tahun = '$tahun_now', TotalPenjualan, 0)) AS penjualan_2,
										SUM(IF( Bulan = 03 AND Tahun = '$tahun_now', TotalPenjualan, 0)) AS penjualan_3,
										SUM(IF( Bulan = 04 AND Tahun = '$tahun_now', TotalPenjualan, 0)) AS penjualan_4,
										SUM(IF( Bulan = 05 AND Tahun = '$tahun_now', TotalPenjualan, 0)) AS penjualan_5,
										SUM(IF( Bulan = 06 AND Tahun = '$tahun_now', TotalPenjualan, 0)) AS penjualan_6,
										SUM(IF( Bulan = 07 AND Tahun = '$tahun_now', TotalPenjualan, 0)) AS penjualan_7,
										SUM(IF( Bulan = 08 AND Tahun = '$tahun_now', TotalPenjualan, 0)) AS penjualan_8,
										SUM(IF( Bulan = 09 AND Tahun = '$tahun_now', TotalPenjualan, 0)) AS penjualan_9,
										SUM(IF( Bulan = 10 AND Tahun = '$tahun_now', TotalPenjualan, 0)) AS penjualan_10,
										SUM(IF( Bulan = 11 AND Tahun = '$tahun_now', TotalPenjualan, 0)) AS penjualan_11,
										SUM(IF( Bulan = 12 AND Tahun = '$tahun_now', TotalPenjualan, 0)) AS penjualan_12
										FROM tbl_sales WHERE BranchName=$cabang";
					$result_s = mysqli_query($koneksi,$query_s) or die ('error fungsi');
					$row_s = mysqli_fetch_assoc($result_s);
					
					// Tampilkan Sales
					echo $row_s['penjualan_1'].',';
					echo $row_s['penjualan_2'].',';
					echo $row_s['penjualan_3'].',';
					echo $row_s['penjualan_4'].',';
					echo $row_s['penjualan_5'].',';
					echo $row_s['penjualan_6'].',';
					echo $row_s['penjualan_7'].',';
					echo $row_s['penjualan_8'].',';
					echo $row_s['penjualan_9'].',';
					echo $row_s['penjualan_10'].',';
					echo $row_s['penjualan_11'].',';
					echo $row_s['penjualan_12'];
				  
				  ?>
				
				],
				tooltip: {
					valueSuffix: ''
				}
			}]
		});
		</script>
		
	</div>
	<!-- penutup col 6-A sementara -->
	
	<!-- col 6-B sementara -->
	<div class="col-md-6">
		
		<!-- Grafik Collectibility Nasional-->
		<div id="collectibility" style="min-width: 310px; height: 200px; margin: 0 auto"></div>

		<script type="text/javascript">

		Highcharts.chart('collectibility', {
			chart: {
				zoomType: 'xy'
			},
			title: {
				text: '<style="font-size:15px">Collectibility Nasional <?= $tahun_now; ?></style>'
			},
			credits: { //untuk menghilangkan link highchart.com di bawah grafik
				enabled: false
			},
			xAxis: [{
				categories: ['Jan 22', 'Feb 22', 'Mar 22', 'Apr 22', 'Mei 22', 'Jun 22',
					'Jul 22', 'Agu 22', 'Sep 22', 'Okt 22', 'Nov 22', 'Des 22'],
				crosshair: true
			}],
			yAxis: [{ // Primary yAxis
				labels: {
					format: '{value}',
					style: {
						color: Highcharts.getOptions().colors[1]
					}
				},
				title: {
					text: 'Realisasi (%)',
					style: {
						color: Highcharts.getOptions().colors[1]
					}
				}
			}, { // Secondary yAxis
				title: {
					text: 'Realisasi (Rp)',
					style: {
						color: Highcharts.getOptions().colors[0]
					}
				},
				labels: {
					formatter: function() {
						var ret,
							numericSymbols = [' Ribu', ' Juta', ' Milyar', ' Trilyun', ' P', ' E'],
							i = 6;
						if(this.value >=1000) {
							while (i-- && ret === undefined) {
								multi = Math.pow(1000, i + 1);
								if (this.value >= multi && numericSymbols[i] !== null) {
									ret = (this.value / multi) + numericSymbols[i];
								}
							}
						}
						return (ret ? ret : this.value);
					},
					style: {
						color: Highcharts.getOptions().colors[0]
					}
				},
				opposite: true
			}],
			tooltip: {
				shared: true
			},
			legend: {
				layout: 'horizontal',
				align: 'left',
				x: 150,
				verticalAlign: 'top',
				y: 30,
				floating: true,
				backgroundColor: (Highcharts.theme && Highcharts.theme.legendBackgroundColor) || 'rgba(255,255,255,0.25)'
			},
			series: [{
				name: 'Realisasi(Rp)',
				type: 'column',
				yAxis: 1,
				data: [
				
					<?php
					
						//query collectibility nasional (amount) tahun ini
						$q_coll_nas = "SELECT * FROM tbl_coll_nas WHERE cabang=$cabang AND tahun='$tahun_now'";
						$r_coll_nas = mysqli_query($koneksi,$q_coll_nas) or die ('error coll nas');
						$row_coll_nas = mysqli_fetch_assoc($r_coll_nas);
						
						echo $row_coll_nas['real_1'].',';
						echo $row_coll_nas['real_2'].',';
						echo $row_coll_nas['real_3'].',';
						echo $row_coll_nas['real_4'].',';
						echo $row_coll_nas['real_5'].',';
						echo $row_coll_nas['real_6'].',';
						echo $row_coll_nas['real_7'].',';
						echo $row_coll_nas['real_8'].',';
						echo $row_coll_nas['real_9'].',';
						echo $row_coll_nas['real_10'].',';
						echo $row_coll_nas['real_11'].',';
						echo $row_coll_nas['real_12'];

						// echo $total_payment_coll.',';
					
					?>
				
				],
				tooltip: {
					valueSuffix: ''
				}

			}, {
				name: 'Realisasi(%)',
				type: 'spline',
				data: [
					<?php
					
						//query collectibility nasional (persen) tahun ini
						$q_coll_nass = "SELECT * FROM tbl_coll_nas WHERE cabang=$cabang AND tahun='$tahun_now'";
						$r_coll_nass = mysqli_query($koneksi,$q_coll_nass) or die ('error coll nas2');
						$row_coll_nass = mysqli_fetch_assoc($r_coll_nass);
						
						echo $row_coll_nass['pers_1'].',';
						echo $row_coll_nass['pers_2'].',';
						echo $row_coll_nass['pers_3'].',';
						echo $row_coll_nass['pers_4'].',';
						echo $row_coll_nass['pers_5'].',';
						echo $row_coll_nass['pers_6'].',';
						echo $row_coll_nass['pers_7'].',';
						echo $row_coll_nass['pers_8'].',';
						echo $row_coll_nass['pers_9'].',';
						echo $row_coll_nass['pers_10'].',';
						echo $row_coll_nass['pers_11'].',';
						echo $row_coll_nass['pers_12'];

						// echo substr($persentase_collection, 0,4).',';
					
					?>
				],
				tooltip: {
					valueSuffix: '%'
				}
			}]
		});
		</script>
		
		
		<!-- Grafik Ayda Perbulan -->
		<div id="ayda_perbulan" style="min-width: 310px; height: 200px; margin: 0 auto"></div>

		<script type="text/javascript">

			Highcharts.chart('ayda_perbulan', {

				title: {
					text: '<style="font-size:15px">Ayda Nasional <?= $tahun_now; ?></style>'
				},
				
				credits: { //untuk menghilangkan link highchart.com di bawah grafik
					enabled: false
				},

				yAxis: {
					title: {
						text: ''
					},
					labels: {
							formatter: function() {
							var ret,
								numericSymbols = [' Ribu', ' Juta', ' Milyar', ' Trilyun', ' P', ' E'],
								i = 6;
							if(this.value >=1000) {
								while (i-- && ret === undefined) {
									multi = Math.pow(1000, i + 1);
									if (this.value >= multi && numericSymbols[i] !== null) {
										ret = (this.value / multi) + numericSymbols[i];
									}
								}
							}
							return 'Rp ' + (ret ? ret : this.value);
						}
					}
				},
				xAxis: [{
					categories: ['Jan 22', 'Feb 22', 'Mar 22', 'Apr 22', 'Mei 22', 'Jun 22',
						'Jul 22', 'Agu 22', 'Sep 22', 'Okt 22', 'Nov 22', 'Des 22'],
					crosshair: true
				}],
				legend: {
					layout: 'vertical',
					align: 'right',
					verticalAlign: 'middle'
				},

				plotOptions: {
					series: {
						label: {
							connectorAllowed: false
						}
					}
				},

				series: [{
					name: 'Ayda In',
					data: [
					
								<?php
				
										// data AYDA-IN Tahun Ini
										$q_ayda_in = "SELECT SUM(IF( bulan = 1 AND tahun = '$tahun_now', penambahan_os, 0)) AS ayda1,
															SUM(IF( bulan = 2 AND tahun = '$tahun_now', penambahan_os, 0)) AS ayda2,
															SUM(IF( bulan = 3 AND tahun = '$tahun_now', penambahan_os, 0)) AS ayda3,
															SUM(IF( bulan = 4 AND tahun = '$tahun_now', penambahan_os, 0)) AS ayda4,
															SUM(IF( bulan = 5 AND tahun = '$tahun_now', penambahan_os, 0)) AS ayda5,
															SUM(IF( bulan = 6 AND tahun = '$tahun_now', penambahan_os, 0)) AS ayda6,
															SUM(IF( bulan = 7 AND tahun = '$tahun_now', penambahan_os, 0)) AS ayda7,
															SUM(IF( bulan = 8 AND tahun = '$tahun_now', penambahan_os, 0)) AS ayda8,
															SUM(IF( bulan = 9 AND tahun = '$tahun_now', penambahan_os, 0)) AS ayda9,
															SUM(IF( bulan = 10 AND tahun = '$tahun_now', penambahan_os, 0)) AS ayda10,
															SUM(IF( bulan = 11 AND tahun = '$tahun_now', penambahan_os, 0)) AS ayda11,
															SUM(IF( bulan = 12 AND tahun = '$tahun_now', penambahan_os, 0)) AS ayda12
															FROM tbl_ayda_asli WHERE BranchName=$cabang";
										$res_ayda_in = mysqli_query($koneksi,$q_ayda_in) or die ('error fungsi');
										$row_ayda_in = mysqli_fetch_assoc($res_ayda_in);
										
										echo $row_ayda_in['ayda1'].','.$row_ayda_in['ayda2'].','.$row_ayda_in['ayda3'].','.$row_ayda_in['ayda4']
										.','.$row_ayda_in['ayda5'].','.$row_ayda_in['ayda6'].','.$row_ayda_in['ayda7'].','.$row_ayda_in['ayda8']
										.','.$row_ayda_in['ayda9'].','.$row_ayda_in['ayda10'].','.$row_ayda_in['ayda11'].','.$row_ayda_in['ayda12'];
									  
								?>
					
					]
				}, {
					name: 'Ayda Out',
					data: [
					
						<?php
				
								// Data AYDA OUT Tahun Ini
								$q_ayda_out = "SELECT SUM(IF( bulan = 1 AND tahun = '$tahun_now', pengurangan_os, 0)) AS jualan_ayda1,
													SUM(IF( bulan = 2 AND tahun = '$tahun_now', pengurangan_os, 0)) AS jualan_ayda2,
													SUM(IF( bulan = 3 AND tahun = '$tahun_now', pengurangan_os, 0)) AS jualan_ayda3,
													SUM(IF( bulan = 4 AND tahun = '$tahun_now', pengurangan_os, 0)) AS jualan_ayda4,
													SUM(IF( bulan = 5 AND tahun = '$tahun_now', pengurangan_os, 0)) AS jualan_ayda5,
													SUM(IF( bulan = 6 AND tahun = '$tahun_now', pengurangan_os, 0)) AS jualan_ayda6,
													SUM(IF( bulan = 7 AND tahun = '$tahun_now', pengurangan_os, 0)) AS jualan_ayda7,
													SUM(IF( bulan = 8 AND tahun = '$tahun_now', pengurangan_os, 0)) AS jualan_ayda8,
													SUM(IF( bulan = 9 AND tahun = '$tahun_now', pengurangan_os, 0)) AS jualan_ayda9,
													SUM(IF( bulan = 10 AND tahun = '$tahun_now', pengurangan_os, 0)) AS jualan_ayda10,
													SUM(IF( bulan = 11 AND tahun = '$tahun_now', pengurangan_os, 0)) AS jualan_ayda11,
													SUM(IF( bulan = 12 AND tahun = '$tahun_now', pengurangan_os, 0)) AS jualan_ayda12
													FROM tbl_ayda_asli WHERE BranchName=$cabang";
								$res_ayda_out = mysqli_query($koneksi,$q_ayda_out) or die ('error fungsi');
								$row_ayda_out = mysqli_fetch_assoc($res_ayda_out);

								
								echo $row_ayda_out['jualan_ayda1'].','.$row_ayda_out['jualan_ayda2'].','.$row_ayda_out['jualan_ayda3'].','.$row_ayda_out['jualan_ayda4']
								.','.$row_ayda_out['jualan_ayda5'].','.$row_ayda_out['jualan_ayda6'].','.$row_ayda_out['jualan_ayda7'].','.$row_ayda_out['jualan_ayda8']
								.','.$row_ayda_out['jualan_ayda9'].','.$row_ayda_out['jualan_ayda10'].','.$row_ayda_out['jualan_ayda11'].','.$row_ayda_out['jualan_ayda12'];
							  
						?>
					
					]
				}],

				responsive: {
					rules: [{
						condition: {
							maxWidth: 500
						},
						chartOptions: {
							legend: {
								layout: 'horizontal',
								align: 'center',
								verticalAlign: 'bottom'
							}
						}
					}]
				}

			});
		</script>
		
	</div>
	<!-- penutup col 6-B sementara -->
	
</div>

<!-- Penutup row portfolio, sales, coll, ayda perbulan -->


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