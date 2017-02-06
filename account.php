<?php
require ("database.php");
@$session_id=$_SESSION['id'];
if(!$_SESSION['id']){
    header('Location:login.php');
};

//$update= " UPDATE measurements SET neck=$rowm['neck'] WHERE mea_id=$_session_id";


 
      
        
      

       







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
        
        
<h4 class="text-center "><?php echo 'Welcome' ." ". $_SESSION['firstname']."  ".$_SESSION['lastname']?></h4>

		
<?php

 $sqlm="SELECT * FROM `measurements` WHERE $session_id=mea_id";
 $resultsm=$db->query($sqlm);
 $rowm=$resultsm->fetch_assoc();

 



 
 

?>
<?php

//$update_sql="UPDATE measurements SET neck=$rowm['neck'] WHERE mea_id=$_SESSION['id']";

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
                    <form method="POST">

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
                    <input type="button" name="editb" value="Edit">
                    </form>
                    
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

<div class="modal fade modal-sm" id="email_modal" style="margin-left: 80%; margin-top: 10%;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                 <h4>Your Measurement Attached</h4>
            </div>
            <div class="modal-body">
            <form method="post" class="form-horizontal">
           
            <input type="text" name="recep" placeholder="Receipient Email"><br><br>
            <textarea placeholder="Message"></textarea>
            <input type="button" class="btn btn-primary" name="email_btn" style="margin-left: 20px; margin-bottom: 25px;" value="SEND" href="send.php" data-dismiss="modal">
            </form>
                
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
                                            
                     						
                     						<td class="text-center"><a href="#email_modal" data-toggle="modal"><i class="glyphicon glyphicon-folder-close"></i></a></td>
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
                    	<h2>No order yet</h2>
                    	


                    </center>
                </div>
                <div class="bhoechie-tab-content">
                    
                      
                      
    <div class="row" style="margin-bottom: 20px;">
         <form class="form-horizontal">
            
                
                <!-- address-line1 input-->
                <div class="control-group">
                    <label class="control-label">Address Line 1</label>
                    <div class="controls">
                        <input id="address-line1" name="address-line1" type="text" placeholder="address line 1"
                        class="input-xlarge">
                        <p class="help-block">Street address, P.O. box, company name, c/o</p>
                    </div>
                </div>
                <!-- address-line2 input-->
                <div class="control-group">
                    <label class="control-label">Address Line 2</label>
                    <div class="controls">
                        <input id="address-line2" name="address-line2" type="text" placeholder="address line 2"
                        class="input-xlarge">
                        <p class="help-block">Apartment, suite , unit, building, floor, etc.</p>
                    </div>
                </div>
                <!-- city input-->
                <div class="control-group">
                    <label class="control-label">City / Town</label>
                    <div class="controls">
                        <input id="city" name="city" type="text" placeholder="city" class="input-xlarge">
                        <p class="help-block"></p>
                    </div>
                </div>
                <!-- region input-->
                <div class="control-group">
                    <label class="control-label">State / Province / Region</label>
                    <div class="controls">
                        <input id="region" name="region" type="text" placeholder="state / province / region"
                        class="input-xlarge">
                        <p class="help-block"></p>
                    </div>
                </div>
                <!-- postal-code input-->
                <div class="control-group">
                    <label class="control-label">Zip / Postal Code</label>
                    <div class="controls">
                        <input id="postal-code" name="postal-code" type="text" placeholder="zip or postal code"
                        class="input-xlarge">
                        <p class="help-block"></p>
                    </div>
                </div>
                <!-- country select -->
                <div class="control-group">
                    <label class="control-label">Country</label>
                    <div class="controls">
                        <select id="country" name="country" class="input-xlarge">
                            <option value="" selected="selected">(please select a country)</option>
                            <option value="AF">Afghanistan</option>
                            <option value="AL">Albania</option>
                            <option value="DZ">Algeria</option>
                            <option value="AS">American Samoa</option>
                            <option value="AD">Andorra</option>
                            <option value="AO">Angola</option>
                            <option value="AI">Anguilla</option>
                            <option value="AQ">Antarctica</option>
                            <option value="AG">Antigua and Barbuda</option>
                            <option value="AR">Argentina</option>
                            <option value="AM">Armenia</option>
                            <option value="AW">Aruba</option>
                            <option value="AU">Australia</option>
                            <option value="AT">Austria</option>
                            <option value="AZ">Azerbaijan</option>
                            <option value="BS">Bahamas</option>
                            <option value="BH">Bahrain</option>
                            <option value="BD">Bangladesh</option>
                            <option value="BB">Barbados</option>
                            <option value="BY">Belarus</option>
                            <option value="BE">Belgium</option>
                            <option value="BZ">Belize</option>
                            <option value="BJ">Benin</option>
                            <option value="BM">Bermuda</option>
                            <option value="BT">Bhutan</option>
                            <option value="BO">Bolivia</option>
                            <option value="BA">Bosnia and Herzegowina</option>
                            <option value="BW">Botswana</option>
                            <option value="BV">Bouvet Island</option>
                            <option value="BR">Brazil</option>
                            <option value="IO">British Indian Ocean Territory</option>
                            <option value="BN">Brunei Darussalam</option>
                            <option value="BG">Bulgaria</option>
                            <option value="BF">Burkina Faso</option>
                            <option value="BI">Burundi</option>
                            <option value="KH">Cambodia</option>
                            <option value="CM">Cameroon</option>
                            <option value="CA">Canada</option>
                            <option value="CV">Cape Verde</option>
                            <option value="KY">Cayman Islands</option>
                            <option value="CF">Central African Republic</option>
                            <option value="TD">Chad</option>
                            <option value="CL">Chile</option>
                            <option value="CN">China</option>
                            <option value="CX">Christmas Island</option>
                            <option value="CC">Cocos (Keeling) Islands</option>
                            <option value="CO">Colombia</option>
                            <option value="KM">Comoros</option>
                            <option value="CG">Congo</option>
                            <option value="CD">Congo, the Democratic Republic of the</option>
                            <option value="CK">Cook Islands</option>
                            <option value="CR">Costa Rica</option>
                            <option value="CI">Cote d'Ivoire</option>
                            <option value="HR">Croatia (Hrvatska)</option>
                            <option value="CU">Cuba</option>
                            <option value="CY">Cyprus</option>
                            <option value="CZ">Czech Republic</option>
                            <option value="DK">Denmark</option>
                            <option value="DJ">Djibouti</option>
                            <option value="DM">Dominica</option>
                            <option value="DO">Dominican Republic</option>
                            <option value="TP">East Timor</option>
                            <option value="EC">Ecuador</option>
                            <option value="EG">Egypt</option>
                            <option value="SV">El Salvador</option>
                            <option value="GQ">Equatorial Guinea</option>
                            <option value="ER">Eritrea</option>
                            <option value="EE">Estonia</option>
                            <option value="ET">Ethiopia</option>
                            <option value="FK">Falkland Islands (Malvinas)</option>
                            <option value="FO">Faroe Islands</option>
                            <option value="FJ">Fiji</option>
                            <option value="FI">Finland</option>
                            <option value="FR">France</option>
                            <option value="FX">France, Metropolitan</option>
                            <option value="GF">French Guiana</option>
                            <option value="PF">French Polynesia</option>
                            <option value="TF">French Southern Territories</option>
                            <option value="GA">Gabon</option>
                            <option value="GM">Gambia</option>
                            <option value="GE">Georgia</option>
                            <option value="DE">Germany</option>
                            <option value="GH">Ghana</option>
                            <option value="GI">Gibraltar</option>
                            <option value="GR">Greece</option>
                            <option value="GL">Greenland</option>
                            <option value="GD">Grenada</option>
                            <option value="GP">Guadeloupe</option>
                            <option value="GU">Guam</option>
                            <option value="GT">Guatemala</option>
                            <option value="GN">Guinea</option>
                            <option value="GW">Guinea-Bissau</option>
                            <option value="GY">Guyana</option>
                            <option value="HT">Haiti</option>
                            <option value="HM">Heard and Mc Donald Islands</option>
                            <option value="VA">Holy See (Vatican City State)</option>
                            <option value="HN">Honduras</option>
                            <option value="HK">Hong Kong</option>
                            <option value="HU">Hungary</option>
                            <option value="IS">Iceland</option>
                            <option value="IN">India</option>
                            <option value="ID">Indonesia</option>
                            <option value="IR">Iran (Islamic Republic of)</option>
                            <option value="IQ">Iraq</option>
                            <option value="IE">Ireland</option>
                            <option value="IL">Israel</option>
                            <option value="IT">Italy</option>
                            <option value="JM">Jamaica</option>
                            <option value="JP">Japan</option>
                            <option value="JO">Jordan</option>
                            <option value="KZ">Kazakhstan</option>
                            <option value="KE">Kenya</option>
                            <option value="KI">Kiribati</option>
                            <option value="KP">Korea, Democratic People's Republic of</option>
                            <option value="KR">Korea, Republic of</option>
                            <option value="KW">Kuwait</option>
                            <option value="KG">Kyrgyzstan</option>
                            <option value="LA">Lao People's Democratic Republic</option>
                            <option value="LV">Latvia</option>
                            <option value="LB">Lebanon</option>
                            <option value="LS">Lesotho</option>
                            <option value="LR">Liberia</option>
                            <option value="LY">Libyan Arab Jamahiriya</option>
                            <option value="LI">Liechtenstein</option>
                            <option value="LT">Lithuania</option>
                            <option value="LU">Luxembourg</option>
                            <option value="MO">Macau</option>
                            <option value="MK">Macedonia, The Former Yugoslav Republic of</option>
                            <option value="MG">Madagascar</option>
                            <option value="MW">Malawi</option>
                            <option value="MY">Malaysia</option>
                            <option value="MV">Maldives</option>
                            <option value="ML">Mali</option>
                            <option value="MT">Malta</option>
                            <option value="MH">Marshall Islands</option>
                            <option value="MQ">Martinique</option>
                            <option value="MR">Mauritania</option>
                            <option value="MU">Mauritius</option>
                            <option value="YT">Mayotte</option>
                            <option value="MX">Mexico</option>
                            <option value="FM">Micronesia, Federated States of</option>
                            <option value="MD">Moldova, Republic of</option>
                            <option value="MC">Monaco</option>
                            <option value="MN">Mongolia</option>
                            <option value="MS">Montserrat</option>
                            <option value="MA">Morocco</option>
                            <option value="MZ">Mozambique</option>
                            <option value="MM">Myanmar</option>
                            <option value="NA">Namibia</option>
                            <option value="NR">Nauru</option>
                            <option value="NP">Nepal</option>
                            <option value="NL">Netherlands</option>
                            <option value="AN">Netherlands Antilles</option>
                            <option value="NC">New Caledonia</option>
                            <option value="NZ">New Zealand</option>
                            <option value="NI">Nicaragua</option>
                            <option value="NE">Niger</option>
                            <option value="NG">Nigeria</option>
                            <option value="NU">Niue</option>
                            <option value="NF">Norfolk Island</option>
                            <option value="MP">Northern Mariana Islands</option>
                            <option value="NO">Norway</option>
                            <option value="OM">Oman</option>
                            <option value="PK">Pakistan</option>
                            <option value="PW">Palau</option>
                            <option value="PA">Panama</option>
                            <option value="PG">Papua New Guinea</option>
                            <option value="PY">Paraguay</option>
                            <option value="PE">Peru</option>
                            <option value="PH">Philippines</option>
                            <option value="PN">Pitcairn</option>
                            <option value="PL">Poland</option>
                            <option value="PT">Portugal</option>
                            <option value="PR">Puerto Rico</option>
                            <option value="QA">Qatar</option>
                            <option value="RE">Reunion</option>
                            <option value="RO">Romania</option>
                            <option value="RU">Russian Federation</option>
                            <option value="RW">Rwanda</option>
                            <option value="KN">Saint Kitts and Nevis</option>
                            <option value="LC">Saint LUCIA</option>
                            <option value="VC">Saint Vincent and the Grenadines</option>
                            <option value="WS">Samoa</option>
                            <option value="SM">San Marino</option>
                            <option value="ST">Sao Tome and Principe</option>
                            <option value="SA">Saudi Arabia</option>
                            <option value="SN">Senegal</option>
                            <option value="SC">Seychelles</option>
                            <option value="SL">Sierra Leone</option>
                            <option value="SG">Singapore</option>
                            <option value="SK">Slovakia (Slovak Republic)</option>
                            <option value="SI">Slovenia</option>
                            <option value="SB">Solomon Islands</option>
                            <option value="SO">Somalia</option>
                            <option value="ZA">South Africa</option>
                            <option value="GS">South Georgia and the South Sandwich Islands</option>
                            <option value="ES">Spain</option>
                            <option value="LK">Sri Lanka</option>
                            <option value="SH">St. Helena</option>
                            <option value="PM">St. Pierre and Miquelon</option>
                            <option value="SD">Sudan</option>
                            <option value="SR">Suriname</option>
                            <option value="SJ">Svalbard and Jan Mayen Islands</option>
                            <option value="SZ">Swaziland</option>
                            <option value="SE">Sweden</option>
                            <option value="CH">Switzerland</option>
                            <option value="SY">Syrian Arab Republic</option>
                            <option value="TW">Taiwan, Province of China</option>
                            <option value="TJ">Tajikistan</option>
                            <option value="TZ">Tanzania, United Republic of</option>
                            <option value="TH">Thailand</option>
                            <option value="TG">Togo</option>
                            <option value="TK">Tokelau</option>
                            <option value="TO">Tonga</option>
                            <option value="TT">Trinidad and Tobago</option>
                            <option value="TN">Tunisia</option>
                            <option value="TR">Turkey</option>
                            <option value="TM">Turkmenistan</option>
                            <option value="TC">Turks and Caicos Islands</option>
                            <option value="TV">Tuvalu</option>
                            <option value="UG">Uganda</option>
                            <option value="UA">Ukraine</option>
                            <option value="AE">United Arab Emirates</option>
                            <option value="GB">United Kingdom</option>
                            <option value="US">United States</option>
                            <option value="UM">United States Minor Outlying Islands</option>
                            <option value="UY">Uruguay</option>
                            <option value="UZ">Uzbekistan</option>
                            <option value="VU">Vanuatu</option>
                            <option value="VE">Venezuela</option>
                            <option value="VN">Viet Nam</option>
                            <option value="VG">Virgin Islands (British)</option>
                            <option value="VI">Virgin Islands (U.S.)</option>
                            <option value="WF">Wallis and Futuna Islands</option>
                            <option value="EH">Western Sahara</option>
                            <option value="YE">Yemen</option>
                            <option value="YU">Yugoslavia</option>
                            <option value="ZM">Zambia</option>
                            <option value="ZW">Zimbabwe</option>
                        </select>
                    </div>
                </div>
        
        </form>
    </div>

                      
                    
                </div>
                <div class="bhoechie-tab-content center">
                    <center>
                    
                <div class="col-md-5">
                <div class="form-area">  
                    <form role="form">
                     <br style="clear:both">
                    
                    <div class="form-group">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="email" name="email" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Mobile Number" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required>
                    </div>
                    <div class="form-group">
                    <textarea class="form-control" type="textarea" id="message" placeholder="Message" maxlength="140" rows="7"></textarea>
                        <span class="help-block"><p id="characterLeft" class="help-block "></p></span>                    
                    </div>
            
                <input type="button" name="" class="sbtn" value="Submit">
                </form>
                </div>
                </div>

                      
                      
                      
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