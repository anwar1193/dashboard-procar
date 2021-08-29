<?php
	include 'koneksi.php';
?>

<head>
<title>Grafik PT Procar Int'l Finance</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<script src="js/jquery-2.1.1.min.js"></script>
<link href="css/font-awesome.css" rel="stylesheet">
</head>

<body>

<div class="modal-body">
<div class="row"> <!-- row content map -->
<div class="col-md-12"> <!-- Colum map -->

<div class="tampil_header_maps" align="center" style="padding:5px; background-color:orange;color:white">
<h4>Peta Cabang PT Procar Int'l Finance</h4>
</div>

<div class="tampil_peta">
<!-- Masukkan Peta Disini -->
<div id="dvMap" style="width: 100%; height: 100%" align="center"></div>
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
</body>
</html>
