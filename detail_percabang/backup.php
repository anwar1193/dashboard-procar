<?php

	include '../koneksi.php';
	$cabang = $_GET['BranchName'];

?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<title>logika tampil sales by tahun kendaraan</title>
	
</head>
<body>
	<h3>Penjualan By Tahun Kendaraan Bulan Januari 2018</h3>
	
	<table border = "1">
		<tr>
			<td>TahunKendaraan</td>
			<td>TotalPenjualan</td>
		</tr>
		<?php
			global $koneksi;
			$query = "SELECT TahunKendaraan,
								SUM(IF( Bulan = 01, TotalPenjualan, 0)) AS penjualan
								FROM tbl_sales_thnkendaraan WHERE BranchName=$cabang AND Bulan = 01 AND Tahun=2018
								GROUP BY TahunKendaraan";
			$result = mysqli_query($koneksi,$query) or die ('error fungsi');
			while($row = mysqli_fetch_array($result)){
		
		?>
		<tr>
			<td><?php echo $row['TahunKendaraan'] ?></td>
			<td><?php echo $row['penjualan'] ?></td>
		</tr>
		<?php
		
			}
		
		?>
	</table>
</body>
</html>