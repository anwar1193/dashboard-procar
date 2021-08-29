<!--slider menu-->
	<?php  
		// Ambil Url yang sedang aktif
		$uri_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
		$page_sekarang = explode('/', $uri_path);
	?>


	<div class="sidebar-menu">
			<div class="logo"> <a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="#"> <span id="logo" ></span> 
				  <!--<img id="logo" src="" alt="Logo"/>--> 
			  </a> </div>		  
			<div class="menu">
			  <ul id="menu" >
			  
				<li id="menu-home" class="<?= $page_sekarang[2]=='index.php' || $page_sekarang[2]=='index_lalu.php' ? 'active' : null ?>"><a href="index.php"><i class="fa fa-dashboard"></i><span>Dashboard</span></a></li>

				<li id="menu-home" class="<?= $page_sekarang[2]=='sales.php' ? 'active' : null ?>"><a href="sales.php"><i class="fa fa-book nav_icon"></i><span>Detail Sales</span></a></li>

				<!-- <li id="menu-home" ><a href="collection.php"><i class="fa fa-file-text"></i><span>Collection</span></a></li>
				<li id="menu-home" ><a href="#"><i class="fa fa-file"></i><span>Ayda</span></a></li> -->
				<li id="menu-home" ><a href="logout.php"><i style="color: red" class="fa fa-times"></i><span>Logout</span></a></li>
			
			  </ul>
			</div>
	 </div>
	<div class="clearfix"> </div>