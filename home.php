<?php 
   session_start();
   include "database_conn.php";
    if (isset($_SESSION['username']) && isset($_SESSION['id'])) {   
        if ($_SESSION['role'] == 'teacher') {
            header("Location: teacher/dashboard.php");
     }else{ 
            header("Location: student/student-info.php");
        }
    }else{
	    header("Location: index.php");
    } ?>
