<?php
// session_start();
include("config.php");

$result=mysqli_query($mysqli,"SELECT* from record_student ORDER by id DESC");


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
						<a href="dashboard.php" class="ttr-material-button ttr-submenu-toggle">HOME</a>
					</li>

				</ul>
				<!-- header left menu end -->
			</div>
			<div class="ttr-header-right ttr-with-seperator">
				<!-- header right menu start -->
				<ul class="ttr-header-navigation">
					
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
			<!-- <div class="ttr-sidebar-logo">
				<a href="#"><img alt="" src="assets/images/logo.png" width="122" height="27"></a> -->

				<div class="ttr-sidebar-toggle-button">
					<i class="ti-arrow-left"></i>
				</div>
			</div>
			<!-- side menu logo end -->
			<!-- sidebar menu start -->
			<nav class="ttr-sidebar-navi">
				<!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button> -->
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
                              <!-- <li>
                                <a href="faculties.php" class="ttr-material-button"><span class="ttr-label">Faculties</span></a>
                              </li> -->
                              </ul>
													</a>
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
          <li>Students</li>

				</ul>
			</div>
      <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
  <div class="btn-group me-2" role="group" aria-label="First group">
    <button type="button" class="btn btn-primary"><a href="addStudent.php" >Add Student <i class="fa fa-user-plus"></i></a></button>
  </div>
  <div class="btn-group me-2" role="group" aria-label="First group">
    <button type="button" class="btn btn-primary"><a href="#" class="ttr-material-button ttr-search-toggle"><i class="fa fa-search"></i> Search</a></button>
  </div>
</div>
<br>
<h4 class="breadcrumb-title">Students</h4>

<table class="table table-hover">
<thead>
 <tr>
 <th scope="col">Sr.no</th>
   <th scope="col">Name</th>
   <th scope="col">Address</th>
   <th scope="col">Roll No.</th>
   <th scope="col">Email</th>
   <th scope="col">D.O.B</th>
   <th scope="col">Gender</th>
   <th scope="col">Contact No.</th>
   <th scope="col">Branch</th>
   <th scope="col">Batch</th>
   <!-- <th scope="col">Actions</th> -->
 </tr>
</thead>
<tbody>
	<?php
	while($res=mysqli_fetch_array($result)){
 echo '<tr>';
  echo ' <th scope="row">'.$res['id'].'</th>';
	 echo '<td>'.$res['name'].'</td>';
   echo '<td>'.$res['address'].'</td>';
	 echo '<td>'.$res['roll'].'</td>';
	 echo '<td>'.$res['email'].'</td>';
	 echo '<td>'.$res['dob'].'</td>';
	 echo '<td>'.$res['gender'].'</td>';
	 echo '<td>'.$res['contact_number'].'</td>';
	 echo '<td>'.$res['branch'].'</td>';
	 echo '<td>'.$res['year'].'</td>';
echo '</tr>';
}?>
<!-- </tbody>
</table>
<br> -->
<!-- <div class="db-breadcrumb"> -->
<!-- <h4 class="breadcrumb-title">Second Year</h4>

<table class="table table-hover">
<thead>
 <tr>
   <th scope="col">Sr.no</th>
   <th scope="col">Name</th>
   <th scope="col">Address</th>
   <th scope="col">Roll No.</th>
   <th scope="col">Email</th>
   <th scope="col">D.O.B</th>
   <th scope="col">Gender</th>
   <th scope="col">Contact No.</th>
   <th scope="col">Branch</th>
   <th scope="col">Actions</th>
 </tr>
</thead>
<tbody> -->
 <!-- <tr>
   <th scope="row">4</th>
   <td>Mark</td>
   <td>Otto</td>
   <td>@mdo</td>
 </tr>
 <tr>
   <th scope="row">5</th>
   <td>Jacob</td>
   <td>Thornton</td>
   <td>@fat</td>
 </tr>
 <tr>
   <th scope="row">6</th>
   <td colspan="2">Larry the Bird</td>
   <td>@twitter</td>
 </tr> -->
<!-- </tbody>
</table>
<br> -->
<!-- <div class="db-breadcrumb"> -->
<!-- <h4 class="breadcrumb-title">Third Year</h4> -->

<!-- <table class="table table-hover">
<thead>
 <tr>
   <th scope="col">Sr.no</th>
   <th scope="col">Name</th>
   <th scope="col">Address</th>
   <th scope="col">Roll No.</th>
   <th scope="col">Email</th>
   <th scope="col">D.O.B</th>
   <th scope="col">Gender</th>
   <th scope="col">Contact No.</th>
   <th scope="col">Branch</th>
   <th scope="col">Actions</th>
 </tr>
</thead>
<tbody> -->
 <!-- <tr>
   <th scope="row">7</th>
   <td>Mark</td>
   <td>Otto</td>
   <td>@mdo</td>
 </tr>
 <tr>
   <th scope="row">8</th>
   <td>Jacob</td>
   <td>Thornton</td>
   <td>@fat</td>
 </tr>
 <tr>
   <th scope="row">9</th>
   <td colspan="2">Larry the Bird</td>
   <td>@twitter</td>
 </tr> -->

<!-- <div class="db-breadcrumb"> -->
<!-- <h4 class="breadcrumb-title">Final Year</h4> -->

<!-- <table class="table table-hover">
<thead>
 <tr>
   <th scope="col">Sr.no</th>
   <th scope="col">Name</th>
   <th scope="col">Address</th>
   <th scope="col">Roll No.</th>
   <th scope="col">Email</th>
   <th scope="col">D.O.B</th>
   <th scope="col">Gender</th>
   <th scope="col">Contact No.</th>
   <th scope="col">Branch</th>
   <th scope="col">Actions</th>
 </tr>
</thead>
<tbody> -->
 <!-- <tr>
   <th scope="row">10</th>
   <td>Mark</td>
   <td>Otto</td>
   <td>@mdo</td>
 </tr>
 <tr>
   <th scope="row">11</th>
   <td>Jacob</td>
   <td>Thornton</td>
   <td>@fat</td>
 </tr>
 <tr>
   <th scope="row">12</th>
   <td colspan="2">Larry the Bird</td>
   <td>@twitter</td>
 </tr> -->
</tbody>
</table>
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
