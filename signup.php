<?php
require("database.php");
if(isset($_POST['signup'])){
$fname=$_POST['firstname'];

$lname=$_POST['lastname'];
$email=$_POST['email'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];
$sex=$_POST['sex'];

$sql="INSERT INTO users (firstname,lastname,email,password,sex) 
VALUES ('$fname', '$lname', '$email', '$password','$sex')";
$result=$db->query($sql);

$sqli="SELECT * FROM users WHERE email='$email' AND password='$password' ";
$result=$db->query($sqli);


if(!$row=$result->fetch_assoc()){
echo "sometin is incorrect";
}else{
    $_SESSION['id']=$row['id'];
    $_SESSION['firstname']=$row['firstname'];
    $_SESSION['lastname']=$row['lastname'];
    $_SESSION['email']=$row['email'];
    $_SESSION['sex']=$row['sex'];

}
header("Location: index2.php");




}








?>






<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Title Page</title>

		
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="css/maiin.css">
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
						    
						    <a href="login.php">Login</a>
						    <a href="#">Account</a>
						    <a href="#">Designs</a>
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
			 <div class="row" style="border: 5px solid white; margin-top: 50px;">
                    <div class="col-md-6">
                        <div class="box">
                            <h2 class="text-uppercase">New account</h2>
                            
                            

                            <hr>

                            <form action="signup.php" method="post" name="signup_form">
                                <div class="form-group fsize">
                                    <label for="">First-Name</label>
                                    <input type="text" class="form-control" name="firstname">
                                    <span class="error"></span>
                                </div>
                                <div class="form-group fsize">
                                    <label for="">Last-Name</label>
                                    <input type="text" class="form-control" name="lastname">
                                    <span class="error"></span>
                                </div>
                                <div class="form-group fsize">
                                    <label for="">Email</label>
                                    <input type="email" class="form-control" name="email">
                                    <span class="error"></span>
                                </div>
                                <div class="form-group fsize">
                                    <label for="">Password</label>
                                    <input type="password" class="form-control" name="password">
                                    <span class="error"></span>
                                </div>
                                <div class="form-group fsize">
                                    <label for="">Confirm-Password</label>
                                    <input type="password" class="form-control" name="cpassword">
                                    <span class="error"></span>
                                </div>
                                <input type="radio" name="sex" id="sex" value="Male">Male
                                <input type="radio" name="sex" id="sex" value="Female">Female
                                
                                <div>
                                    <input name="signup" type="submit" class="btn btn-default sbtn" value="Sign Up">
                                </div>
                            </form>
                            <h5>Already Have an account <a href="login.php"> Log In</a></h5>
                        </div>
                    </div>
                    <div class="col-md-6 text-center">
                    	<h2 class="text-uppercase">log in with</h2>
                    	<hr>
                    	<a href=""><button type="button" class="btn btn-default social-signup fb" style="margin-top: 100px;"><img src="img/u546.png">&nbsp;&nbsp; Facebook</button></a>
                    	<br>
                    	<a href=""><button type="button" class="btn btn-default social-signup tw"><img src="img/u552.png">&nbsp;&nbsp;Twitter</button></a><br><br><br>
                    	
                    	
                    
                        
                    </div>

                    

                </div>
                <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
            <div class="modal-dialog modal-sm">

                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="Login">Customer login</h4>
                    </div>
                    <div class="modal-body text-center">
                        <form action="#" method="post">
                            <div class="form-group">
                                <input type="email" class="form-control" id="email_modal" placeholder="email">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="password_modal" placeholder="password">
                            </div>

                            <p class="text-center">
                                <button class="btn btn-default sbtn">Log in</button>
                            </p>

                        </form>
                       
                        <p>or login with</p>
                        <span class="fspan text-center"><img src="img/u43.png"><img src="img/u49.png"></span>
                        


                        <p class="text-center">Not registered yet?</p>
                        <p class="text-center"><a href="signup.html"><strong>Sign Up</strong></a>! It is easy and gives you access to full features of measure.me</p>

                    </div>
                </div>
            </div>
        </div>
                

       </div>

		

















		
		<script src="js/jquery.min.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="bootstrap/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/measure.js"></script>
	</body>
</html>