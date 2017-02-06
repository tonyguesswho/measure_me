<?php
require ('database.php');


if(isset($_POST['login'])){
	



$email=$_POST['email'];
$password=$_POST['password'];


$sql="SELECT * FROM users WHERE email='$email' AND password='$password' ";
$result=$db->query($sql);


if(!$row=$result->fetch_assoc()){
echo "sometin is incorrect";
}else{
	$_SESSION['id']=$row['id'];
	$_SESSION['firstname']=$row['firstname'];
	$_SESSION['lastname']=$row['lastname'];
	$_SESSION['email']=$row['email'];
	$_SESSION['sex']=$row['sex'];
header("Location: index2.php");
}

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
		
		
		<link rel="stylesheet"  href="css/login.css">
	</head>
	<body>

	<div class="container">
  <div class="row">

    <div class="main">

      <h3>Please Log In, or <a href="signup.php">Sign Up</a></h3>
      <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6">
          <a href="#" class="btn btn-lg btn-primary btn-block">Facebook</a>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
          <a href="#" class="btn btn-lg btn-info btn-block">Twitter</a>
        </div>
      </div>
      <div class="login-or">
        <hr class="hr-or">
        <span class="span-or">or</span>
      </div>

      <form role="form" method="POST" action="login.php">
        <div class="form-group">
          <label for="inputUsernameEmail">Username or email</label>
          <input type="text" class="form-control" id="inputUsernameEmail" name="email">
        </div>
        <div class="form-group">
          <a class="pull-right" href="#">Forgot password?</a>
          <label for="inputPassword">Password</label>
          <input type="password" class="form-control" id="inputPassword" name="password">
        </div>
        <div class="checkbox pull-right">
          <label>
            <input type="checkbox">
            Remember me </label>
        </div>
        <button type="submit" class="btn btn btn-primary" name="login">
          Log In
        </button>
      </form>
     
    
    </div>
    
  </div>
</div>





















		<script src="js/jquery.min.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="bootstrap/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/measure.js"></script>
	</body>
</html>