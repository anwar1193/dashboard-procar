<?php

	$tahun_now = date('Y');
	include '../koneksi.php';
	$cabang = $_GET['BranchName'];

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
<link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- Custom Theme files -->
<link href="../css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!--js-->
<script src="../js/jquery-2.1.1.min.js"></script> 
<!--icons-css-->
<link href="../css/font-awesome.css" rel="stylesheet"> 
<!--Google Fonts-->
<link href='//fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Work+Sans:400,500,600' rel='stylesheet' type='text/css'>
<!--static chart-->
<script src="../js/Chart.min.js"></script>
<!--//charts-->

<!--skycons-icons-->
<script src="../js/skycons.js"></script>
<!--//skycons-icons-->
</head>




<!-- memasukan jquery sebagai plugin tambahan -->
	<script type="text/javascript" src="../assets/highcharts/jquery.min.js"></script>

	<!-- membuat fungsi untuk menampilkan diagram batang ke dalam <div id="suara"></div> -->
	<script type="text/javascript">
	$(document).ready(function() {
		$('#suara').highcharts({
			chart: {
				type: 'pie',
				options3d: {
					enabled: true,
					alpha: 35
				}
			},
			title: {
				text: 'By Surveyor'
			},
			credits: { //untuk menghilangkan link highchart.com di bawah grafik
				enabled: false
			},
			subtitle: {
				text: 'Detail Penjualan Cabang By Surveyor'
			},
			plotOptions: {
				pie: {
					innerSize: 50,
					depth: 20,
					dataLabels: {
						enabled: true,
						format: '<b>{point.name}</b>: {point.percentage:.1f} %',
						style: {
							color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
						}
					}
				}
			},
			series: [{  
				name: 'Penjualan',
				data: [ 
				 
				  <?php
				
					// mendapatkan seluruh data dari tabel hasilvoting kemudian di looping menggunakan while
					$query = "SELECT Surveyor,
										SUM(IF( Bulan = 08, TotalPenjualan, 0)) AS penjualan
										FROM tbl_sales_surveyor WHERE BranchName=$cabang AND Bulan = 08 AND Tahun = $tahun_now
										GROUP BY Surveyor";
					$result = mysqli_query($koneksi,$query) or die ('error fungsi');

					// melakukan looping
					  while ($row = mysqli_fetch_array($result)) {
						echo "[ '".$row['Surveyor']."', ".$row['penjualan']."],";
					  }
				  
				  ?>
				  
				  
				  ]  
			}]
		});
	});
	</script>
	
	
	<script type="text/javascript">
	$(document).ready(function() {
		$('#suara2').highcharts({
			chart: {
				type: 'pie',
				options3d: {
					enabled: true,
					alpha: 35
				}
			},
			title: {
				text: 'By Dealer'
			},
			credits: { //untuk menghilangkan link highchart.com di bawah grafik
				enabled: false
			},
			subtitle: {
				text: 'Detail Penjualan Cabang By Dealer'
			},
			plotOptions: {
				pie: {
					innerSize: 50,
					depth: 20,
					dataLabels: {
						enabled: true,
						format: '<b>{point.name}</b>: {point.percentage:.1f} %',
						style: {
							color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
						}
					}
				}
			},
			series: [{  
				name: 'Penjualan',
				data: [ 
				 
				  <?php
				
					// mendapatkan seluruh data dari tabel hasilvoting kemudian di looping menggunakan while
					$query = "SELECT DealerName,
										SUM(IF( Bulan = 08, TotalPenjualan, 0)) AS penjualan
										FROM tbl_sales_dealer WHERE BranchName=$cabang AND Bulan = 08 AND Tahun=$tahun_now
										GROUP BY DealerName";
					$result = mysqli_query($koneksi,$query) or die ('error fungsi');

					// melakukan looping
					  while ($row = mysqli_fetch_array($result)) {
						echo "[ '".$row['DealerName']."', ".$row['penjualan']."],";
					  }
				  
				  ?>
				  
				  
				  ]  
			}]
		});
	});
	</script>
	
	<script type="text/javascript">
	$(document).ready(function() {
		$('#suara3').highcharts({
			chart: {
				type: 'pie',
				options3d: {
					enabled: true,
					alpha: 35
				}
			},
			title: {
				text: 'By Tahun Kendaraan'
			},
			credits: { //untuk menghilangkan link highchart.com di bawah grafik
				enabled: false
			},
			subtitle: {
				text: 'Detail Penjualan Cabang By Tahun Kendaraan'
			},
			plotOptions: {
				pie: {
					innerSize: 50,
					depth: 20,
					dataLabels: {
						enabled: true,
						format: '<b>{point.name}</b>: {point.percentage:.1f} %',
						style: {
							color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
						}
					}
				}
			},
			series: [{  
				name: 'Penjualan',
				data: [ 
				 
				  <?php
				
					// mendapatkan seluruh data dari tabel hasilvoting kemudian di looping menggunakan while
					$query = "SELECT TahunKendaraan,
										SUM(IF( Bulan = 08, TotalPenjualan, 0)) AS penjualan
										FROM tbl_sales_thnkendaraan WHERE BranchName=$cabang AND Bulan = 08 AND Tahun=$tahun_now
										GROUP BY TahunKendaraan";
					$result = mysqli_query($koneksi,$query) or die ('error fungsi');

					// melakukan looping
					  while ($row = mysqli_fetch_array($result)) {
						echo "[ '".$row['TahunKendaraan']."', ".$row['penjualan']."],";
					  }
				  
				  ?>
				  
				  
				  ]  
			}]
		});
	});
	</script>
	
	<script type="text/javascript">
	$(document).ready(function() {
		$('#suara4').highcharts({
			chart: {
				type: 'pie',
				options3d: {
					enabled: true,
					alpha: 35
				}
			},
			title: {
				text: 'By Merk Kendaraan'
			},
			credits: { //untuk menghilangkan link highchart.com di bawah grafik
				enabled: false
			},
			subtitle: {
				text: 'Detail Penjualan Cabang By Merk Kendaraan'
			},
			plotOptions: {
				pie: {
					innerSize: 50,
					depth: 20,
					dataLabels: {
						enabled: true,
						format: '<b>{point.name}</b>: {point.percentage:.1f} %',
						style: {
							color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
						}
					}
				}
			},
			series: [{  
				name: 'Penjualan',
				data: [ 
				 
				  <?php
				
					// mendapatkan seluruh data dari tabel hasilvoting kemudian di looping menggunakan while
					$query = "SELECT MerkName,
										SUM(IF( Bulan = 08, TotalPenjualan, 0)) AS penjualan
										FROM tbl_sales_merk WHERE BranchName=$cabang AND Bulan = 08 AND Tahun=$tahun_now
										GROUP BY MerkName";
					$result = mysqli_query($koneksi,$query) or die ('error fungsi');

					// melakukan looping
					  while ($row = mysqli_fetch_array($result)) {
						echo "[ '".$row['MerkName']."', ".$row['penjualan']."],";
					  }
				  
				  ?>
				  
				  
				  ]  
			}]
		});
	});
	</script>
	
	
	<script type="text/javascript">
	$(document).ready(function() {
		$('#suara5').highcharts({
			chart: {
				type: 'pie',
				options3d: {
					enabled: true,
					alpha: 35
				}
			},
			title: {
				text: 'By Tenor'
			},
			credits: { //untuk menghilangkan link highchart.com di bawah grafik
				enabled: false
			},
			subtitle: {
				text: 'Detail Penjualan Cabang By Tenor'
			},
			plotOptions: {
				pie: {
					innerSize: 50,
					depth: 20,
					dataLabels: {
						enabled: true,
						format: '<b>{point.name} Bulan</b>: {point.percentage:.1f} %',
						style: {
							color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
						}
					}
				}
			},
			series: [{  
				name: 'Penjualan',
				data: [ 
				 
				  <?php
				
					// mendapatkan seluruh data dari tabel hasilvoting kemudian di looping menggunakan while
					$query = "SELECT Tenor,
										SUM(IF( Bulan = 08, TotalPenjualan, 0)) AS penjualan
										FROM tbl_sales_tenor WHERE BranchName=$cabang AND Bulan = 08 AND Tahun=$tahun_now
										GROUP BY Tenor";
					$result = mysqli_query($koneksi,$query) or die ('error fungsi');

					// melakukan looping
					  while ($row = mysqli_fetch_array($result)) {
						echo "[ '".$row['Tenor']."', ".$row['penjualan']."],";
					  }
				  
				  ?>
				  
				  
				  ]  
			}]
		});
	});
	</script>
	
	<script type="text/javascript">
	$(document).ready(function() {
		$('#suara6').highcharts({
			chart: {
				type: 'pie',
				options3d: {
					enabled: true,
					alpha: 35
				}
			},
			title: {
				text: 'By DP'
			},
			credits: { //untuk menghilangkan link highchart.com di bawah grafik
				enabled: false
			},
			subtitle: {
				text: 'Detail Penjualan Cabang By DP'
			},
			plotOptions: {
				pie: {
					innerSize: 50,
					depth: 20,
					dataLabels: {
						enabled: true,
						format: '<b>{point.name} %</b> : {point.percentage:.1f} %',
						style: {
							color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
						}
					}
				}
			},
			series: [{  
				name: 'Penjualan',
				data: [ 
				 
				  <?php
				
					// mendapatkan seluruh data dari tabel hasilvoting kemudian di looping menggunakan while
					$query = "SELECT DPPct,
										SUM(IF( Bulan = 08, TotalPenjualan, 0)) AS penjualan
										FROM tbl_sales_dp WHERE BranchName=$cabang AND Bulan = 08 AND Tahun=$tahun_now
										GROUP BY DPPct";
					$result = mysqli_query($koneksi,$query) or die ('error fungsi');

					// melakukan looping
					  while ($row = mysqli_fetch_array($result)) {
						echo "[ '".$row['DPPct']."', ".$row['penjualan']."],";
					  }
				  
				  ?>
				  
				  
				  ]  
			}]
		});
	});
	</script>
	

<body>


<div class="page-container">	
   <div class="left-content">
	   <div class="mother-grid-inner">
			<?php
			
				// panggil header
				include '../header.php';
			
			?>
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
<div class="inner-block">

<!--mainpage chit-chating-->
<div class="chit-chat-layer1">
	<div class="col-md-12 chit-chat-layer1-left">
			   <div class="work-progres">
					   
					   <!-- Diagram Penjualan Procar -->
					   <br />
					   <h4 align="center">Data Penjualan Cabang <?php echo $cabang; ?> Agustus <?php echo $tahun_now; ?></h4><br /><br /><br />
						
						
						<div class="row">
							<div class="col-md-6">
								<div id="suara" style="border-style:double;"></div><br /><br />
								<div id="suara5" style="border-style:double;"></div><br /><br />
								<div id="suara3" style="border-style:double;"></div>
							</div>
							
							<div class="col-md-6">
								<div id="suara2" style="border-style:double;"></div><br /><br />
								<div id="suara6" style="border-style:double;"></div><br /><br />
								<div id="suara4" style="border-style:double;"></div>
							</div>
						</div>

					   <!-- Penutup Diagram Penjualan Procar -->    
					   <!-- memasukan highcharts ke dalam proyek sebagai plugin utama -->
						<script type="text/javascript" src="../highcharts/highcharts.js"></script>
						<script type="text/javascript" src="../highcharts/highcharts-3d.js"></script>
						<script type="text/javascript" src="../highcharts/exporting.js"></script>
						<!-- akhir -->  
							
			   </div>
	</div>
	  
	 <div class="clearfix"> </div>
</div>

</div>
<!--inner block end here-->
<!--copy rights start here-->
<div class="copyrights">
	 <p>© 2018 Grafik Procar Int'l Finance. All Rights Reserved</p>
</div>	
<!--COPY rights end here-->
</div>
</div>
<!--slider menu-->
	<div class="sidebar-menu">
			<div class="logo"> <a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="#"> <span id="logo" ></span> 
				  <!--<img id="logo" src="" alt="Logo"/>--> 
			  </a> </div>		  
			<div class="menu">
			  <ul id="menu" >
			  
				<li id="menu-home" ><a href="../index.php"><i class="fa fa-dashboard"></i><span>Dashboard</span></a></li>
				<li id="menu-home" ><a href="../sales.php"><i class="fa fa-book nav_icon"></i><span>Sales</span></a></li>
				<li id="menu-home" ><a href="../collection.php"><i class="fa fa-file-text"></i><span>Collection</span></a></li>
				<li id="menu-home" ><a href="../ayda.php"><i class="fa fa-file"></i><span>Ayda</span></a></li>
				
				
			  </ul>
			</div>
	 </div>
	<div class="clearfix"> </div>
</div>


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
		<script src="../js/jquery.nicescroll.js"></script>
		<script src="../js/scripts.js"></script>
		<!--//scrolling js-->
<script src="../js/bootstrap.js"> </script>
<!-- mother grid end here-->
</body>
</html>                     