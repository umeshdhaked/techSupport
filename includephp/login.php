<?php


//if (isset($_POST['submit']))
	session_start();
	

	
	include_once 'dbh.php';
	
// if (isset($_POST['submit']))

	
	$email = mysqli_real_escape_string($con,$_POST['email']);
	$psw = mysqli_real_escape_string($con,$_POST['psw']);
	
	$sql = "SELECT * FROM users WHERE email = '$email'and password ='$psw'";
	$result = mysqli_query($con , $sql);
	$resultcheck = mysqli_num_rows($result);
	
	
	
	if($resultcheck < 1){
		header("Location: ../login-page.php?message=<div>Username or Password is incorrect </div>");
		
		exit();   
	}
	else
	{
		
		$row = mysqli_fetch_assoc($result);
		$_SESSION['u_id'] = $row['id'];
		$_SESSION['u_fname'] = $row['fname'];
		
	
		
	 header("Location: ../index.php");
		
		
		exit();  
	}

	?>