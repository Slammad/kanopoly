<?php
session_start();
?>
<!DOCTYPE html>

<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Project Directory</title>

	<!-- Favicons-->

	<!-- BASE CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link href="css/menu.css" rel="stylesheet">
	<link href="css/vendors.css" rel="stylesheet">
	<link href="css/icon_fonts/css/all_icons_min.css" rel="stylesheet">
    
	<!-- YOUR CUSTOM CSS -->
	<link href="css/custom.css" rel="stylesheet">

</head>

<body>

<div class="layer"></div>
	<!-- Mobile menu overlay mask -->

	<div id="preloader">
		<div data-loader="circle-side"></div>
	</div>
	<!-- End Preload -->
    
	<header class="header_sticky">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-6">
				
						<h1 id="reg"><a href="index.php" title=>KANOPOLY</a></h1>

				</div>
				<nav class="col-lg-9 col-6">
					<a class="cmn-toggle-switch cmn-toggle-switch__htx open_close" href="#0"><span>Menu mobile</span></a>

	<?php if(isset($_SESSION['user'])){ 

			$user = $_SESSION['user'];
			$userdata = "SELECT * FROM `users` WHERE `username`='$user'";
			$runq = $conn->query($userdata);
			$dataset=mysqli_fetch_assoc($runq);
			$username = $dataset['username'];
		
		?>

		
					<div class="main-menu">
						<ul>
							<li class="submenu">
								<a href="index.php" class="show-submenu">Home<i class="icon"></i></a>
							</li>
							<li class="submenu">
								<a href="myprojects.php?user=<?=$username?>" class="show-submenu">My Projects<i class="icon"></i></a>
							</li>
							<li class="submenu">
								<a href="logout.php" class="show-submenu">Logout<i class="icon"></i></a>
							</li>
						</ul>
					</div>
			
	<?php }else{?>

		<div class="main-menu">
						<ul>
							<li class="submenu">
								<a href="index.php" class="show-submenu">Home<i class="icon"></i></a>
							</li>
							<li class="submenu">
								<a href="login.php" class="show-submenu">Login<i class="icon"></i></a>
							</li>
							<li class="submenu">
								<a href="#0" class="show-submenu">Register<i class="icon"></i></a>
							</li>
						</ul>
					</div>
	<?php } ?>
					<!-- /main-menu -->
				</nav>
			</div>
		</div>
		<!-- /container -->
	</header>
	<!-- /header -->