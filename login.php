<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['uname']) && isset($_POST['pword'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['pword']);

	if (empty($uname)) {
		header("Location: admin_login.php?error=Username is required");
	    exit();
	}else if(empty($pass)){
        header("Location: admin_login.php?error=Password is required");
	    exit();
	}else{
		$qry = "SELECT * FROM admins WHERE uname = '$uname' AND pword = '$pass';";

		$res = mysqli_query($conn, $qry);
		echo $qry;

		if (mysqli_num_rows($res) == 1) {
			$row = mysqli_fetch_assoc($res);
            if ($row['uname'] == $uname && $row['pword'] == $pass) {
            	$_SESSION['uname'] = $row['uname'];
            	$_SESSION['id'] = $row['id'];
				
            	header("Location: admin_home.php");
		        exit();
            }else{
				header("Location: admin_login.php?error=Incorect Username or password");
		        exit();
			}
		}else{
			header("Location: admin_login.php?error=Incorect Username or password");
	        exit();
		}
	}
	
}else{
	header("Location: admin_login.php");
	exit();
}