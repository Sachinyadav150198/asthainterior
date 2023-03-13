<?php
session_start();

$useremail = $_POST['useremail'];
$password = $_POST['password'];
	
	include ("./admin/include/config.php");

	$sel = "select * from user where user_email = '$useremail' or password = '$password' ";
	$r = mysqli_query($conn,$sel);
	$res = mysqli_fetch_array($r);
	// echo $res['user_email'];
 if ($res['user_email']==$useremail) 
 {
 	if ($res['password']==$password) 
 	{
 		$up = "select * from user where user_email='$useremail' ";
 		if(mysqli_query($conn,$up)) 
 		{
 			$_SESSION['user']=$useremail;
 			header("location:admin/index.php");
 		}
 		else
 		{
			echo "<script>window.location.href='index.php';alert('Log IN Failed')</script>";
 			// echo "log in failed";
 		}
 	}
 	else

 	{
		echo "<script>window.location.href='index.php';alert('Password Is Wrong')</script>";
 		// echo "password is wrong";
 	}
 }
 else
 {
	echo "<script>window.location.href='index.php';alert('Email Is Wrong')</script>";
 	// echo "email is wrong";
 }

?>