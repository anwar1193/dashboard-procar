<?php  

	//Ambil tanggal sales
	$q_tglSales = "SELECT * FROM tbl_tgl_sales order by id DESC LIMIT 0,1";
	$r_tglSales = mysqli_query($koneksi, $q_tglSales) or die ('error fungsi');
	$row_tglSales = mysqli_fetch_assoc($r_tglSales);
	$tgl_sales = $row_tglSales['tanggal'];
	$tanggal_sales = substr($tgl_sales, 0,2);
	$bulan_sales = substr($tgl_sales, 3,2);
	$tahun_sales = substr($tgl_sales, 6,4);
	
	//Ambil tanggal Collectibility
	//$q_tglColl = "SELECT * FROM tbl_tgl_coll order by id DESC LIMIT 0,1";
	//$r_tglColl = mysqli_query($koneksi, $q_tglColl) or die ('error fungsi');
	//$row_tglColl = mysqli_fetch_assoc($r_tglColl);
	//$tgl_coll = $row_tglColl['tanggal'];
	
	//Ambil tanggal Tunggakan
	$q_tglTung = "SELECT * FROM tbl_tgl_tung order by id DESC LIMIT 0,1";
	$r_tglTung = mysqli_query($koneksi, $q_tglTung) or die ('error fungsi');
	$row_tglTung = mysqli_fetch_assoc($r_tglTung);
	$tgl_tung = $row_tglTung['tanggal'];
	$tanggal_tung = substr($tgl_tung, 0,2);
	$bulan_tung = substr($tgl_tung, 3,2);
	$tahun_tung = substr($tgl_tung, 6,4);
	
	//Ambil tanggal Ayda
	$q_tglAyda = "SELECT * FROM tbl_tgl_ayda order by id DESC LIMIT 0,1";
	$r_tglAyda = mysqli_query($koneksi, $q_tglAyda) or die ('error fungsi');
	$row_tglAyda = mysqli_fetch_assoc($r_tglAyda);
	$tgl_ayda = $row_tglAyda['tanggal'];
	$tanggal_ayda = substr($tgl_ayda, 0,2);
	$bulan_ayda = substr($tgl_ayda, 3,2);
	$tahun_ayda = substr($tgl_ayda, 6,4);
	
	//--------------------------------------------------------------------------------------------
	//query data sales bulan ini
	$query_sales = "SELECT SUM(IF( Bulan = '$bulan_sales' AND Tahun = $tahun_sales, TotalPenjualan, 0)) AS penjualan
						FROM tbl_sales";
	$result_sales = mysqli_query($koneksi,$query_sales) or die ('error fungsi');
	$row_sales = mysqli_fetch_assoc($result_sales);
	$sales = $row_sales['penjualan'];
	
	//query target sales bulan ini
	if($bulan_sales=='01'){
		$query_tar_sales = "SELECT SUM(JAN) AS target FROM tbl_target WHERE tahun='$tahun_sales'";
	}else if($bulan_sales=='02'){
		$query_tar_sales = "SELECT SUM(FEB) AS target FROM tbl_target WHERE tahun='$tahun_sales'";
	}else if($bulan_sales=='03'){
		$query_tar_sales = "SELECT SUM(MAR) AS target FROM tbl_target WHERE tahun='$tahun_sales'";
	}else if($bulan_sales=='04'){
		$query_tar_sales = "SELECT SUM(APR) AS target FROM tbl_target WHERE tahun='$tahun_sales'";
	}else if($bulan_sales=='05'){
		$query_tar_sales = "SELECT SUM(MEI) AS target FROM tbl_target WHERE tahun='$tahun_sales'";
	}else if($bulan_sales=='06'){
		$query_tar_sales = "SELECT SUM(JUN) AS target FROM tbl_target WHERE tahun='$tahun_sales'";
	}else if($bulan_sales=='07'){
		$query_tar_sales = "SELECT SUM(JUL) AS target FROM tbl_target WHERE tahun='$tahun_sales'";
	}else if($bulan_sales=='08'){
		$query_tar_sales = "SELECT SUM(AGU) AS target FROM tbl_target WHERE tahun='$tahun_sales'";
	}else if($bulan_sales=='09'){
		$query_tar_sales = "SELECT SUM(SEP) AS target FROM tbl_target WHERE tahun='$tahun_sales'";
	}else if($bulan_sales=='10'){
		$query_tar_sales = "SELECT SUM(OKT) AS target FROM tbl_target WHERE tahun='$tahun_sales'";
	}else if($bulan_sales=='11'){
		$query_tar_sales = "SELECT SUM(NOV) AS target FROM tbl_target WHERE tahun='$tahun_sales'";
	}else if($bulan_sales=='12'){
		$query_tar_sales = "SELECT SUM(DES) AS target FROM tbl_target WHERE tahun='$tahun_sales'";
	}
	$result_tar_sales = mysqli_query($koneksi,$query_tar_sales) or die ('error fungsi');
	$row_tar_sales = mysqli_fetch_assoc($result_tar_sales);
	$target_sales = $row_tar_sales['target'].'000000';
	
	//Persentase sales bulan ini
	$persen_sales = ($sales/$target_sales)*100;
	
	//--------------------------------------------------------------------------------------- 
	
	
	// Query Pencapaian Collection Bulan Ini
	$query_collpay = "SELECT * FROM tbl_coll_payment WHERE cabang='TOTAL'";
	$res_collpay = mysqli_query($koneksi,$query_collpay) or die ('error fungsi');
	$row_collpay = mysqli_fetch_assoc($res_collpay);
	
	$total_payment_coll = $row_collpay['pencapaian'];
	$target_coll = $row_collpay['target_cabang'];
	
	$persentase_collection = ($total_payment_coll/$target_coll)*100;
	
	$tgl_coll0 = $row_collpay['tanggal'];
	$tgl_coll = date('d/m/Y', strtotime($tgl_coll0));
	
	//--------------------------------------------------------------------------------------- 
	
	// Query Collection (Tunggakan) Sampai Hari ini
	
	$query_tunggakan = "SELECT SUM(IF( DPD<=0, OSPokokReal, 0)) AS current,
							SUM(IF( DPD BETWEEN 1 AND 7, OSPokokReal, 0)) AS tunggakan1,
							SUM(IF( DPD BETWEEN 8 AND 30, OSPokokReal, 0)) AS tunggakan2,
							SUM(IF( DPD BETWEEN 31 AND 60, OSPokokReal, 0)) AS tunggakan3,
							SUM(IF( DPD BETWEEN 61 AND 90, OSPokokReal, 0)) AS tunggakan5,
							SUM(IF( DPD>=91, OSPokokReal, 0)) AS tunggakan4,
							SUM(OSPokokReal) AS total_tunggakan
							FROM tbl_collection2";
	$result_tunggakan = mysqli_query($koneksi,$query_tunggakan) or die ('error fungsi');
	$row_tunggakan = mysqli_fetch_assoc($result_tunggakan);
	
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
	
	
	// Query Ayda Bulan Ini
	$query_ayda = "SELECT SUM(os_awal) as os_awal, SUM(unit_awal) as unit_awal, SUM(penambahan_os) as penambahan_os,
					SUM(penambahan_unit) as penambahan_unit, SUM(pengurangan_os) as pengurangan_os, SUM(pengurangan_unit) as pengurangan_unit,
					SUM(os_akhir) as os_akhir, SUM(unit_akhir) as unit_akhir
					FROM tbl_ayda_asli WHERE bulan=$bulan_now AND tahun=$tahun_now";
	$result_ayda = mysqli_query($koneksi, $query_ayda);
	$data_ayda = mysqli_fetch_assoc($result_ayda);
		
	//------------------------------------------------------------------------------------------------------------------

?>