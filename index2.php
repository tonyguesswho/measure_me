<?php

require('database.php');









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
		
		








		
		<div id="steps" class="container-fluid text-center well">

			
			<div class="row instruct">
			    <div class="col-sm-4 service-desc">
			    <h4>Select</h4>
			    	
			      
			      <p>Select the kind of dress you want to make, or choose from our vast collection
			   </p>
			    </div>
			    <div class="col-sm-4 service-desc">
			    <h4>Add measurements</h4>
			      
			      
			      <p>Add your measurements and use it whenever you want.Customize your outfit to perfection.</p>
			    </div>
			    <div class="col-sm-4 service-desc">
			    <h4>Get your Bespoke Dress</h4>
			   
			      
			      <p>Delivery extends from 3 days to 2 weeks.We have a flexible return policy</p>
			    </div>
			</div>
		</div>
		
		<div class="container">
			<div class="choice text-center">
				<div class="row">
					<div class="col-md-4 col-md-offset-3">
						<select name="" id="input" class="form-control">
					<option value="">Suit</option>
					<option value="">Gown</option>
					<option value="">T-shirt</option>
					<option value="">Trouser</option>
					<option value="">Traditional Attire</option>
				</select>

					</div>
					<div class="col-md-2">
						<a href="collection.php"><button type="button" class="btn" style="background: #FD4D00; color: white;">Collections</button></a>
					</div>
				</div>
			</div>
		</div>

		<?php
		@$session_id=$_SESSION['id'];
		if(isset($_POST['designbtn'])){
			$product_id=$_POST['submitb'];
			$bquery="INSERT INTO orders (user_id,product_id) VALUES ('$session_id','$product_id')";

			$result4=$db->query($bquery);

		}

			




		?>

		
		

			
		
		


		<div class="container">
				<div class="row top">
				<h2 class="td">Top Designs</h2>
						<div class="col-md-4" style="display: block;">

						
							<div href="#" class="thumbnail ov">
								<img src="img/shirt.jpg" class="img-rounded img-reponsive image">
								<div class="middle">
								<form method="post">
								<input type="hidden" name="submitb" value="20">
									<a href="design.php" name="designbtn"><div class="text">Design</div></a>
								</form>

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
								<img src="img/e1.jpg" class="img-rounded img-reponsive image">
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
								<img src="img/top5.jpg" class="img-rounded img-reponsive image">
								<div class="middle">
									<a href="design.php"><div class="text">Design</div></a>
								</div>
							</div>
						
							
						</div>
						
						<div class="col-md-4">
						
							<div href="#" class="thumbnail ov">
								<img src="img/top6.jpeg" class="img-rounded img-reponsive image">
								<div class="middle">
									<a href="design.php"><div class="text">Design</div></a>
								</div>
							</div>
						
							
						</div>
						


				</div>



		</div>
		<h2 style="text-align: center;">Happy Users</h2>
		<div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
		    <!-- Indicators -->
		    <ol class="carousel-indicators">
		      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		      <li data-target="#myCarousel" data-slide-to="1"></li>
		      <li data-target="#myCarousel" data-slide-to="2"></li>
		    </ol>

		    <!-- Wrapper for slides -->
		    <div class="carousel-inner" role="listbox">
		      <div class="item active">
		        <h4>"So Easy "<br><span style="font-style:normal;">Michael Roe, Vice President, Comment Box</span></h4>
		      </div>
		      <div class="item">
		        <h4>"One word... WOW!!"<br><span style="font-style:normal;">John Doe, Salesman, Rep Inc</span></h4>
		      </div>
		      <div class="item">
		        <h4>"Could I... BE any more happy with this Guys?"<br><span style="font-style:normal;">Chandler Bing, Actor, FriendsAlot</span></h4>
		      </div>
			</div>

		    <!-- Left and right controls -->
		    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
		      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		      <span class="sr-only">Previous</span>
		    </a>
		    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
		      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		      <span class="sr-only">Next</span>
		    </a>
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
					</div>
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
				
			
			

                        <p class="text-center">Not registered yet?</p>
                        <p class="text-center"><a href="signup.php"><strong>Sign Up</strong></a>! It is easy and gives you access to full features of measure.me</p>

            </div>
                
            
       
	
		</footer>
					



























			
					

		<script src="js/jquery.min.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="bootstrap/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/measure.js"></script>
	</body>
</html>