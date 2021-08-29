<?php  

	session_start();
	date_default_timezone_set("Asia/Jakarta");
	require 'koneksi.php';

	// Cek Jika Sudah Login, Kembalikan Ke Halaman index
	if(isset($_SESSION['login'])){
		header('location:index.php');
		exit;
	}

	if(isset($_POST['login'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
		$pwd = md5($password);

		$q_pas = "SELECT * FROM tbl_user WHERE username='$username' AND password='$pwd'";
		$res_pas = mysqli_query($koneksi, $q_pas);

		$cek = mysqli_num_rows($res_pas);

		if($cek>0){

			// Masukkan data last login ke tbl_user
			// Ambil IP User
			function get_client_ip() {
		        $ipaddress = '';
		        if (isset($_SERVER['HTTP_CLIENT_IP']))
		            $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
		        else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
		            $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
		        else if(isset($_SERVER['HTTP_X_FORWARDED']))
		            $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
		        else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
		            $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
		        else if(isset($_SERVER['HTTP_FORWARDED']))
		            $ipaddress = $_SERVER['HTTP_FORWARDED'];
		        else if(isset($_SERVER['REMOTE_ADDR']))
		            $ipaddress = $_SERVER['REMOTE_ADDR'];
		        else
		            $ipaddress = 'IP tidak dikenali';
		        return $ipaddress;
		    }

		    // Ambil Browser yang Digunakan User
		    function get_client_browser() {
		        $browser = '';
		        if(strpos($_SERVER['HTTP_USER_AGENT'], 'Netscape'))
		            $browser = 'Netscape';
		        else if (strpos($_SERVER['HTTP_USER_AGENT'], 'Firefox'))
		            $browser = 'Firefox';
		        else if (strpos($_SERVER['HTTP_USER_AGENT'], 'Chrome'))
		            $browser = 'Google Chrome';
		        else if (strpos($_SERVER['HTTP_USER_AGENT'], 'Opera'))
		            $browser = 'Opera';
		        else if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE'))
		            $browser = 'Internet Explorer';
		        else
		            $browser = 'Other : '.$_SERVER['HTTP_USER_AGENT'] ;
		        return $browser;
		    }

			$ip_login = get_client_ip();
			$browser_login = get_client_browser();
			$waktu = date('Y-m-d H:i:s');

			mysqli_query($koneksi, "UPDATE tbl_user SET last_login='$waktu', ip_login='$ip_login', browser_login='$browser_login' WHERE username='$username'");

			$_SESSION['login'] = true;
			echo "<script>
				alert('Akses Diterima ! Selamat Datang');
				window.location='index.php';
			</script>";
		}else{
			echo "<script>
				alert('Kombinasi Username & Password Salah');
				window.location='login.php';
			</script>";
		}
	}

?>	
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Dashboad Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="style_login/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="style_login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="style_login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="style_login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="style_login/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="style_login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="style_login/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="style_login/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="style_login/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="style_login/css/util.css">
	<link rel="stylesheet" type="text/css" href="style_login/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-b-160 p-t-50">

			<center>
			<img src="style_login/images/logo_pro.png" style="border-radius: 20px; margin-bottom: 30px; box-shadow: 5px 5px 5px 5px rgba(0,0,0, 0.75);" width="100px">
			</center>

				<form method="post" action="" class="login100-form validate-form">
					<span class="login100-form-title p-b-43">
						Dashboard Login
					</span>


					<div class="wrap-input100 rs1 validate-input" data-validate = "Username is required">
						<input class="input100" type="text" name="username" autocomplete="off">
						<span class="label-input100">Username</span>
					</div>
					
					
					<div class="wrap-input100 rs2 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="password">
						<span class="label-input100">Password</span>
					</div>

					<div class="container-login100-form-btn">
						<button type="submit" name="login" class="login100-form-btn">
							Sign in
						</button>
					</div>
					
					<div class="text-center w-full p-t-23">
						<a href="#" class="txt1" id="lupa_password" data-toggle="modal" data-target="#modal-bantuan">
							Perlu Bantuan?
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<!-- Modal Bantuan -->
	 <div class="modal fade" id="modal-bantuan" tabindex="-1" role="dialog">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title">Kontak Kami</h4>
	      </div>
	      <div class="modal-body">
	        <p style="text-align: justify;">
	          Untuk hal-hal yang berkaitan dengan Teknis aplikasi (IT), silahkan hubungi IT Application & Development (PIC: Anwar/Khairul)
	        </p>

	        <p>
	          * Email :
	          <ul>
	          	<li><b>munawar.ahmad@procarfinance.com</b></li>
	          	<li><b>datacenter@procarfinance.com</b></li>
	          </ul>

	          <br>
	          * Telepon/WA : 
	          <ul>
	          	<li><b>085219063505 (Anwar)</b></li>
	          	<li><b>081219971941(Khairul)</b></li>
	          </ul>
	        </p>
	        <br>

	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-danger" data-dismiss="modal">
	        	<i class="fa fa-times"></i> Close
	        </button>
	      </div>
	    </div><!-- /.modal-content -->
	  </div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
	

	
	
<!--===============================================================================================-->
	<script src="style_login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="style_login/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="style_login/vendor/bootstrap/js/popper.js"></script>
	<script src="style_login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="style_login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="style_login/vendor/daterangepicker/moment.min.js"></script>
	<script src="style_login/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="style_login/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="style_login/js/main.js"></script>

</body>
</html>