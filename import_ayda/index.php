<?php

	$tahun_now = date('Y');

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Import Data AYDA</title>

		<!-- Load File bootstrap.min.css yang ada difolder css -->
		<link href="css/bootstrap.min.css" rel="stylesheet">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
		
		<!-- Style untuk Loading -->
		<style>
        #loading{
			background: whitesmoke;
			position: absolute;
			top: 140px;
			left: 82px;
			padding: 5px 10px;
			border: 1px solid #ccc;
		}
		</style>
	</head>
	<body>
		<nav class="navbar navbar-inverse" role="navigation">
			<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand" href="#" style="color: white;"><b>Import Data AYDA</b></a>
				</div>
			</div>
		</nav>
		<!-- END HEADER -->
		
		<!-- Content -->
		<div style="padding: 0 15px;">
			<a href="form.php" class="btn btn-success pull-right">
				<span class="glyphicon glyphicon-upload"></span> Import Data
			</a>
			
			<h3>Data Penjualan Ayda PT Procar Finance</h3>
			
			<hr>
			
			<!-- Buat sebuah div dan beri class table-responsive agar tabel jadi responsive -->
			<div class="table-responsive">
				<table class="table table-bordered">
					<tr bgcolor="orange">
						<th>No</th>
						<th>Cabang</th>
						<th>Bulan</th>
						<th>Tahun</th>
						<th>Penjualan Outstanding</th>
						<th>Penjualan Unit</th>
					</tr>
					<?php
					// Load file koneksi.php
					include "koneksi.php";
					
					// Buat query untuk menampilkan semua data siswa
					$query = "SELECT * FROM tbl_ayda_os_cabang order by id DESC";
					$sql = mysqli_query($connect,$query) or die ('error fungsi');
					$no = 1; // Untuk penomoran tabel, di awal set dengan 1
					while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
					
						$cabang = $data['cabang'];
						$bulan = $data['bulan'];
						$tahun = $data['tahun'];
						$query_unit = "SELECT penjualan_unit FROM tbl_ayda_unit_cabang WHERE
										cabang = '$cabang' AND bulan='$bulan' AND tahun='$tahun'";
						$result_unit = mysqli_query($connect,$query_unit) or die ('error fungsi');
						$row_unit = mysqli_fetch_array($result_unit);
					
						echo "<tr>";
						echo "<td>".$no."</td>";
						echo "<td>".$data['cabang']."</td>";
						echo "<td>".$data['bulan']."</td>";
						echo "<td>".$data['tahun']."</td>";
						echo "<td>".$data['penjualan_os']."</td>";
						echo "<td>".$row_unit['penjualan_unit']."</td>";
						echo "</tr>";
						
						$no++; // Tambah 1 setiap kali looping
					}
					?>
				</table>
			</div>
		</div>
	</body>
</html>
