<?php
require ("database.php");
@$session_id=$_SESSION['id'];
if(!$_SESSION['id']){
    header('Location:login.php');
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
		
		
		
		<link rel="stylesheet" href="css/pro.css">
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
						    <a href="#">Signup</a>
						    <a href="logout.php">Logout</a>
						  
						    <a href="#">Design</a>
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
        <?php
      if(isset($_SESSION['id'])){
        echo 'Welcome ' .$_SESSION['lastname'].' '.$_SESSION['firstname'];
      }?>
		
<?php

 $sqlm="SELECT * FROM `measurements` WHERE $session_id=mea_id";
 $resultsm=$db->query($sqlm);
 $rowm=$resultsm->fetch_assoc();
 

?>


<div class="modal fade" id="view-modal">
    <div class="modal-dialog">
        <div class="modal-content view-modal" style="width:150%;">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title text-center"><?php echo  $rowm['title']?></h4>
            </div>
            <div class="container-fluid">
            <div class="row">
                    
                    <div class="col-md-4">

                    <ul>
                    
                        <li><label class="labl">Neck:</label><input type="text" name="neck" class="measure-in" value="<?php echo $rowm['neck']?>"></li>
                        <li><label class="labl">Chest:</label><input type="text" name="chest" class="measure-in" value="<?php echo $rowm['chest']?>"></li>
                        <li><label class="labl">Stomach:</label><input type="text" name="stomach" class="measure-in" value="<?php echo $rowm['stomach']?>"> </li>
                        <li><label class="labl">Length to Natural Waist:</label><input type="text" name="ltnw" class="measure-in" value="<?php echo $rowm['ltnw']?>"></li>
                        <li><label class="labl">Natural Waist:</label><input type="text" name="nw" class="measure-in" value="<?php echo $rowm['nw']?>"></li>
                        <li><label class="labl">Length to Stomach:</label><input type="text" name="lts" class="measure-in" value="<?php echo $rowm['lts']?>"></li>
                        <li><label class="labl">Seat:</label><input type="text" name="seat" class="measure-in" value="<?php echo $rowm['seat']?>"></li>
                        <li><label class="labl">Jacket Length:</label><input type="text" name="jl" class="measure-in" value="<?php echo $rowm['jl']?>"></li>
                        <li><label class="labl">Trouser Waistline:</label><input type="text" name="tw" class="measure-in" value="<?php echo $rowm['tw']?>"></li>
                        <li><label class="labl">Crotch:</label><input type="text" name="crotch" class="measure-in" value="<?php echo $rowm['crotch']?>"></li>
                        <li>
            
                               
                                            
                                    
                                    </li>


                        
                    </ul>
                    
                    </div>
                    <div class="col-md-4">
                        <ul>

                        <li><label class="labl">Shoulder Width:</label><input type="text" name="sw" class="measure-in" value="<?php echo $rowm['sw']?>"></li>
                        <li><label class="labl">Sleeve Length:</label><input type="text" name="sl" class="measure-in" value="<?php echo $rowm['sl']?>"></li>
                        <li><label class="labl">Bicep:</label><input type="text" name="bicep" class="measure-in" value="<?php echo $rowm['bicep']?>"></li>
                        <li><label class="labl">Partial Chest:</label><input type="text" name="pc" class="measure-in" value="<?php echo $rowm['pc']?>"></li>
                        <li><label class="labl">Partial Back:</label><input type="text" name="pb" class="measure-in" value="<?php echo $rowm['pb']?>"></li>
                        
                        <li><label class="labl">Length to Elbow Centre:</label><input type="text" name="ltec" class="measure-in"></li>
                        <li><label class="labl">Wrist:</label><input type="text" name="wrist" class="measure-in" value="<?php echo $rowm['wrist']?>"></li>
                        <li><label class="labl">Calf:</label><input type="text" name="calf" class="measure-in" value="<?php echo $rowm['calf']?>"></li>
                        <li><label class="labl">Trouser Length:</label><input type="text" name="tl" class="measure-in" value="<?php echo $rowm['tl']?>"></li>
                        <li><label class="labl">Thigh:</label><input type="text" name="thigh" class="measure-in" value="<?php echo $rowm['thigh']?>"></li>
                        <li><label>Measurement Title:</label><input type="text" name="title" class="title" value="<?php echo $rowm['title']?>"></li>
                    </ul>


                    </div>

                    
                    <div class="col-md-2">

                        <div class="direction">
                        <img id="direct" src="">
                        </div>
                    
                    </div>
                    </div>

                    
                    </div>
            
            
                
            
        </div>
    </div>
</div>





        <div class="container">
	<div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bhoechie-tab-container">
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 bhoechie-tab-menu">
              <div class="list-group">
                <a href="#" class="list-group-item active text-center">
                  <h4>MEASUREMENTS</h4>

                </a>
               
                <a href="#" class="list-group-item text-center">
                  ORDER
                </a>
                <a href="#" class="list-group-item text-center">
                  ADDRESS
                </a>
                <a href="#" class="list-group-item text-center">
                  CONTACT US
                </a>
              </div>
            </div>
            <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 bhoechie-tab">
                <!-- flight section -->
                <div class="bhoechie-tab-content active">
                    
                     <center>
                     <div class="row">
                     <a href="emeasure.php"><h4><i class="glyphicon glyphicon-plus"></i>  New measurement</h4></a>
                      
                     <?php
                            $sql="SELECT * FROM `measurements` WHERE $session_id=mea_id";
                            $results=$db->query($sql);
                            if($results->num_rows>0){
                                while($row=$results->fetch_assoc())
                                {

                                    
                            


                        ?>

       

                     	
                     	<div id="mcard" class="col-xs-10">

                        
                            
                     		
                     		<div class="table-responsive">
                     			<table class="table table-hover">
                     				<thead>
                     					<tr>
                     						<th>CUSTOMER-NAME</th>
                     						<th>MEASUREMENT TITLE</th>
                     						<th>SEX</th>
                     						<th>MEASUREMENTS IN</th>
                     						<th>VIEW</th>
                     						
 
                     						<th>EMAIL</th>
                     					</tr>

                     				</thead>
                     				<tbody>
                     					<tr>
                     						<td class="text-center"><?php echo $_SESSION['firstname'].' '.$_SESSION['lastname']?></td>
                     						<td class="text-center"><?php echo $row['title']?></td>
                     						<td class="text-center"><?php echo $_SESSION['sex'];?></td>
                     						<td class="text-center"><?php echo $row['unit'];?></td>
                     						<td class="text-center"><a href="#view-modal" data-toggle="modal"><i class="glyphicon glyphicon-edit"></i></a></td>
                                            
                     						
                     						<td class="text-center"><a href=""><i class="glyphicon glyphicon-folder-close"></i></a></td>
                     					</tr>
                     				</tbody>
                     			</table>
                     		</div>
                            
                            
                     	</div>
                        <?php
                        }
                    }


                            ?>
                     	


                     	

                     </div>

                     



                      </center>
                      
                    
                </div>
                <!-- train section -->
                
    
                <!-- hotel search -->
                <div class="bhoechie-tab-content">
                    <center>
                    	<h2>Cooming Soon 3</h2>
                    	


                    </center>
                </div>
                <div class="bhoechie-tab-content">
                    <center>
                      
                      <h2>Cooming  4</h2>
                      
                    </center>
                </div>
                <div class="bhoechie-tab-content">
                    <center>
                      
                      <h2>Cooming Soon 5</h2>
                      
                    </center>
                </div>
            </div>
        </div>
  </div>
</div>



















		
		<script src="js/jquery.min.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="bootstrap/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/measure.js"></script>
		<script type="text/javascript" src="js/pro.js"></script>
	</body>
</html>