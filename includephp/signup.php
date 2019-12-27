<?php
// SignUp Php File

//if (isset($_POST['submit'])){
	
	
	include_once 'dbh.php';
	$fname = mysqli_real_escape_string($con,$_POST['fname']);
	$lname = mysqli_real_escape_string($con,$_POST['lname']);
	$email = mysqli_real_escape_string($con,$_POST['email']);
	$psw = mysqli_real_escape_string($con,$_POST['psw']);
	$psw_repeat = mysqli_real_escape_string($con,$_POST['psw-repeat']);
	
	
	
	if($psw != $psw_repeat){

		header("Location: ../signup-page.php?signup=psw-not-match");
		exit();
	}
	
	else{
		// checking for repeat email ids

		$sql = "SELECT * FROM users WHERE email = '$email'" ;
		$result = mysqli_query($con, $sql);
		$resultcheck = mysqli_num_rows($result);
		
		if($resultcheck >0){
			header("Location: ../signup-page.php?signup=userexist");
			exit();
		}
		
		
		$sql = "INSERT INTO users(fname , lname , email, password) VALUES('$fname' , '$lname' , '$email' , '$psw' );";
		mysqli_query($con, $sql);
		header("Location: ../indexindex.php?signup=sucess");
		exit();
	}

	
//	}


//else{
	//header("Location: ../signup-page.php?signup=notsuccessful");
	//exit();	
// }
?>