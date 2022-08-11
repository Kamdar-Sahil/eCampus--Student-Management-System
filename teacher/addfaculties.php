<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from educhamp.themetrades.com/demo/admin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Feb 2019 13:08:15 GMT -->
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
	<title>Admin Dashboard</title>

	<!-- MOBILE SPECIFIC ============================================= -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.min.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

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
					<
					<li>

						<div class="ttr-header-submenu noti-menu">

						</div>
					</li>
					<li>
						<a href="#" class="ttr-material-button ttr-submenu-toggle"><span class="ttr-user-avatar"><img alt="" src="assets/images/testimonials/pic3.jpg" width="32" height="32"></span></a>
						<div class="ttr-header-submenu">
							<ul>
								<li><a href="user-profile.html">My profile</a></li>
								<li><a href="../logout.php">Logout</a></li>
							</ul>
						</div>
					</li>

				</ul>
				<!-- header right menu end -->
			</div>
			<!--header search panel start -->
			<div class="ttr-search-bar">
				<form class="ttr-search-form">
					<div class="ttr-search-input-wrapper">
						<input type="text" name="qq" placeholder="search something..." class="ttr-search-input">
						<button type="submit" name="search" class="ttr-search-submit"><i class="ti-arrow-right"></i></button>
					</div>
					<span class="ttr-search-close ttr-search-toggle">
						<i class="ti-close"></i>
					</span>
				</form>
			</div>
			<!--header search panel end -->
		</div>
	</header>
	<!-- header end -->
	<!-- Left sidebar menu start -->
	<div class="ttr-sidebar">
		<div class="ttr-sidebar-wrapper content-scroll">
			<!-- side menu logo start -->
			<div class="ttr-sidebar-logo">
				<a href="#"><img alt="" src="assets/images/logo.png" width="122" height="27"></a>

				<div class="ttr-sidebar-toggle-button">
					<i class="ti-arrow-left"></i>
				</div>
			</div>
			<!-- side menu logo end -->
			<!-- sidebar menu start -->
			<nav class="ttr-sidebar-navi">
				<ul>
					<li>
						<a href="dashboard.php" class="ttr-material-button">
					         	<span class="ttr-label">Dashborad</span>
									</a>
		            </li>
								<li>
									<a href="#" class="ttr-material-button">
														<span class="ttr-label">Student Section</span>
															<span class="ttr-arrow-icon"><i class="fa fa-angle-down"></i></span>
														</a>
														<ul>
															<li>
																<a href="student.php" class="ttr-material-button"><span class="ttr-label">Students</span></a>
															</li>
														
															</ul>
													</a>

											</li>
					<li>
						<a href="#" class="ttr-material-button">

		                	<span class="ttr-label">Manage Academics</span>
		                	<span class="ttr-arrow-icon"><i class="fa fa-angle-down"></i></span>
		                </a>
		                <ul>
		                	<li>
		                		<a href="batches.php" class="ttr-material-button"><span class="ttr-label">Batches</span></a>
		                	</li>
											<li>
		                		<a href="branches.php" class="ttr-material-button"><span class="ttr-label">Branches</span></a>
		                	</li>
											<!-- <li>
		                		<a href="mailbox.html" class="ttr-material-button"><span class="ttr-label">Divisions</span></a>
		                	</li> -->
		                	<li>
		                		<a href="lectures.php" class="ttr-material-button"><span class="ttr-label">Lectures</span></a>
		                	</li>

		                </ul>
		            </li>

					<li>

						<a href="bookmark.html" class="ttr-material-button">

											<span class="ttr-label">Managing Exam</span>
											<span class="ttr-arrow-icon"><i class="fa fa-angle-down"></i></span>
										</a>
										<ul>

												<li>
													<a href="fyExams.php" class="ttr-material-button"><span class="ttr-label">First-Year Exams</span></a>

												</li>
												<li>
													<a href="syExams.php" class="ttr-material-button"><span class="ttr-label">Second-Year Exams</span></a>
												</li>
												<li>
													<a href="tyExams.php" class="ttr-material-button"><span class="ttr-label">Third-Year Exams</span></a>

												</li>
												<li>
													<a href="finalExams.php" class="ttr-material-button"><span class="ttr-label">Final-Year Exams</span></a>
												</li>
									 </ul>
		            </li>
					<!-- <li>
						<a href="review.html" class="ttr-material-button">

		                	<span class="ttr-label">Account Section</span>
		                </a>
		            </li> -->


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
				<h4 class="breadcrumb-title">Student Section</h4>
				<ul class="db-breadcrumb-list">
					<li><a href="dashboard.php"><i class="fa fa-home"></i>Home</a></li>
					<li>Student Section</li>
          <li>Faculties</li>
          <li>Add Faculties</li>
				</ul>
			</div>
       <form class="row g-3" action="faculties.php" method="post">
  <!-- <div class="col">
    <input type="text" class="form-control" placeholder="First name" aria-label="First name">
  </div> -->
  <div class="col-12">
    <label for="inputName" class="form-label">Name</label>
    <input type="text" class="form-control" id="inputName" placeholder="Name">
  </div>
<br>
  <div class="col-md-12">
    <label for="inputAddress" class="form-label">City</label>
    <input type="text" class="form-control" id="inputAddress" placeholder = "Address">
  </div>
  <br>
  <!-- <div class="col-md-6">
    <label for="inputRoll" class="form-label">Roll-Number</label>
    <input type="digits" class="form-control" id="inputRoll" placeholder ="Roll-Number">
  </div> -->

  <div class="col-md-12">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
  </div>
  <br>
  <!--  -->
  <!-- <div class="col-12">
    <label for="inputAddress" class="form-label">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>
  <div class="col-12">
    <label for="inputAddress2" class="form-label">Address 2</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
  </div> -->
  <div class="col-md-6">
    <label for="inputDoB" class="form-label">Birth Date</label>
    <input type="date" class="form-control" id="inputDoB" placeholder = "Birth Date">
  </div>

  <!-- <div class="col-md-3">
    <label for="Gender" class="form-label"></label>
    <select id="inputState" class="form-select">
      <option selected>Choose...</option>
      <option>...</option>
    </select>
  </div> -->
  <!-- <div class="col-md-4">
    <label for="inputYear" class="form-label">Year</label>
    <select id="inputYear" class="form-select">

        <option>First Year</option>
        <option>Second Year</option>
        <option>Third Year</option>
        <option>Final Year</option>


    </select>
  </div> -->
  <!-- <br> -->
  <!-- <div class="col-md-4">
    <label for="inputBranch" class="form-label">Branch</label>
    <select id="inputBranch" class="form-select">
      <option selected>Computer</option>
      <option>Information Technology</option>
      <option>Information Technology</option>
      <option>Information Technology</option>
      <option>Information Technology</option>
    </select>
  </div> -->
  <br>
  <div class="col-md-6">
    <label for="inputContact" class="form-label">Contact Number</label>
    <input type="digits" class="form-control" id="inputContact" placeholder = "Contact Number">
  </div>
  <br>
  <div class="col-md-12">
    <div class="form-check">
    <label class="form-check-label" for="gridCheck">Gender :</label>
    <div class="form-check form-check-inline">
    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
    <label class="form-check-label" for="inlineCheckbox1">Male</label>
  </div>
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
    <label class="form-check-label" for="inlineCheckbox2">Female</label>
  </div>
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
    <label class="form-check-label" for="inlineCheckbox3">Others</label>
  </div>
  </div>
  <br>

  <div class="col-12">
    <button type="submit" class="btn btn-primary"><i class="fa fa-user-plus"></i> Add Faculty</button>
  </div>


       </form>
		</div>
	</main>
	<div class="ttr-overlay"></div>

<!-- External JavaScripts -->
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
<script src="assets/js/admin.js"></script>
<script src='assets/vendors/calendar/moment.min.js'></script>
<script src='assets/vendors/calendar/fullcalendar.js'></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>


</html>
