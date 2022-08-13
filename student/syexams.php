<?php
    session_start();
    include ("../database_conn.php");
    $name = $_SESSION['name'];
    $sql = "SELECT * FROM syexams WHERE name = '$name'";
    $result=mysqli_query($conn,$sql);
	$res=mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">

<head>

	<!-- META ============================================= -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />
	
	<!-- DESCRIPTION -->
	<meta name="description" content="EduChamp : Education HTML Template" />
	
	<!-- OG -->
	<meta property="og:title" content="EduChamp : Education HTML Template" />
	<meta property="og:description" content="EduChamp : Education HTML Template" />
	<meta property="og:image" content="" />
	<meta name="format-detection" content="telephone=no">
	
	<!-- FAVICONS ICON ============================================= -->
	<link rel="icon" href="../error-404.html" type="image/x-icon" />
	<link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png" />
	
	<!-- PAGE TITLE HERE ============================================= -->
	<title>Exam Results</title>
	
	<!-- MOBILE SPECIFIC ============================================= -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.min.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
	
	<!-- All PLUGINS CSS ============================================= -->
	<link rel="stylesheet" type="text/css" href="assets/css/assets.css">
	<link rel="stylesheet" type="text/css" href="assets/vendors/calendar/fullcalendar.css">
	
	<!-- TYPOGRAPHY ============================================= -->
	<link rel="stylesheet" type="text/css" href="assets/css/typography.css">
	
	<!-- SHORTCODES ============================================= -->
	<link rel="stylesheet" type="text/css" href="assets/css/shortcodes/shortcodes.css">
	
	<!-- STYLESHEETS ============================================= -->
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="assets/css/dashboard.css">
	<link class="skin" rel="stylesheet" type="text/css" href="assets/css/color/color-1.css">
	
</head>
<body class="ttr-opened-sidebar ttr-pinned-sidebar">
	
	<!-- header start -->
	<header class="ttr-header">
		<div class="ttr-header-wrapper">
			<!--sidebar menu toggler start -->
			<div class="ttr-toggle-sidebar ttr-material-button">
				<i class="ti-close ttr-open-icon"></i>
				<i class="ti-menu ttr-close-icon"></i>
			</div>
			<!--sidebar menu toggler end -->
			<!--logo start -->
			<!-- <div class="ttr-logo-box">
				<div>
					<a href="../index.php" class="ttr-logo">
						<img alt="" class="ttr-logo-mobile" src="assets/images/logo-mobile.png" width="30" height="30">
						<img alt="" class="ttr-logo-desktop" src="assets/images/logo-white.png" width="160" height="27">
					</a>
				</div>
			</div> -->
			<!--logo end -->
			<div class="ttr-header-menu">
				<!-- header left menu start -->
				<ul class="ttr-header-navigation">
					<li>
						<a href="../index.php" class="ttr-material-button ttr-submenu-toggle">HOME</a>
					</li>
					
				</ul>
				<!-- header left menu end -->
			</div>
			<div class="ttr-header-right ttr-with-seperator">
				<!-- header right menu start -->
				<ul class="ttr-header-navigation">
					
					
					<li>
						<a href="#" class="ttr-material-button ttr-submenu-toggle"><span class="ttr-user-avatar"><img alt="" src="assets/images/testimonials/pic3.jpg" width="32" height="32"></span></a>
						<div class="ttr-header-submenu">
							<ul>
								<li><a href="student-info.php">My profile</a></li>
								
								<li><a href="../logout.php">Logout</a></li>
							</ul>
						</div>
					</li>
				</ul>
				<!-- header right menu end -->
			
		</div>
	</header>
	<!-- header end -->
	<!-- Left sidebar menu start -->
	<div class="ttr-sidebar">
		<div class="ttr-sidebar-wrapper content-scroll">
			<!-- side menu logo start -->
			<!-- <div class="ttr-sidebar-logo">
				<a href="../index.php"><img alt="" src="assets/images/logo.png" width="122" height="27"></a>
				 <div class="ttr-sidebar-pin-button" title="Pin/Unpin Menu">
					<i class="material-icons ttr-fixed-icon">gps_fixed</i>
					<i class="material-icons ttr-not-fixed-icon">gps_not_fixed</i>
				</div> 
				<div class="ttr-sidebar-toggle-button">
					<i class="ti-arrow-left"></i>
				</div>
			</div> -->
			<!-- side menu logo end -->
			<!-- sidebar menu start -->
			<nav class="ttr-sidebar-navi">
				<ul>
					
								<li>
									<a href="student-info.php" class="ttr-material-button">
														<span class="ttr-label">Student Info</span>
															
														</a>
														
													</a>

											</li>
					<li>
						<a href="#" class="ttr-material-button">

		                	<span class="ttr-label"> Academics</span>
		                	<span class="ttr-arrow-icon"><i class="fa fa-angle-down"></i></span>
		                </a>
		                <ul>
		                	<!-- <li>
		                		<a href="assignment.php" class="ttr-material-button"><span class="ttr-label">Assignments</span></a>
		                	</li> -->
											<li>
		                		<a href="exams.php" class="ttr-material-button"><span class="ttr-label">Exam Results</span></a>
		                	</li>
											<li>
		                	
		                		<a href="lectures.php" class="ttr-material-button"><span class="ttr-label">Lectures</span></a>
		                	</li>

		                </ul>
		            </li>

					<li>
						<a href="change-pass.php" class="ttr-material-button">

		                	<span class="ttr-label">Change Password</span>
											
		                </a>


		            <li class="ttr-seperate"></li>
				</ul>
				<!-- sidebar menu end -->
			</nav>
			<!-- sidebar menu end -->
		</div>
	</div>
	<!-- Left sidebar menu end -->

	<!--Main container start -->
	<main class="ttr-wrapper">
		<div class="container-fluid">
			<div class="db-breadcrumb">
				<h4 class="breadcrumb-title">Exam Results</h4>
				<ul class="db-breadcrumb-list">
					<li><a href="../index.php"><i class="fa fa-home"></i>Home</a></li>
					<li>Academics</li>
                    <li>Exam Results</li>
				</ul>
			</div>	
			<div class="row">
				<!-- Your Profile Views Chart -->
				<div class="col-lg-12 m-b30">
					<div class="widget-box">
						<div class="wc-title">
							<h4>Exam Results</h4>
						</div>
						
						<div class="row">

						<div class="card-body">
							<table class="table table-hover">
							<tbody>
									<th >Subjects/Exams</th>
											<th>PPL</th>
											<th>DSA</th>
									</tr>
								</thead>
									
									<tr>
										<th>Mid-Sem</th>
										<td><?php echo $res['mid_PPL']?></td>
										<td><?php echo $res['mid_DSA']?></td>
									</tr>

									
									<tr>
										<th>End-Sem</th>
										<td><?php echo $res['end_PPL']?></td>
										<td><?php echo $res['end_DSA']?></td>
									</tr>

									<tr>
										<th>Total</th>
										<td><?php echo $res['mid_PPL']+$res['end_PPL']?></td>
										<td><?php echo $res['mid_DSA']+$res['end_DSA']?></td>
									</tr>
									
									</td>
								</tbody>
							</table>
						<a href="#" class="btn btn-primary">Print Marksheet</a>
							<!-- </span> -->
						
						</div>
						</div>
						</div>
					</div>
				</div>
				<!-- Your Profile Views Chart END-->
			</div>
		</div>
	</main>
	<div class="ttr-overlay"></div>

<script src="assets/js/jquery.min.js"></script>
<script src="assets/vendors/bootstrap/js/popper.min.js"></script>
<script src="assets/vendors/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/vendors/bootstrap-select/bootstrap-select.min.js"></script>
<script src="assets/vendors/bootstrap-touchspin/jquery.bootstrap-touchspin.js"></script>
<script src="assets/vendors/magnific-popup/magnific-popup.js"></script>
<script src="assets/vendors/counter/waypoints-min.js"></script>
<script src="assets/vendors/counter/counterup.min.js"></script>
<script src="assets/vendors/imagesloaded/imagesloaded.js"></script>
<script src="assets/vendors/masonry/masonry.js"></script>
<script src="assets/vendors/masonry/filter.js"></script>
<script src="assets/vendors/owl-carousel/owl.carousel.js"></script>
<script src='assets/vendors/scroll/scrollbar.min.js'></script>
<script src="assets/js/functions.js"></script>
<script src="assets/vendors/chart/chart.min.js"></script>
<script src="assets/js/student.js"></script>
<script src='assets/vendors/calendar/moment.min.js'></script>
<script src='assets/vendors/calendar/fullcalendar.js'></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>

</html>