<?php 
	session_start();
	include "../database_conn.php";
	$name = $_SESSION['name'];
	$sql = "SELECT * FROM record_student WHERE name = '$name'";
    $result=mysqli_query($conn,$sql);
	$res=mysqli_fetch_array($result);
    if ($res['year'] == 'First Year' || $res['year'] == 'first year' || $res['year'] == 'First year' || $res['year'] == 'first Year') {   
        header("Location: fyexams.php");
    }else if($res['year'] == 'Second Year' || $res['year'] == 'second year' || $res['year'] == 'Second year' || $res['year'] == 'second Year'){ 
        header("Location: syexams.php");
    }
?>