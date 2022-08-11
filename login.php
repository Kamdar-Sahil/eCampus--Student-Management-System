<?php  
session_start();
include "database_conn.php";

if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['role'])) {

	function test_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}

	$username = test_input($_POST['username']);
	$password = test_input($_POST['password']);
	$role = test_input($_POST['role']);
	echo $role;
	$sql = "SELECT * FROM login WHERE username='$username' AND password ='$password' AND role = '$role' ";
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) === 1) {
		// the user name must be unique
		$row = mysqli_fetch_assoc($result);
		if ($row['password'] === $password && $row['role'] == $role) {
			$_SESSION['name'] = $row['name'];
			$_SESSION['id'] = $row['id'];
			$_SESSION['role'] = $row['role'];
			$_SESSION['username'] = $row['username'];

			header("Location: home.php");

		}else {
			header("Location: index.php?error=Incorect Username or password");
		}
	}else {
		header("Location: index.php?error=Incorect Username or password");
	}
	
}else {
	header("Location: index.php");
}