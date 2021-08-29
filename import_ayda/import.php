<?php
include "koneksi.php";

if(isset($_POST['import'])){ // Jika user mengklik tombol Import
	// Load librari PHPExcel nya
	require_once 'PHPExcel/PHPExcel.php';

	$inputFileType = 'CSV';
	$inputFileName = 'tmp/data.csv';

	$reader = PHPExcel_IOFactory::createReader($inputFileType);
	$excel = $reader->load($inputFileName);

	$numrow = 1;
	$worksheet = $excel->getActiveSheet();
	foreach ($worksheet->getRowIterator() as $row) {
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

			// Buat query Insert ke tbl_ayda_os
			$query = "INSERT INTO tbl_ayda_os(bulan,tahun,os_awal,penambahan_os,penjualan_os,os_akhir) VALUES('".$bulan."','".$tahun."','".$os_awal."','".$penambahan_os."','".$penjualan_os."','".$os_akhir."')";
			
			// Buat query Insert ke tbl_ayda_unit
			$query_unit = "INSERT INTO tbl_ayda_unit(bulan,tahun,unit_awal,penambahan_unit,penjualan_unit,unit_akhir) VALUES('".$bulan."','".$tahun."','".$unit_awal."','".$penambahan_unit."','".$penjualan_unit."','".$unit_akhir."')";
			
			// Eksekusi $query tbl_ayda_os
			mysqli_query($connect, $query);
			
			// Eksekusi $query tbl_ayda_unit
			mysqli_query($connect, $query_unit);
		}

		$numrow++; // Tambah 1 setiap kali looping
	}
}

header('location: index.php'); // Redirect ke halaman awal
?>
