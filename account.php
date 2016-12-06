 <?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    	<script type="text/javascript" src="js/load.js"></script>
    	
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Shop Homepage - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/account-homepage.css" rel="stylesheet">
	<link href="css/grayscale.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	<!-- Fonts -->
    <link href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    
   
	<!--how to create login/signup slider: http://jsfiddle.net/hungerpain/eK8X5/7/-->
	
	<!-- google map api code-->
	
</head>

<body id="acntbg">

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a id ="colbl"  href="#"><h2>SocialLink</h2></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a id ="colbl" href="#page-top"></a>
                    </li>
					<li class="page-scroll">
                        <a id ="colbl" id ="colbl" href="index.html">Home</a>
                    </li>
                    <li class="page-scroll">
                        <a id ="colbl"  href="php/destroySession.php">Log Out</a>
                    </li>
                    <li class="page-scroll">
                        <a id ="colbl" href="#download">Account</a>
                    </li>
                    <li class="page-scroll">
                        <a id ="colbl" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <!-- Page Content -->
    <div class="container">
        <div class="col-md-5 col-md-offset-1">
        <div class="download-section">
        <div class="row">
                    	<h2>Manage Account</h2>
                    	<div id="successMsg">
                            <h3 style="text-align:center;">Account Updated</h3>
                        </div>
                        <form class="theForm" method='post' action='php/accountdb.php' style="color: white;">
                            <p id="idtag" style="height:8px;">Username:</p>
                            <input name="username" value="<?php echo $_SESSION['user'];?>"required="required">
                            <p id="idtag"  style="height:8px;">First Name:</p>
                            <input name="fname" value="<?php echo $_SESSION['fname'];?>"required="required">
                            <p id="idtag" style="height:8px;">Last Name:</p>
                            <input name="lname" value="<?php echo $_SESSION['lname'];?>"required="required">
                            <p id="idtag" style="height:8px;">Email:</p>
                            <input name="email" type="email"value="<?php echo $_SESSION['email'];?>"required="required">
                            <p id="idtag" style="height:8px;">D.O.B</p></p>
                            <input name="dob" type="date" min="01/01/1990" max="01/01/2010"value="<?php echo $_SESSION['dob'];?>">
                            <p id="idtag" style="height:8px;">Gender</p>
                            <select class="acnttarea" name="gender" style="padding:5px; font-size:150%; color:white; background: rgba(0,0,0,0.2); width:100%;">
                                <option selected="selected" style="font-family: 'Lucida', 'Serif'; background: rgba(0,0,0,0.4); color:black;"><?php if(isset($_SESSION['gender']) && empty($_SESSION['gender'])) {echo 'Select Gender';}else echo $_SESSION['gender'];?></option>
                                
                              <option style="color:black;" value="male">Male</option>
                              <option style="color:black;" value="female">Female</option>
                              <option style="color:black;" value="other">Other</option>
                              <option style="color:black;" value="prefer not to disclose">Prefer not to disclose</option>
                            </select>
                            <button type="submit"  class="btn btn-primary btn-block btn-large">Submit Changes</button>
                        </form>
 
 
                        <!--
                        //this is date picker code
                        <!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>jQuery UI Datepicker - Default functionality</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>
</head>
<body>
 
<p>Date: <input type="text" id="datepicker"></p>
 
 
</body>
</html>
                        -->
                </div>
        </div>
        </div>
        <div class="col-md-5 col-md-offset-1">
        <div class="download-section">
        <div class="row">
                    	<div id="successMsg">
                            <h3 style="text-align:center;">Account Updated</h3>
                        </div>
                        <br /><br /><br />
                        <form class="theForm" method='post' onsubmit="return showSuccessMsg();" action='php/preferences.php' style="color: white;">
                            <p id="idtag" style="height:8px;">Preferences:</p>
                            <h6 class="smallSp">atmosphere</h6>
                            <select required class="acnttarea" name="pref1" style="padding:5px; font-size:150%; color:white; background: rgba(0,0,0,0.2); width:100%;">
                               <option value=""selected="selected" disabled="disabled" style="color:black;"><?php if(empty($_SESSION['atmos'])) {echo 'Choose your preferred atmosphere';}else echo $_SESSION['atmos'];?></option>
                              <option style="color:black;" value="quiet">Quiet</option>
                              <option style="color:black;" value="average">Average</option>
                              <option style="color:black;" value="packed">Jam Packed!</option>
                              <option style="color:black;" value="any">Anywhere</option>
                            </select>
                            <h6 class="smallSp">music</h6>
                            <select required class="acnttarea" name="pref2" style="padding:5px; font-size:150%; color:white; background: rgba(0,0,0,0.2); width:100%;">
                                <option value=""style="color:black;"><?php if(empty($_SESSION['music'])) {echo 'Choose your preferred music style';}else echo $_SESSION['music'];?></option>
                              <option style="color:black;" value="pop">Pop</option>
                              <option style="color:black;" value="hip-hop">Hip-Hop</option>
                              <option style="color:black;" value="rock">Rock</option>
                              <option style="color:black;" value="dance">Dance</option>
                              <option style="color:black;" value="any">I'll jam to whatever</option>
                            </select>
                            <h6 class="smallSp">travel</h6>
                            <select required class="acnttarea" name="pref3" style="padding:5px; font-size:150%; color:white; background: rgba(0,0,0,0.2); width:100%;">
                                <option value=""style="color:black;"><?php if(empty($_SESSION['distance'])) {echo 'How far are you willing to travel?';}else echo $_SESSION['distance'];?></option>
                              
                              <option style="color:black;" value="short">1km</option>
                              <option style="color:black;" value="medium">5km</option>
                              <option style="color:black;" value="far">10km</option>
                              <option style="color:black;" value="any">Wherever the party is at!</option>
                            </select>
                            <h6 class="smallSp">people</h6>
                            <select required class="acnttarea" name="pref4" style="padding:5px; font-size:150%; color:white; background: rgba(0,0,0,0.2); width:100%;">
                                <option value=""style="color:black;"><?php if(empty($_SESSION['genratio'])) {echo 'Who do want to be at the events?';}else echo $_SESSION['genratio'];?></option>
                              <option style="color:black;" value="girls">More girls</option>
                              <option style="color:black;" value="guys">More guys</option>
                              <option style="color:black;" value="both">A good mix</option>
                              <option style="color:black;" value="any">I don't care</option>
                            </select>
                            <h6 class="smallSp">ages</h6>
                            <select required class="acnttarea" name="pref5" style="padding:5px; font-size:150%; color:white; background: rgba(0,0,0,0.2); width:100%;">
                                 <option value="" style="color:black;"><?php if(empty($_SESSION['age'])) {echo 'Age group at events?';}else echo $_SESSION['age'];?></option>
                                  <option style="color:black;" value="18-25">18-25</option>
                                  <option style="color:black;" value="25-35">25-35</option>
                                  <option style="color:black;" value="35+">35+</option>
                                  <option style="color:black;" value="any">Not bothered</option>
                            </select>
                            <button type="submit"  class="btn btn-primary btn-block btn-large">Submit Preferences</button>
                            <br />
                        </form>
                        <form class="theForm" method='post' action='php/passwordForm.php' style="color: white;">
                            <h3>Change Password</h3>
                            <input  name="oldpass" type="password" placeholder="Old Password"required="required">
                            <input id="password" name="newpass" type="password" placeholder="New password"required="required">
                            <input id="password2" name="newpass2" type="password" placeholder="Confirm new password"required="required">
                            <div id="divPasswordsMatch"></div>
                            <button type="submit" id="register" disabled="disabled" class="btn btn-primary btn-block btn-large">Change Password</button>
                        </form>
 
 
                        <!--
                        //this is date picker code
                        <!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>jQuery UI Datepicker - Default functionality</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>
</head>
<body>
 
<p>Date: <input type="text" id="datepicker"></p>
 
 
</body>
</html>
                        -->
                </div>
        </div>
        </div>
            </div>

       
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    
    <script src="js/grayscale.js"></script>
    
    <!-- Core JavaScript Files -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    
    
    
    
    
   

</body>

</html>
