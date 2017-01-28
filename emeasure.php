
<?php

 
require ("database.php");
if(!isset($_SESSION['id'])){
	$_SESSION['redirectURL']=$_SERVER['REQUEST_URI'];
	header('Location:login.php');
}
if(isset($_SESSION['id'])){

if(isset($_POST['submitm'])){
$mea_id=$_SESSION['id'];
$neck=$_POST['neck'];

$chest=$_POST['chest'];
$stomach=$_POST['stomach'];
$ltnw=$_POST['ltnw'];
$nw=$_POST['nw'];
$lts=$_POST['lts'];

$seat=$_POST['seat'];
$jl=$_POST['jl'];
$tw=$_POST['tw'];
$crotch=$_POST['crotch'];
$sw=$_POST['sw'];

$sl=$_POST['sl'];
$bicep=$_POST['bicep'];
$pc=$_POST['pc'];
$pb=$_POST['pb'];
$ltec=$_POST['ltec'];
$wrist=$_POST['wrist'];
$calf=$_POST['calf'];
$tl=$_POST['tl'];
$thigh=$_POST['thigh'];
$title=$_POST['title'];
@$unit=$_POST['unit'];

$sql="INSERT INTO measurements (mea_id,neck,chest,stomach,ltnw,nw,lts,seat,jl,tw,crotch,sw,sl,bicep,pc,pb,ltec,wrist,calf,tl,thigh,title,unit) 
VALUES ('$mea_id','$neck','$chest','$stomach','$ltnw','$nw','$lts','$seat','$jl','$tw','$crotch','$sw','$sl','$bicep','$pc','$pb','$ltec','$wrist','$calf','$tl','$thigh','$title','$unit')";
$result=$db->query($sql);




}

}





?>



<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Title Page</title>

		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		
		
		<link rel="stylesheet" type="text/css" href="css/maiin.css">
	
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
						    		echo "<a href='Signupt.php'>Signup</a>";
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
	<a href="download.php"><p>Download Measurement Guide</p></a>
					<form method="POST" action="design.php" name="designf">
					<div class="row">
					
					<div class="col-md-5">

					<ul>
					
						<li><label class="labl">Neck:</label><input type="text" name="neck" class="measure-in"></li>
						<li><label class="labl">Chest:</label><input type="text" name="chest" class="measure-in"></li>
						<li><label class="labl">Stomach:</label><input type="text" name="stomach" class="measure-in"></li>
						<li><label class="labl">Length to Natural Waist:</label><input type="text" name="ltnw" class="measure-in"></li>
						<li><label class="labl">Natural Waist:</label><input type="text" name="nw" class="measure-in"></li>
						<li><label class="labl">Length to Stomach:</label><input type="text" name="lts" class="measure-in"></li>
						<li><label class="labl">Seat:</label><input type="text" name="seat" class="measure-in"></li>
						<li><label class="labl">Jacket Length:</label><input type="text" name="jl" class="measure-in"></li>
						<li><label class="labl">Trouser Waistline:</label><input type="text" name="tw" class="measure-in"></li>
						<li><label class="labl">Crotch:</label><input type="text" name="crotch" class="measure-in"></li>
						<li>
			
                    			<input type="radio" name="unit" id="input" value="inches">INCHES
                    			<input type="radio" name="unit" id="input" value="cm">CM
                    						
                    				
                    				</li>


						
					</ul>
					
					</div>
					<div class="col-md-5">
						<ul>

						<li><label class="labl">Shoulder Width:</label><input type="text" name="sw" class="measure-in"></li>
						<li><label class="labl">Sleeve Length:</label><input type="text" name="sl" class="measure-in"></li>
						<li><label class="labl">Bicep:</label><input type="text" name="bicep" class="measure-in"></li>
						<li><label class="labl">Partial Chest:</label><input type="text" name="pc" class="measure-in"></li>
						<li><label class="labl">Partial Back:</label><input type="text" name="pb" class="measure-in"></li>
						
						<li><label class="labl">Length to Elbow Centre:</label><input type="text" name="ltec" class="measure-in"></li>
						<li><label class="labl">Wrist:</label><input type="text" name="wrist" class="measure-in"></li>
						<li><label class="labl">Calf:</label><input type="text" name="calf" class="measure-in"></li>
						<li><label class="labl">Trouser Length:</label><input type="text" name="tl" class="measure-in"></li>
						<li><label class="labl">Thigh:</label><input type="text" name="thigh" class="measure-in"></li>
						<li><label>Measurement Title:</label><input type="text" name="title" class="title"></li>
					</ul>


					</div>

					
					<div class="col-md-2">

						<div class="direction">
						<img id="direct" src="">
						</div>
					
					</div>

					
					</div>
					<input type="submit" name="submitm" value="save" class="sbtn">
					</form>
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