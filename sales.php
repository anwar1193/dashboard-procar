<?php
	
	session_start();
	error_reporting(0);
	include 'koneksi.php';
	
	// Cek Jika Belum Login, Kembalikan Ke Halaman Login
	if(!isset($_SESSION['login'])){
		header('location:login.php');
		exit;
	}
	
	$tanggal = date('d');
	$bulan = date('m');
	$bulan_now = date('m');
	$bulan_sales = date('m');
	$bulan_lalu = date('m', time() - 60*60*24*30);
	$tahun_bulan_lalu = date('Y', time() - 60*60*24*30);
	$tahun_now = date("Y");
	
	
	//Bentuk Rupiah
	function rupiah($angka){
		$hasil_rupiah = number_format($angka,0,',','.');
		return $hasil_rupiah;
	}
	
	include 'nama_bulan_lalu.php';
	
	//--------------------------------------------------------------------------------------------
	//query data sales sampai bulan ini
	$query_sales = "SELECT SUM(IF(Tahun = $tahun_now, TotalPenjualan, 0)) AS penjualan
						FROM tbl_sales";
	$result_sales = mysqli_query($koneksi,$query_sales) or die ('error fungsi');
	$row_sales = mysqli_fetch_array($result_sales);
	$sales = $row_sales['penjualan'];
	
	//query target sales setahun
	$query_tar_sales = "SELECT SUM(TOTAL) AS target FROM tbl_target WHERE tahun='2021'";
	
	$result_tar_sales = mysqli_query($koneksi,$query_tar_sales) or die ('error fungsi');
	$row_tar_sales = mysqli_fetch_array($result_tar_sales);
	$target_sales = $row_tar_sales['target'].'000000';
	
	//Persentase sales sampai bulan ini
	$persen_sales = ($sales/$target_sales)*100;
	
	//--------------------------------------------------------------------------------------------
	
	//query data sales bulan lalu
	/**$query_sales_blalu = "SELECT SUM(IF( Bulan = '$bulan_lalu' AND Tahun = $tahun_now, TotalPenjualan, 0)) AS penjualan
						FROM tbl_sales";**/
	
	$query_sales_blalu = "SELECT SUM(PokokPinjaman) AS tPenjualan FROM tbl_grafik_sales WHERE
									DAY(BOOKINGDATE) BETWEEN 1 AND $tanggal AND MONTH(BOOKINGDATE)=$bulan_lalu AND YEAR(BOOKINGDATE)='$tahun_bulan_lalu'";
	
	$result_sales_blalu = mysqli_query($koneksi,$query_sales_blalu) or die ('error fungsi');
	$row_sales_blalu = mysqli_fetch_array($result_sales_blalu);
	$sales_blalu = $row_sales_blalu['tPenjualan'];
	
	//query target sales bulan lalu
	if($bulan_lalu=='01'){
		$query_tar_sales_blalu = "SELECT SUM(JAN) AS target FROM tbl_target WHERE tahun='$tahun_bulan_lalu'";
	}else if($bulan_lalu=='02'){
		$query_tar_sales_blalu = "SELECT SUM(FEB) AS target FROM tbl_target WHERE tahun='$tahun_bulan_lalu'";
	}else if($bulan_lalu=='03'){
		$query_tar_sales_blalu = "SELECT SUM(MAR) AS target FROM tbl_target WHERE tahun='$tahun_bulan_lalu'";
	}else if($bulan_lalu=='04'){
		$query_tar_sales_blalu = "SELECT SUM(APR) AS target FROM tbl_target WHERE tahun='$tahun_bulan_lalu'";
	}else if($bulan_lalu=='05'){
		$query_tar_sales_blalu = "SELECT SUM(MEI) AS target FROM tbl_target WHERE tahun='$tahun_bulan_lalu'";
	}else if($bulan_lalu=='06'){
		$query_tar_sales_blalu = "SELECT SUM(JUN) AS target FROM tbl_target WHERE tahun='$tahun_bulan_lalu'";
	}else if($bulan_lalu=='07'){
		$query_tar_sales_blalu = "SELECT SUM(JUL) AS target FROM tbl_target WHERE tahun='$tahun_bulan_lalu'";
	}else if($bulan_lalu=='08'){
		$query_tar_sales_blalu = "SELECT SUM(AGU) AS target FROM tbl_target WHERE tahun='$tahun_bulan_lalu'";
	}else if($bulan_lalu=='09'){
		$query_tar_sales_blalu = "SELECT SUM(SEP) AS target FROM tbl_target WHERE tahun='$tahun_bulan_lalu'";
	}else if($bulan_lalu=='10'){
		$query_tar_sales_blalu = "SELECT SUM(OKT) AS target FROM tbl_target WHERE tahun='$tahun_bulan_lalu'";
	}else if($bulan_lalu=='11'){
		$query_tar_sales_blalu = "SELECT SUM(NOV) AS target FROM tbl_target WHERE tahun='$tahun_bulan_lalu'";
	}else if($bulan_lalu=='12'){
		$query_tar_sales_blalu = "SELECT SUM(DES) AS target FROM tbl_target WHERE tahun='$tahun_bulan_lalu'";
	}
	$result_tar_sales_blalu = mysqli_query($koneksi,$query_tar_sales_blalu) or die ('error fungsis');
	$row_tar_sales_blalu = mysqli_fetch_array($result_tar_sales_blalu);
	$target_sales_blalu = $row_tar_sales_blalu['target'].'000000';
	
	//Persentase sales bulan ini
	$persen_sales_blalu = ($sales_blalu/$target_sales_blalu)*100;
	
	//--------------------------------------------------------------------------------------------
	
	//query data sales bulan ini
	$query_sales_bini = "SELECT SUM(IF( Bulan = '$bulan_now' AND Tahun = $tahun_now, TotalPenjualan, 0)) AS penjualan
						FROM tbl_sales";
	$result_sales_bini = mysqli_query($koneksi,$query_sales_bini) or die ('error fungsi');
	$row_sales_bini = mysqli_fetch_array($result_sales_bini);
	$sales_bini = $row_sales_bini['penjualan'];
	
	//query target sales bulan ini
	if($bulan_now=='01'){
		$query_tar_sales_bini = "SELECT SUM(JAN) AS target FROM tbl_target WHERE tahun='$tahun_now'";
	}else if($bulan_now=='02'){
		$query_tar_sales_bini = "SELECT SUM(FEB) AS target FROM tbl_target WHERE tahun='$tahun_now'";
	}else if($bulan_now=='03'){
		$query_tar_sales_bini = "SELECT SUM(MAR) AS target FROM tbl_target WHERE tahun='$tahun_now'";
	}else if($bulan_now=='04'){
		$query_tar_sales_bini = "SELECT SUM(APR) AS target FROM tbl_target WHERE tahun='$tahun_now'";
	}else if($bulan_now=='05'){
		$query_tar_sales_bini = "SELECT SUM(MEI) AS target FROM tbl_target WHERE tahun='$tahun_now'";
	}else if($bulan_now=='06'){
		$query_tar_sales_bini = "SELECT SUM(JUN) AS target FROM tbl_target WHERE tahun='$tahun_now'";
	}else if($bulan_now=='07'){
		$query_tar_sales_bini = "SELECT SUM(JUL) AS target FROM tbl_target WHERE tahun='$tahun_now'";
	}else if($bulan_now=='08'){
		$query_tar_sales_bini = "SELECT SUM(AGU) AS target FROM tbl_target WHERE tahun='$tahun_now'";
	}else if($bulan_now=='09'){
		$query_tar_sales_bini = "SELECT SUM(SEP) AS target FROM tbl_target WHERE tahun='$tahun_now'";
	}else if($bulan_now=='10'){
		$query_tar_sales_bini = "SELECT SUM(OKT) AS target FROM tbl_target WHERE tahun='$tahun_now'";
	}else if($bulan_now=='11'){
		$query_tar_sales_bini = "SELECT SUM(NOV) AS target FROM tbl_target WHERE tahun='$tahun_now'";
	}else if($bulan_now=='12'){
		$query_tar_sales_bini = "SELECT SUM(DES) AS target FROM tbl_target WHERE tahun='$tahun_now'";
	}
	$result_tar_sales_bini = mysqli_query($koneksi,$query_tar_sales_bini) or die ('error fungsi');
	$row_tar_sales_bini = mysqli_fetch_array($result_tar_sales_bini);
	$target_sales_bini= $row_tar_sales_bini['target'].'000000';
	
	//Persentase sales bulan ini
	$persen_sales_bini = ($sales_bini/$target_sales_bini)*100;
	
	
	//--------------------------------------------------------------------------------------------------------
	
	// Mencari Data Average Interest Rate
	$q_avgRate = "SELECT SUM(PokokPinjaman * EffectiveRate) AS rate_PokokPinjaman,
						 SUM(PokokPinjaman * EffectiveRateDealer) AS rateDeal_PokokPinjaman,
						 SUM(PokokPinjaman) AS tot_pokokPinjaman
						 FROM tbl_grafik_sales WHERE MONTH(BOOKINGDATE)=$bulan_now AND YEAR(BOOKINGDATE)=$tahun_now";
	$r_avgRate = mysqli_query($koneksi,$q_avgRate) or die ('error fungsi Rate');
	
	$row_avgRate = mysqli_fetch_array($r_avgRate);
	
	$ratePP = $row_avgRate['rate_PokokPinjaman'];
	$rateDealPP = $row_avgRate['rateDeal_PokokPinjaman'];
	$totPP = $row_avgRate['tot_pokokPinjaman'];
	
	$avg_before = $ratePP / $totPP;
	$avg_after = $rateDealPP / $totPP;
	

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

<style>
		
			/** ini untuk kotak sales **/
			
			.sales_lalu_head{
				border: 1px solid #999;
				width: 90px;
				margin-top: 10px;
				margin-left: 5px;
				font-size: 12px;
				text-align: center;
				padding: 5px;
				font-weight: bold;
				background-color: yellow;
			}
			
			.sales_lalu{
				border: 1px solid #999;
				width: 90px;
				height: 50px;
				margin-left: 5px;
				font-size: 20px;
				text-align: center;
				padding: 5px;
				font-weight: bold;
			}
			
			.sales_berjalan_head{
				border: 1px solid #999;
				width: 90px;
				margin-top: 10px;
				margin-left: 5px;
				font-size: 12px;
				text-align: center;
				padding: 5px;
				font-weight: bold;
				background-color: #d1f540;
			}
			
			.sales_berjalan{
				border: 1px solid #999;
				width: 90px;
				height: 50px;
				margin-left: 5px;
				font-size: 20px;
				text-align: center;
				padding: 5px;
				font-weight: bold;
			}
			
			.avg_before_head{
				border: 1px solid #999;
				width: 120px;
				margin-top: 10px;
				font-size: 18px;
				text-align: center;
				padding: 5px;
				font-weight: bold;
				background-color: #26edd9;
			}
			
			.avg_before_content{
				border: 1px solid #999;
				width: 120px;
				height: 80px;
				font-size: 30px;
				text-align: center;
				padding: 5px;
				font-weight: bold;
			}
			
			.avg_after_head{
				border: 1px solid #999;
				width: 120px;
				margin-top: 10px;
				font-size: 18px;
				text-align: center;
				padding: 5px;
				font-weight: bold;
				background-color: #26edd9;
			}
			
			.avg_after_content{
				border: 1px solid #999;
				width: 120px;
				height: 80px;
				font-size: 30px;
				text-align: center;
				padding: 5px;
				font-weight: bold;
			}
			
			#table-scroll tbody{
				clear: both;
				height: 300px;
				overflow:auto;
				float:right;
				width:800px;
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
					<h5 style="display: inline-block;">Dashboard PT Procar Finance (Rincian Sales)</h5>
					
				
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
	
	<div class="col-md-1"> <!-- Colum buat spasi --></div>
	
	
	<div class="col-md-3"> <!-- Colum grafik sales -->	
		
		<div class="tampil_sales" style="border:double;">
			<div class="market-update-block clr-block-1" style="padding:5px">
				<div class="col-md-12 market-update-left">
					
					<p id="header_4">Target & Realisasi (Jan-Des <?php echo $tahun_now; ?>)</p>
					
					
				</div>
			  <div class="clearfix"> </div>
			</div>
		</div>	
		
		<div class="tampil_sales" style="border:double;">
			<div style="width: 250px; height: 190px; margin: 0 auto;"> <!-- Lebar Area Seluruh Grafik -->
				<div id="sales" style="width: 240px; height: 190px; float: left"></div> <!-- Spasi Antar Grafik -->
			</div>
		</div>
	</div>
	
	<div class="col-md-3"> <!-- Colum grafik collectibility -->
		
		<div class="tampil_collectibility" style="border:double;">
			<div class="market-update-block clr-block-2" style="padding:5px">
				<div class="col-md-12 market-update-left">
					
					<p id="header_4">Perbandingan Sales <?php echo substr($nama_bulan_lalu,0,3); ?> & <?php echo substr($nama_bulan,0,3); ?> <?php echo $tahun_now; ?></p>
					
				</div>
			  <div class="clearfix"> </div>
			</div>
		</div>	
		
		<div class="tampil_coll" style="border:double;">
			<div style="width: 250px; height: 190px; margin: 0 auto;"> <!-- Lebar Area Seluruh Grafik -->
				
				<!-- Perbandingan Bulan -->
				<div class="row">
					<div class="col-md-4">
						<div class="sales_lalu_head">
							Bln Lalu
						</div>
						
						<div class="sales_lalu">
							<?php echo substr($persen_sales_blalu,0,4); ?>%
						</div>
					</div>
					
					<div class="col-md-4">
						<div class="sales_berjalan_head">
							Bln Berjalan
						</div>
						
						<div class="sales_berjalan">
							<?php echo substr($persen_sales_bini,0,4); ?>%
						</div>
					</div>
					
					<div class="col-md-4">
						<?php
						
							if($persen_sales_blalu > $persen_sales_bini){
						
						?>
							<img src="images/panah_bawah.png" width="50" height="60" style="margin-top:15px; margin-left:5px;"/>
						<?php }else{ ?>
							<img src="images/panah_atas.png" width="50" height="60" style="margin-top:15px; margin-left:5px;"/>
						<?php } ?>
					</div>
				</div>
				
				<!-- Perbandingan Tahun -->
				<div class="row">
					<div class="col-md-4">
						<div class="sales_lalu_head">
							Thn Lalu
						</div>
						
						<div class="sales_lalu">
							%
						</div>
					</div>
					
					<div class="col-md-4">
						<div class="sales_berjalan_head">
							Thn Berjalan
						</div>
						
						<div class="sales_berjalan">
							<?php echo substr($persen_sales,0,4); ?>%
						</div>
					</div>
					
					<div class="col-md-4">
						<img src="images/panah_atas.png" width="50" height="60" style="margin-top:15px; margin-left:5px;"/>
					</div>
				</div>
				
				
				
				
			</div>
		</div>
	</div>
	
	
	<div class="col-md-4"> <!-- Colum grafik Average Interst Rate -->
		
		<div class="tampil_sales" style="border:double;">
			<div class="market-update-block clr-block-3" style="padding:5px">
				<div class="col-md-12 market-update-left">
						
						<p id="header_4" style="text-align:center;">Average Interest Rate <?php echo $tahun_now; ?></p>
						
				</div>
			  <div class="clearfix"> </div>
			</div>
		</div>	
		
		<div class="tampil_ayda" style="border:double;"><br />
			<div style="width: 250px; height: 170px; margin: 0 auto;"> <!-- Lebar Area Seluruh Grafik -->
				
				<!-- row content Average Intereset Rate -->
				<div class="row">
					
					<div class="col-md-6">
						<div class="avg_before_head">
							Before
						</div>
						
						<div class="avg_before_content">
							<?php echo substr($avg_before,0,5); ?>%
						</div>
					</div>
					
					<div class="col-md-6">
						<div class="avg_after_head">
							After
						</div>
						
						<div class="avg_after_content">
							<?php echo substr($avg_after,0,5); ?>%
						</div>
					</div>
					
				</div>
				<!-- Penutup row content Average Intereset Rate -->
				
			</div>
		</div>
		
	</div>
	
</div> <!-- Penutup row content --><br />


<!-- row table ranking sales cabang -->
<div class="row">
	
	<div class="col-md-9 col-md-offset-1">
		<h5 class="text-center" style="margin-top:20px;">Data Sales By Cabang (Ranking)</h5>
		<table id="table-scroll" class="table" style="margin-top:10px;">
			<tbody>
				<tr style="background:orange; color:white;">
					<th>Ranking</th>
					<th>Nama Cabang</th>
					<th>Wilayah</th>
					<th>Target Sales</th>
					<th>Realisasi</th>
					<th>Persentase</th>
				</tr>
		<?php
		
			$no=0;
			$q_sales_rank = "SELECT * FROM tbl_sales WHERE bulan=$bulan_now AND tahun=$tahun_now GROUP BY BranchName ORDER BY TotalPenjualan DESC";
			$r_sales_rank = mysqli_query($koneksi,$q_sales_rank) or die ('error fungsi');
			
			while($row_sales_rank = mysqli_fetch_array($r_sales_rank)){
				$no++;
				$cabang = $row_sales_rank['BranchName'];
				$pencapaian = $row_sales_rank['TotalPenjualan'];
				
				$q_targets = "SELECT * FROM tbl_target WHERE BranchName='$cabang' AND tahun='2021'";
				$r_targets = mysqli_query($koneksi,$q_targets) or die ('error targets');
				$row_targets = mysqli_fetch_array($r_targets);
				
				switch($bulan_now){
					case 01 : $target = $row_targets['JAN'].'000000'; break;
					case 02 : $target = $row_targets['FEB'].'000000'; break;
					case 03 : $target = $row_targets['MAR'].'000000'; break;
					case 04 : $target = $row_targets['APR'].'000000'; break;
					case 05 : $target = $row_targets['MEI'].'000000'; break;
					case 06 : $target = $row_targets['JUN'].'000000'; break;
					case 07 : $target = $row_targets['JUL'].'000000'; break;
					case 08 : $target = $row_targets['AGU'].'000000'; break;
					case 09 : $target = $row_targets['SEP'].'000000'; break;
					case 10 : $target = $row_targets['OKT'].'000000'; break;
					case 11 : $target = $row_targets['NOV'].'000000'; break;
					case 12 : $target = $row_targets['DES'].'000000'; break;
					default : $target = 'Not Found';
				}
				
				$pers_sales = ($pencapaian/$target) * 100;
		
		?>	
			
				<tr>
					<td><?php echo $no; ?></td>
					<td><?php echo $row_sales_rank['BranchName']; ?></td>
					<td><?php echo $row_sales_rank['Areaname']; ?></td>
					<td><?php echo 'Rp '.number_format($target); ?></td>
					<td><?php echo 'Rp '.number_format($pencapaian);?></td>

					<?php if($target == '0' AND $pencapaian != '0'){ ?>
						<td>100%</td>
					<?php }else{ ?>
						<td><?php echo substr($pers_sales,0,4).'%'; ?></td>
					<?php } ?>
				</tr>
			
		<?php
		
			}
		
		?>
			</tbody>
		</table>
		
	</div>
	
</div>
<!-- penutup row table ranking sales cabang -->


<!-- row grafik target,realisasi,persen sales -->

<div class="row">

	<div class="col-md-10 col-md-offset-1">
		
		<div id="trpSales" style="min-width: 250px; height: 400px; margin-top: 40px;"></div>

<script type="text/javascript">

Highcharts.chart('trpSales', {
	chart: {
		zoomType: 'xy'
	},
	title: {
		text: '<p style="font-size:14px;">Target, Realisasi , Persentase Of Sales <?= $tahun_now; ?></p>'
	},
	xAxis: [{
		categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
			'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
		crosshair: true
	}],
	yAxis: [{ // Primary yAxis
		labels: {
			format: '{value}%',
			style: {
				color: Highcharts.getOptions().colors[1]
			}
		},
		title: {
			text: 'Percent',
			style: {
				color: Highcharts.getOptions().colors[1]
			}
		}
	}, { // Secondary yAxis
		title: {
			text: 'Realisasi & Target',
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
				return 'Rp ' + (ret ? ret : this.value);
			},
			style: {
				color: Highcharts.getOptions().colors[0]
			}
		},
		opposite: true
	}],
	credits: {
		enabled: false
	},
	tooltip: {
		shared: true
	},
	legend: {
		layout: 'vertical',
		align: 'left',
		x: 120,
		verticalAlign: 'top',
		y: 100,
		floating: true,
		backgroundColor: (Highcharts.theme && Highcharts.theme.legendBackgroundColor) || 'rgba(255,255,255,0.25)'
	},
	series: [
	{
		name: 'Target (Rp)',
		type: 'column',
		yAxis: 1,
		color: '#52b251',
		data: [
		
			<?php
			
				$query = "SELECT SUM(JAN) AS target_januari,
							SUM(FEB) AS target_februari,
							SUM(MAR) AS target_maret,
							SUM(APR) AS target_april,
							SUM(MEI) AS target_mei,
							SUM(JUN) AS target_juni,
							SUM(JUL) AS target_juli,
							SUM(AGU) AS target_agustus,
							SUM(SEP) AS target_september,
							SUM(OKT) AS target_oktober,
							SUM(NOV) AS target_november,
							SUM(DES) AS target_desember
							FROM tbl_target WHERE tahun='$tahun_now'";
							
				$result = mysqli_query($koneksi,$query) or die ('error fungsi');
				$row = mysqli_fetch_array($result);
				
				$tar_januari = $row['target_januari'].'000000';
				$tar_februari = $row['target_februari'].'000000';
				$tar_maret = $row['target_maret'].'000000';
				$tar_april = $row['target_april'].'000000';
				$tar_mei = $row['target_mei'].'000000';
				$tar_juni = $row['target_juni'].'000000';
				$tar_juli = $row['target_juli'].'000000';
				$tar_agustus = $row['target_agustus'].'000000';
				$tar_september = $row['target_september'].'000000';
				$tar_oktober = $row['target_oktober'].'000000';
				$tar_november = $row['target_november'].'000000';
				$tar_desember = $row['target_desember'].'000000';
				
				echo $tar_januari.','.$tar_februari.','.$tar_maret.','.$tar_april.','.$tar_mei.','.$tar_juni.','.$tar_juli.','.
						$tar_agustus.','.$tar_september.','.$tar_oktober.','.$tar_november.','.$tar_desember;
			
			?>
		
		],
		tooltip: {
			valueSuffix: ' mm'
		}

	},
	{
		name: 'Realisasi (Rp)',
		type: 'column',
		yAxis: 1,
		color: 'orange',
		data: [
		
			<?php
			
				$query = "SELECT SUM(IF( Bulan = 01 AND Tahun = $tahun_now, TotalPenjualan, 0)) AS penjualan_1,
										SUM(IF( Bulan = 02 AND Tahun = $tahun_now, TotalPenjualan, 0)) AS penjualan_2,
										SUM(IF( Bulan = 03 AND Tahun = $tahun_now, TotalPenjualan, 0)) AS penjualan_3,
										SUM(IF( Bulan = 04 AND Tahun = $tahun_now, TotalPenjualan, 0)) AS penjualan_4,
										SUM(IF( Bulan = 05 AND Tahun = $tahun_now, TotalPenjualan, 0)) AS penjualan_5,
										SUM(IF( Bulan = 06 AND Tahun = $tahun_now, TotalPenjualan, 0)) AS penjualan_6,
										SUM(IF( Bulan = 07 AND Tahun = $tahun_now, TotalPenjualan, 0)) AS penjualan_7,
										SUM(IF( Bulan = 08 AND Tahun = $tahun_now, TotalPenjualan, 0)) AS penjualan_8,
										SUM(IF( Bulan = 09 AND Tahun = $tahun_now, TotalPenjualan, 0)) AS penjualan_9,
										SUM(IF( Bulan = 10 AND Tahun = $tahun_now, TotalPenjualan, 0)) AS penjualan_10,
										SUM(IF( Bulan = 11 AND Tahun = $tahun_now, TotalPenjualan, 0)) AS penjualan_11,
										SUM(IF( Bulan = 12 AND Tahun = $tahun_now, TotalPenjualan, 0)) AS penjualan_12
										FROM tbl_sales";
					$result = mysqli_query($koneksi,$query) or die ('error fungsi');
 
					$row = mysqli_fetch_array($result);
					
					$pj_1 = $row['penjualan_1'];
					$pj_2 = $row['penjualan_2'];
					$pj_3 = $row['penjualan_3'];
					$pj_4 = $row['penjualan_4'];
					$pj_5 = $row['penjualan_5'];
					$pj_6 = $row['penjualan_6'];
					$pj_7 = $row['penjualan_7'];
					$pj_8 = $row['penjualan_8'];
					$pj_9 = $row['penjualan_9'];
					$pj_10 = $row['penjualan_10'];
					$pj_11 = $row['penjualan_11'];
					$pj_12 = $row['penjualan_12'];
					
					echo $pj_1.',';
					echo $pj_2.',';
					echo $pj_3.',';
					echo $pj_4.',';
					echo $pj_5.',';
					echo $pj_6.',';
					echo $pj_7.',';
					echo $pj_8.',';
					echo $pj_9.',';
					echo $pj_10.',';
					echo $pj_11.',';
					echo $pj_12;
			
			?>
		
		],
		tooltip: {
			valueSuffix: ' mm'
		}

	}, {
		name: 'Percent (%)',
		type: 'spline',
		data: [
		
			<?php
			
				$pers_1 = ($pj_1/$tar_januari)*100;
				$pers_2 = ($pj_2/$tar_februari)*100;
				$pers_3 = ($pj_3/$tar_maret)*100;
				$pers_4 = ($pj_4/$tar_april)*100;
				$pers_5 = ($pj_5/$tar_mei)*100;
				$pers_6 = ($pj_6/$tar_juni)*100;
				$pers_7 = ($pj_7/$tar_juli)*100;
				$pers_8 = ($pj_8/$tar_agustus)*100;
				$pers_9 = ($pj_9/$tar_september)*100;
				$pers_10 = ($pj_10/$tar_oktober)*100;
				$pers_11 = ($pj_11/$tar_november)*100;
				$pers_12 = ($pj_12/$tar_desember)*100;
				
				echo substr($pers_1,0,5).',';
				echo substr($pers_2,0,5).',';
				echo substr($pers_3,0,5).',';
				echo substr($pers_4,0,5).',';
				echo substr($pers_5,0,5).',';
				echo substr($pers_6,0,5).',';
				echo substr($pers_7,0,5).',';
				echo substr($pers_8,0,5).',';
				echo substr($pers_9,0,5).',';
				echo substr($pers_10,0,5).',';
				echo substr($pers_11,0,5).',';
				echo substr($pers_12,0,5);
			
			?>
		
		],
		tooltip: {
			valueSuffix: '%'
		}
	}]
});
</script>
		
	</div>
	
</div>

<!-- penutup row grafik target,realisasi,persen sales -->

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

<?php require 'sidebar.php'; ?>

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
			backgroundColor: (Highcharts.theme && Highcharts.theme.background2) || '#FFF',
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