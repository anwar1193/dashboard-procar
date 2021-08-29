<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Import Data AYDA</title>

		<!-- Load File bootstrap.min.css yang ada difolder css -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		
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
		
		<!-- Load File jquery.min.js yang ada difolder js -->
		<script src="js/jquery.min.js"></script>
		
		<script>
		$(document).ready(function(){
			// Sembunyikan alert validasi kosong
			$("#kosong").hide();
		});
		</script>
	</head>
	<body>
		<nav class="navbar navbar-inverse" role="navigation">
			<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand" href="#" style="color: white;"><b>Import Data Excel dengan PHP</b></a>
				</div>
				
			</div>
		</nav>
		<!-- END HEADER -->
		
		<!-- Content -->
		<div style="padding: 0 15px;">
			<!-- Buat sebuah tombol Cancel untuk kemabli ke halaman awal / view data -->
			<a href="index.php" class="btn btn-danger pull-right">
				<span class="glyphicon glyphicon-remove"></span> Cancel
			</a>
			
			<h3>Form Import Data Penjualan Ayda</h3>
			<hr>
			
			<!-- Buat sebuah tag form dan arahkan action nya ke file ini lagi -->
			<form method="post" action="" enctype="multipart/form-data">
				<a href="format.csv" class="btn btn-default">
					<span class="glyphicon glyphicon-download"></span>
					Download Format
				</a><br><br>
				
				<!-- 
				-- Buat sebuah input type file
				-- class pull-left berfungsi agar file input berada di sebelah kiri
				-->
				<input type="file" name="file" class="pull-left">
				
				<button type="submit" name="preview" class="btn btn-success btn-sm">
					<span class="glyphicon glyphicon-eye-open"></span> Preview
				</button>
			</form>
			
			<hr>
			
			<!-- Buat Preview Data -->
			<?php
			// Jika user telah mengklik tombol Preview
			if(isset($_POST['preview'])){
				$nama_file_baru = 'data.csv';
				
				// Cek apakah terdapat file data.xlsx pada folder tmp
				if(is_file('tmp/'.$nama_file_baru)) // Jika file tersebut ada
					unlink('tmp/'.$nama_file_baru); // Hapus file tersebut
				
				$nama_file = $_FILES['file']['name']; // Ambil nama file yang akan diupload
				$tmp_file = $_FILES['file']['tmp_name'];
				$ext = pathinfo($nama_file, PATHINFO_EXTENSION); // Ambil ekstensi file yang akan diupload
				
				// Cek apakah file yang diupload adalah file CSV
				if($ext == "csv"){
					// Upload file yang dipilih ke folder tmp
					move_uploaded_file($tmp_file, 'tmp/'.$nama_file_baru);
					
					// Load librari PHPExcel nya
					require_once 'PHPExcel/PHPExcel.php';
					
					$inputFileType = 'CSV';
					$inputFileName = 'tmp/data.csv';

					$reader = PHPExcel_IOFactory::createReader($inputFileType);
					$excel = $reader->load($inputFileName);
					
					// Buat sebuah tag form untuk proses import data ke database
					echo "<form method='post' action='import.php'>";
					
					// Buat sebuah div untuk alert validasi kosong
					echo "<div class='alert alert-danger' id='kosong'>
					Semua data belum diisi, Ada <span id='jumlah_kosong'></span> data yang belum lengkap diisi.
					</div>";
					
					echo "<table class='table table-bordered'>
					<tr>
						<th colspan='5' class='text-center'>Preview Data</th>
					</tr>
					<tr>
						<th>Cabang</th>
						<th>Bulan</th>
						<th>Tahun</th>
						<th></th>
						<th></th>
					</tr>";
					
					$numrow = 1;
					$kosong = 0;
					$worksheet = $excel->getActiveSheet();
					foreach ($worksheet->getRowIterator() as $row) { // Lakukan perulangan dari data yang ada di csv
						// Cek $numrow apakah lebih dari 1
						// Artinya karena baris pertama adalah nama-nama kolom
						// Jadi dilewat saja, tidak usah diimport
						if($numrow > 1){
							// START -->
							// Skrip untuk mengambil value nya
							$cellIterator = $row->getCellIterator();
							$cellIterator->setIterateOnlyExistingCells(false); // Loop all cells, even if it is not set
							
							$get = array(); // Valuenya akan di simpan kedalam array,dimulai dari index ke 0
							foreach ($cellIterator as $cell) {
								array_push($get, $cell->getValue()); // Menambahkan value ke variabel array $get
							}
							// <-- END
							
							// Ambil data value yang telah di ambil dan dimasukkan ke variabel $get
							$bulan = $get[0]; // Ambil data Bulan
							$tahun = $get[1]; // Ambil data Tahun
							$os_awal = $get[2]; // Ambil data Outstanding Awal
							$unit_awal = $get[3]; // Ambil data Unit Awal
							$penambahan_os = $get[4]; // Ambil data Penambahan Outstanding
							$penambahan_unit = $get[5]; // Ambil data Penambahan Unit
							$penjualan_os = $get[6]; // Ambil data Penjualan Outstanding
							$penjualan_unit = $get[7]; // Ambil data Penjualan Unit
							$os_akhir = $get[8]; // Ambil data Outstanding Akhir
							$unit_akhir = $get[9]; // Ambil data Unit Akhir
							
							// Cek jika semua data tidak diisi
							if(empty($bulan) && empty($tahun) && empty($os_awal) && empty($unit_awal) && empty($penambahan_os) && empty($penambahan_unit) && empty($penjualan_os) && empty($penjualan_unit) && empty($os_akhir) && empty($unit_akhir))
								continue; // Lewat data pada baris ini (masuk ke looping selanjutnya / baris selanjutnya)
							
							// Validasi apakah semua data telah diisi
					/**		$bulan_td = ( ! empty($bulan))? "" : " style='background: #E07171;'"; // Jika Bulan kosong, beri warna merah
							$tahun_td = ( ! empty($tahun))? "" : " style='background: #E07171;'"; // Jika Tahun kosong, beri warna merah
							$os_awal_td = ( ! empty($os_awal))? "" : " style='background: #E07171;'"; // Jika OS Awal kosong, beri warna merah
							$penambahan_os_td = ( ! empty($penambahan_os))? "" : " style='background: #E07171;'"; // Jika Penambahan OS kosong, beri warna merah
							$penjualan_os_td = ( ! empty($penjualan_os))? "" : " style='background: #E07171;'"; // Jika Penjualan OS kosong, beri warna merah
							$os_akhir_td = ( ! empty($os_akhir))? "" : " style='background: #E07171;'"; // Jika OS Akhir kosong, beri warna merah
							
							// Jika salah satu data ada yang kosong
							if(empty($bulan) or empty($tahun) or empty($os_awal) or empty($penambahan_os) or empty($penjualan_os) or empty($os_akhir)){
								$kosong++; // Tambah 1 variabel $kosong
							} **/
							
							echo "<tr>";
							echo "<td>".$bulan."</td>";
							echo "<td>".$tahun."</td>";
							echo "<td>".$os_awal."</td>";
							echo "<td>".$unit_awal."</td>";
							echo "<td>".$penambahan_os."</td>";
							echo "<td>".$penambahan_unit."</td>";
							echo "<td>".$penjualan_os."</td>";
							echo "<td>".$penjualan_unit."</td>";
							echo "<td>".$os_akhir."</td>";
							echo "<td>".$unit_akhir."</td>";
							echo "</tr>";
						}
						
						$numrow++; // Tambah 1 setiap kali looping
					}
					
					echo "</table>";
					
					// Cek apakah variabel kosong lebih dari 0
					// Jika lebih dari 0, berarti ada data yang masih kosong
					if($kosong > 0){
					?>	
						<script>
						$(document).ready(function(){
							// Ubah isi dari tag span dengan id jumlah_kosong dengan isi dari variabel kosong
							$("#jumlah_kosong").html('<?php echo $kosong; ?>');
							
							$("#kosong").show(); // Munculkan alert validasi kosong
						});
						</script>
					<?php
					}else{ // Jika semua data sudah diisi
						echo "<hr>";
						
						// Buat sebuah tombol untuk mengimport data ke database
						echo "<button type='submit' name='import' class='btn btn-primary'><span class='glyphicon glyphicon-upload'></span> Import</button>";
					}
					
					echo "</form>";
				}else{ // Jika file yang diupload bukan File CSV
					// Munculkan pesan validasi
					echo "<div class='alert alert-danger'>
					Hanya File CSV (.csv) yang diperbolehkan
					</div>";
				}
			}
			?>
		</div>
	</body>
</html>

