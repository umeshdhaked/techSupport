<?php

	session_start();
	
?>

<html>
<head>

 
  
  <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Saturn is free PSD &amp; HTML template by @flamekaizar">
    <meta name="author" content="Afnizar Nur Ghifari">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="css/kube.min.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/custom.min.css" />
    <link rel="shortcut icon" href="img/favicon.png" />
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet" type="text/css">
   
  
  <link rel="stylesheet" href="css/lol.css" />
  
  
  
  
  
    
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
				        
				        
						
						
						
				

			        
				    </ul>
				</nav>
			</header>
		</div>
	</div>
	</body>





		
		
		
		
<form method="POST" action="includephp/login.php" >
  <div class="imgcontainer">
    <img src="img/img_avatar2.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
 
 
<?php

  if(isset($_GET['message']))
  {
	$message = $_GET['message'];
    echo $message ,"<br> <br> " ;	
	  
  }
		 
		 
?>		 
		 
		 
		 
		 
		 
		 
  
    <label><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="email" required>

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <button type="submit" name="loginbtn">Login</button>
 	<input type="checkbox" checked="checked"> Remember me

	
	
	
	
  </div>

  
  
  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn" onclick="window.location.href='/index.php' ">Cancel</button>
    <span class="psw"><a href="#">Forgot password?</a></span>
  </div>
  
  
  
</form>


  
  
  
  
  
  









</html>