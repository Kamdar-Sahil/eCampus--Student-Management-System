<?php
include("config.php");

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
	<!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

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
				<a href="#"><img alt="" src="assets\images\501dc36ba4ce49c286ef4f564c50f613 (3).png" width="122" height="27"></a> -->

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
				<h4 class="breadcrumb-title">Dashboard</h4>
				<ul class="db-breadcrumb-list">
					<li><a href="dashboard.php"><i class="fa fa-home"></i>Home</a></li>
					<li>Dashboard</li>
          <li>Manage Academics</li>
          <li>Lectures</li>
				</ul>
			</div>
			<div class="row">
				<form class="row g-3" action="" method="POST">
   <!-- <div class="col">
     <input type="text" class="form-control" placeholder="First name" aria-label="First name">
   </div> -->
   <div class="col-12">
     <label for="inputName" class="form-label">Name</label>
     <input name = "name" type="text" class="form-control" id="inputName" placeholder="Name">
   </div>
 <br>

   <br>
   <div class="col-md-3">
     <label for="inputdur" class="form-label">Duration</label>
     <input name = "dur" type="minutes" class="form-control" id="inputdur" placeholder ="Duration">
   </div>



   <div class="col-md-3">
     <label for="inputDnT" class="form-label">Date/Time</label>
     <input name = "dnt" type="datetime" class="form-control" id="inputDnT" placeholder = "Date/Time">
   </div>


   <div class="col-md-3">
     <label for="inputYear" class="form-label">Year</label>
     <input name = "year" type="text" class="form-control" id="inputYear" placeholder="Current Year of Study">
   </div>


   <div class="col-md-3">
     <label for="inputPass" class="form-label">Password</label>
     <input name = "password" type="digits" class="form-control" id="inputPass" placeholder = "Password">
   </div>
   <br>

   <div class="col-12">
 		<br>
   <input type="submit"name = "submit" >
   </div>


        </form>
 <?php

include('api.php');
if(isset($_POST['submit']))
{
$topic=$_POST['name'];
$dur=$_POST['dur'];
$dnt=$_POST['dnt'];
$year=$_POST['year'];
$pass=$_POST['password'];
$arr['topic']=$topic;
$arr['start_date']=date($dnt);
$arr['duration']=$dur;
$arr['password']=$pass;
$arr['type']='2';
$result=createMeeting($arr);
if(isset($result->id)){
  $topic = $result->topic;
	$url = $result->join_url;
	$password = $result->password;
  $time =	$result->start_time;
$duration= $result->duration;
}
$result=mysqli_query($mysqli,"INSERT into lectures values('','$year','$topic','$duration','$time','$pass','$url')");
echo $url;

if($result)
{
	echo "Lecture Addedd Successfully";
	echo "<br>";
}


}

?>
<br>
<h4 class="breadcrumb-title">Lectures</h4>

<table class="table table-hover">
<thead>
 <tr>
 <th scope="col">Sr.no</th>
   <th scope="col">Topic</th>
   <th scope="col">Duration</th>
   <th scope="col">Start-Time</th>
   <th scope="col">Password</th>
   <!-- <th scope="col">D.O.B</th>
   <th scope="col">Gender</th>
   <th scope="col">Contact No.</th>
   <th scope="col">Branch</th>
   <th scope="col">Batch</th> -->
   <th scope="col">Actions</th>
 </tr>
</thead>
<tbody>
	<?php $result1=mysqli_query($mysqli,"SELECT* from lectures ORDER by id DESC");

	while($res=mysqli_fetch_array($result1)) {

	echo '<tr>';
	echo ' <th scope="row">'.$res['id'].'</th>';
	 echo '<td>'.$res['topic'].'</td>';
	echo '<td>'.$res['duration'].'</td>';
	echo '<td>'.$res['time'].'</td>';

	 echo '<td>'.$res['pass'].'</td>';

	 echo '<td>


  <a href='.$res['url'].' class="btn btn-success">Join Meeting</a>
  </td>';
	echo '<tr>';}
  ?>




<br>

 <!-- <tr>
   <th scope="row">1</th>
   <td>Mark</td>
   <td>Otto</td>
   <td>@mdo</td>
 </tr> -->
</tbody>
</table>

</div>
</div>

			</div>
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
