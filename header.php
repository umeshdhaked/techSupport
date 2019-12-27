<!DOCTYPE html>
<html>
<head>





    <title>Technical Support by Umesh</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="mysmartsupports.com by Umesh">
    <meta name="author" content="Umesh Dhaked">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="css/kube.min.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/custom.min.css" />
    <link rel="shortcut icon" href="img/favicon.png" />
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet" type="text/css">
   
</head>
<body>






<!-- Navigation -->
	<div class="main-nav">
		<div class="container">
			<header class="group top-nav">
				<nav class="navbar logo-w navbar-left" >
					<a class="logo" href="index.php">Technical Support</a>
				</nav>
				<div class="navigation-toggle" data-tools="navigation-toggle" data-target="#navbar-1">
				    <span class="logo">Technical Support</span>
				</div>
			    <nav id="navbar-1" class="navbar item-nav navbar-right">
				    <ul>
				        <li class="active"><a href="index.php">Home</a></li>
				        <li><a href="about.php">About</a></li>
		
				        <li><a href="contact.php">Contact</a></li>
				        
				        
						
						
						
						
						
 <?php
 
	if(isset($_SESSION['u_id'])){
		
		
		
		echo '		
		<li ><a href="includephp/logout.php">LOGOUT </a></li>
		';
	 
		echo " HI ", $_SESSION['u_fname'];
	 
	}
	else
	{
		echo ' <li><a href="login-page.php">Login</a></li>
			   <li><a href="signup-page.php">Sign Up</a></li>';
		
		
		
	}
?>

			        
				    </ul>
				</nav>
			</header>
		</div>
	</div>
	</body>

	</html>