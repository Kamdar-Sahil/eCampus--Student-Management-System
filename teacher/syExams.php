<?php
session_start();
include("config.php");
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
          <li>Managing Exams</li>
          <li>First-Year Exams</li>
				</ul>
			</div>
			<div class="row">

<div class = "card w-100 p-3" style="background-color:#FFFDDE ;">
  <div class="card-header">
  <b>Add Marks</b>
  </div>
  <div class="card-body">
        <form method="post" action="">
          <div>
            <div class = "col-lg-6">
              <label for="inputName" class="form-label">Name</label>
              <input name = "name" type="text" class="form-control" id="inputName" placeholder="Name">
            </div>
            <div class="col-md-6">
              <label for="inputRoll" class="form-label">Roll-Number</label>
              <input name = "roll" type="digits" class="form-control" id="inputRoll" placeholder ="Roll-Number">
            </div>
          </div>
<br>
        <br>
    <table class="table table-hover">
           <tbody>
             <thead>


                  <tr>
                    <th>Subjects/Exams</th>
                   <th>PPL</th>
                   <th>DSA</th>

                  </tr>
                  <tr>
                    <th>Mid Sem</th>

              <td>
                  <input type="digits" name="PPLmidsem" placeholder = "Mid-Sem Marks">
              </td>

              <td>
                  <input type="digits" name="DSAmidsem" placeholder = "Mid-Sem Marks" >
              </td>


                  </tr>
                  <tr>
                    <th>End Sem</th>

              <td>
                  <input type="digits" name="PPLendsem" placeholder = "End-Sem Marks">
              </td>

              <td>
                  <input type="digits" name="DSAendsem" placeholder = "End-Sem Marks" >
              </td>


                  </tr>
                <!-- <tr>
                    <th>Total</th>

            <td>
                <input type="digits" name="TotalPPL" placeholder = "PPL">
            </td>

            <td>
                <input type="digits" name="TotalDSA" placeholder = "DSA" >
            </td>

                  </tr> -->



        </tbody>
    </table>

<input type="submit" name="submit">
     </form>
		 <?php
		 if(isset($_POST['submit']))
		 {
		 $name=$_POST['name'];
		 $roll=$_POST['roll'];
		 $mid_PPL=$_POST['PPLmidsem'];
		$mid_DSA=$_POST['DSAmidsem'];
		$end_PPL=$_POST['PPLendsem'];
	 $end_DSA=$_POST['DSAendsem'];
	 

		 $result=mysqli_query($mysqli,"INSERT into syexams values('','$name','$roll','$mid_PPL','$mid_DSA','$end_PPL','$end_DSA')");

		 if($result)
		 {
			// header("Location:fyExams.php");
			echo "Record Added Successfully";
		 }
 }
		 ?>
 <!-- </span> -->
	</div>
 </div>
 </div>


 <!-- <br>
 <div class="row">
 <div class = "card w-100 p-3" >
		<div class="card-body">
			<table class="table table-hover">
						 <tbody>
							 <thead>
								<tr>
								<th scope="col-lg-4 "><b>Sr.no</b></th>
									<th scope="col-lg-4"><b>Name</b></th>
									<th scope="col">Address</th>
									<th scope="col-lg-4"><b>Roll No.</b></th>

								</tr>
							 </thead>
							 <tbody>

 </div>
</div>
</div> -->


<br>
<div class="row">
<div class = "card w-100 p-3" >
   <div class="card-body">
     <table class="table table-hover">
            <tbody>
              <thead>
               <tr>
               <th scope="col-lg-4 "><b>Sr.no</b></th>
                 <th scope="col-lg-4"><b>Name</b></th>
                 <!-- <th scope="col">Address</th> -->
                 <th scope="col-lg-4"><b>Roll No.</b></th>

               </tr>
              </thead>
              <tbody>
								<?php $result1=mysqli_query($mysqli,"SELECT* from syexams ORDER by id DESC");

								while($res=mysqli_fetch_array($result1)) {

								echo '<tr>';
								echo ' <th scope="row">'.$res['id'].'</th>';
								 echo '<td>'.$res['name'].'</td>';

								 echo '<td>'.$res['roll'].'</td>';
								 echo '<td>';
								echo '<tr>';


								                    echo '<th>'.'Subjects/Exams'.'</th>' ;
								                  echo '<th>'.'PPL'.'</th>' ;
								                  echo '<th>'.'DSA'.'</th>' ;

								                    echo '</tr>';
								                  echo '<tr>';
								                    echo '<th>'.'Mid-Sem'.'</th>' ;
								                    echo '<td>'. $res['mid_PPL'].' </td>';
								                    echo '<td>'. $res['mid_DSA'].' </td>';

								                  echo '</tr>';
																	echo '<tr>';
																		echo '<th>'.'End-Sem'.'</th>' ;
																		echo '<td>'. $res['end_PPL'].' </td>';
																		echo '<td>'. $res['end_DSA'].' </td>';

																	echo '</tr>';
																	echo '<tr>';
								                    

								                  echo '</tr>';
								               echo '</td>';
								          echo '</tr>';
												}?>

         </tbody>
     </table>
 <!-- <a href="#" class="btn btn-primary">Print Marksheet</a> -->
    <!-- </span> -->
  </div>
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
