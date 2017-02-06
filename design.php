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
		<title>Design</title>

		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		
		
		<link rel="stylesheet" type="text/css" href="css/maiin.css">
		<link rel="stylesheet" type="text/css" href="radio.css">
	
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
		<div class="container palle">
		<div class="row palleb">
			<div class="col-md-12">
			<div role="tabpanel">
				<!-- Nav tabs -->
				<ul class="nav nav-tabs navh" role="tablist">
					<li role="presentation" class="active ta">
						<a href="#measurement" aria-controls="tab" role="tab" data-toggle="tab" class="taa">

						Measurement</a>
					</li>
					<li role="presentation" >
						<a href="#jacket" aria-controls="tab" role="tab" data-toggle="tab">Jacket</a>
					</li>
					<li role="presentation">
						<a href="#fabric" aria-controls="tab" role="tab" data-toggle="tab">fabric</a>
					</li>
					<li role="presentation">
						<a href="#vest" aria-controls="tab" role="tab" data-toggle="tab">Vest</a>
					</li>
					
				</ul>
			
				<!-- Tab panes -->
				<div class="tab-content tabc">
					<div role="tabpanel" class="tab-pane active" id="measurement">
					<a href="emeasure.php"><h3 style="margin-left: 30%;">Add New Measurement</h3></a>

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

					
						<input type="submit" name="submitm" value="save">

					</div>
					
					</form>
					<div role="tabpanel" class="tab-pane" id="fabric">

						<form method="post">
						    
						    
						    <div class="cc-selector" style="margin-top: 50px;">
						       <span class="choice">satin</span> <input id="satin" type="radio" name="fabric" value="satin" />
						        <label class="drinkcard-cc satin" for="satin"></label>
						     <span class="choice">santo</span><input id="santo" type="radio" name="fabric" value="santo" />
						        <label class="drinkcard-cc santo" for="santo"></label>
						     <span class="choice">esquina</span>   <input id="esquina" type="radio" name="fabric" value="esquina" />
						        <label class="drinkcard-cc esquina" for="esquina"></label>
						      <span class="choice">emer</span><input id="emer" type="radio" name="fabric" value="emer" />       
						       <label class="drinkcard-cc emer" for="emer"></label>
						      <span class="choice">concordia</span>  <input id="concordia" type="radio" name="fabric" value="concordia" />
						        <label class="drinkcard-cc concordia" for="concordia"></label>
						     <span class="choice">saladas</span>    <input id="saladas" type="radio" name="fabric" value="saladas" />
						        <label class="drinkcard-cc saladas" for="saladas"></label>
						        
						    </div>
						</form>

					</div>
					<div role="tabpanel" class="tab-pane" id="jacket">
					<div role="tabpanel">
						<!-- Nav tabs -->
						<ul class="nav nav-tabs navh2" role="tablist">
							<li role="presentation" class="active">
								<a href="#button" aria-controls="button" role="tab" data-toggle="tab">Buttons</a>
							</li>
							<li role="presentation">
								<a href="#pockets" aria-controls="pockets" role="tab" data-toggle="tab">Pockets</a>
							</li>
							<li role="presentation">
								<a href="#vents" aria-controls="vents" role="tab" data-toggle="tab">Vents</a>
							</li>
						</ul>
					
						<!-- Tab panes -->
						<div class="tab-content">
						
							<div role="tabpanel" class="tab-pane active" id="button">
								<div class="cc-selector" style="margin-top: 50px;">
									<form method="post">
	    
	    
									    <div class="cc-selector" style="margin-top: 50px;">
									       <span class="choice">1 button</span> <input id="button1" type="radio" name="jacket" value="button1" />
									        <label class="drinkcard-cc button1" for="button1"></label>
									     <span class="choice">2 buttons</span><input id="button2" type="radio" name="jacket" value="button2" />
									        <label class="drinkcard-cc button2" for="button2"></label>
									     <span class="choice">3 buttons</span><input id="button3" type="radio" name="jacket" value="button3" />
									        <label class="drinkcard-cc button3" for="button3"></label>
									      <span class="choice">4 buttons</span><input id="button4" type="radio" name="jacket" value="button4" />       
									       <label class="drinkcard-cc button4" for="button4"></label>
									      <span class="choice">4 buttons</span>  <input id="button42" type="radio" name="jacket" value="button42" />
									        <label class="drinkcard-cc button42" for="button42"></label>
									     <span class="choice">6 buttons</span>    <input id="button6" type="radio" name="jacket" value="button6" />
									        <label class="drinkcard-cc button6" for="button6"></label>
									        
									    </div>
									</form>
								</div>

						</div>
							<div role="tabpanel" class="tab-pane" id="pockets">
								<div class="cc-selector" style="margin-top: 50px;">
									<form method="post">
	    
	    
									    <div class="cc-selector" style="margin-top: 50px;">
									       <span class="choice">No breast pocket</span> <input id="no_breast_pocket" type="checkbox" name="no_breast_pocket" value="no_breast_pocket" />
									        <label class="drinkcard-cc no_breast_pocket" for="no_breast_pocket"></label>
									     
									     <span class="choice">2 Straight</span><input id="Straight2" type="checkbox" name="straight2" value="straight2" />
									        <label class="drinkcard-cc button3" for="button3"></label>
									      <span class="choice">2 Slanted</span><input id="slanted2" type="checkbox" name="slanted2" value="slanted2" />       
									       <label class="drinkcard-cc slanted2" for="slanted2"></label>
									      <span class="choice">no flaps</span>  <input id="noflaps" type="checkbox" name="noflaps" value="noflaps" />
									        <label class="drinkcard-cc noflaps" for="noflaps"></label>
									     <span class="choice">ticket</span>    <input id="ticket" type="checkbox" name="ticket " value="ticket" />
									        <label class="drinkcard-cc ticket" for="ticket"></label>
									        
									    </div>
									</form>
								</div>

							</div>
							<div role="tabpanel" class="tab-pane" id="vents">
							<div class="cc-selector" style="margin-top: 50px;">
									<form method="post">
	    
	    
									    <div class="cc-selector" style="margin-top: 50px;">
									       
									      <span class="choice">center vents</span><input id="center_vents" type="radio" name="vents" value="center_vents" />       
									       <label class="drinkcard-cc center_vents" for="center_vents"></label>
									      <span class="choice">side vents</span>  <input id="side_vents" type="radio" name="vents" value="side_vents" />
									        <label class="drinkcard-cc side_vents" for="side_vents"></label>
									     <span class="choice">no vents</span>    <input id="no_vents" type="radio" name="vents" value="no_vents" />
									        <label class="drinkcard-cc no_vents" for="no_vents"></label>
									        
									    </div>
									</form>
								</div>
								








							</div>
						</div>
					</div>
					

						





					</div>
					<div role="tabpanel" class="tab-pane" id="vest">
						
						<div class="cc-selector" style="margin-top: 50px;">
									<form method="post">
	    
	    
									    <div class="cc-selector" style="margin-top: 50px;">
									       
									      <span class="choice">no vest</span><input id="no_vest" type="radio" name="yesvest" value="no_vest" />       
									       <label class="drinkcard-cc no_vest" for="no_vest"></label>
									     <span class="choice">vest</span><input id="yesvest" type="radio" name="yesvest" value="yesvest" />       
									       <label class="drinkcard-cc yesvest" for="yesvest"></label>
									    </div>
									</form>
								</div>




					</div>
					
				</div>
			</div>












			</div>
			

		</div>
		<a href="account.php"><button type="button" class="btn btn-default" style="margin-left: 30%">Add to order box </button></a>
			





























		</div>
		




		

		<script src="js/jquery.min.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="bootstrap/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/measure.js"></script>
	</body>
</html>