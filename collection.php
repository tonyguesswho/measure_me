<?php
require ("database.php");






?>


<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Title Page</title>

		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		
		
		<link rel="stylesheet"  href="css/maiin.css">
	</head>
	<body>
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
		
		<div class="container">
			<div class="choice text-center" style="margin-top: 100px;">
				<div class="row">
					<div class="col-md-4 col-md-offset-3">
						<select name="" id="input" class="form-control">
					<option value="">English Suit</option>
					<option value="">Gucci mane</option>
					<option value="">French reven Suit</option>
					
				</select>

					</div>
					<div class="col-md-2">
						<a href="design.php"><button type="button" class="btn" style="background: #FD4D00; color: white">Design</button></a>
					</div>
				</div>
			</div>
		</div>
		


		<div class="container">
				<div class="row top">
				<h2 class="sc">SUIT COLLECTION</h2>
						<div class="col-md-4" style="display: block;">

						
							<div href="#" class="thumbnail ov">
								<img src="img/top3.jpeg" class="img-rounded img-reponsive image">
								<div class="middle">
									<a href="design.php"><div class="text">Design</div></a>
								</div>
							</div>
						
							
						</div>

						<div class="col-md-4">
						<div href="#" class="thumbnail ov">
								<img src="img/wit.jpg" class="img-rounded img-reponsive image">
								<div class="middle">
									<a href="design.php"><div class="text">Design</div></a>
								</div>
							</div>
						
							
						</div>
						
						<div class="col-md-4">
						
							<div href="#" class="thumbnail ov">
								<img src="img/suit5.jpg" class="img-rounded img-reponsive image">
								<div class="middle">
									<a href="design.php"><div class="text">Design</div></a>
								</div>
							</div>
						
							
						</div>
						<div class="col-md-4">
						<div href="#" class="thumbnail ov">
								<img src="img/top4.jpeg" class="img-rounded img-reponsive image">
								<div class="middle">
									<a href="design.php"><div class="text">Design</div></a>
								</div>
							</div>
						
							
						</div>
						
						<div class="col-md-4">
						
							<div href="#" class="thumbnail ov">
								<img src="img/suit6.jpeg" class="img-rounded img-reponsive image">
								<div class="middle">
									<a href="design.php"><div class="text">Design</div></a>
								</div>
							</div>
						
							
						</div>
						
						<div class="col-md-4">
						
							<div href="#" class="thumbnail ov">
								<img src="img/suit7.jpeg" class="img-rounded img-reponsive image">
								<div class="middle">
									<a href="design.php"><div class="text">Design</div></a>
								</div>
							</div>
						
							
						</div>
						


				</div>



		</div>



















		<footer class="container-fluid">
			<div class="row">
				<div class="col-md-4 col-xs-12 text-center">
					 <h4>ABOUT US</h4>

                    <p>We enable you order bespoke clothings from the comfort of your home</p>

                    <hr>

                    <h4>JOIN OUR MONTHLY NEWSLETTER</h4>

                    <form>
                        <div class="input-group">

                            <input type="email" class="form-control" placeholder="email">

                            <span class="input-group-btn">

                        <button class="btn btn-default" type="button">Join</button>

                            </span>

                        </div>
                        
                    </form>

                    <hr class="hidden-md hidden-lg hidden-sm">

				</div>
				<div class="col-md-4 col-xs-12 text-center">
					<div id="address">
						<h4>Address</h4>
						<p>No 10 Alara street Sabo Yabo Lagos State.</p>
					</div>lo
					<div>
						<p>All Rights Reserved</p>
						<p>&copy; 2017 measure.me</p>
							
					</div>
				</div>
				<div class="col-md-4 col-xs-12 text-center">
					<span class="fspan">
					<img src="img/u71.png">
					<img src="img/u73.png">
					<img src="img/u75.png">
					<img src="img/u79.png">
					<img src="img/u77.png">
					</span><br><br>
					
				</div>
				
			</div>
	
		</footer>
					

		<script src="js/jquery.min.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="bootstrap/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/measure.js"></script>
	</body>
</html>