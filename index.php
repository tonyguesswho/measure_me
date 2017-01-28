
<?php
	require("database.php");
	

if(isset($_SESSION['id'])){
	echo 'welcome'.' '. $_SESSION['firstname'];


}


 

	




?>




<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Home</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/maiin.css">
	
	</head>
	<body>

		<div class="head-img">
		
			<nav class="navbar navbar-default" role="navigation">
			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					
					<a class="navbar-brand" href="index.php"><img src="img/logo.png"></a>
				</div>
		
				<!-- Collect the nav links, forms, and other content for toggling -->
				
					
					
					<ul class="nav navbar-nav navbar-right navbar-text">
						<!-- The overlay -->
						<div id="myNav" class="overlay text-center">

						  <!-- Button to close the overlay navigation -->
						  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()" style="text-decoration: none; color: white;">&times;</a>

						  <!-- Overlay content -->
						  <div class="overlay-content">
						    <?php
						    	if(isset($_SESSION['id'])){
						    		

						    	}else{
						    		echo "<a href='Signup.php'>Signup</a>";
						    	}

						    ?>
						    <?php
						    	if(isset($_SESSION['id'])){
						    		echo "<a href='logout.php'>Logout</a>";

						    	}else{
						    		echo "<a href='login.php'>Login</a>";
						    	}

						    ?>
						     <?php
						    	if(isset($_SESSION['id'])){
						    		echo "<a href='account.php'>Account</a>";

						    	}else{
						    		echo" <a href='login.php'>Account</a>";
						    	}

						    ?>
						    
						    
						    <a href="index2.php">Designs</a>
						    <span class="social-span">
						    <img src="img/u43.png">
						    <img src="img/u49.png">
						    </span>
						  </div>

						</div>

						<!-- Use any element to open/show the overlay navigation menu -->
						<span onclick="openNav()">
							<div class="mi"></div>
							<div class="mi"></div>
							<div class="mi"></div>

						</span>

						
					</ul>
				<!-- /.navbar-collapse -->
			</div>
		</nav>
		<div class="big-img cc img-reponsive">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12 text-center">
						<h1 style="color: white;">YOU DESERVE PERFECT FITTING DRESSES</h1>
						<h3 style="color: white;">BESPOKE OUTFIT AT YOUR FINGER TIPS</h3>
						
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 text-center" style="padding-top: 100px;">
						<a href="index2.php">
						<div class="button_base b07_3d_double_roll">
        					<div>Get Started</div>
        					<div>Get Started</div>
        					<div>Get Started</div>
        					<div>Get Started</div>
    					</div>
							


						</a>

					</div>
					
    					
					
				</div>
			</div>
			
			</div>
			</div>
			
		
					



























	
		

		<!-- jQuery -->
		<script src="js/jquery.min.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="bootstrap/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/measure.js"></script>
	</body>
</html>