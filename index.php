 <?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
<script>
	function ProcessLogin(){
	alert("The ProcessLogin function has been created");
	}
</script>
<script>
var x = document.getElementById("demo");
function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } else {
        x.innerHTML = "Geolocation is not supported by this browser.";
    }
}
function showPosition(position) {
    x.innerHTML = "Latitude: " + position.coords.latitude + 
    "<br>Longitude: " + position.coords.longitude; 
}
$(document).ready(function() {
   $('#selectform').css('color','gray');
   $('#selectform').change(function() {
      var current = $('#selectform').val();
      if (current != 'null') {
          $('#selectform').css('color','black');
      } else {
          $('#selectform').css('color','white');
      }
   }); 
});

</script>

 
<script>
function validate(){
    
if (grecaptcha.getResponse() == ""){
    alert("Please do the Capatcha");
    return false;
} else {
    alert("Thank you for your feedback");
    
}

}
</script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Grayscale - Free One Page Theme for Bootstrap 3</title>

    <!-- Bootstrap Core CSS -->
    <link href="https://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" type="text/css">

    <!-- Fonts -->
    <link href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

    <!-- Custom Theme CSS -->
    <link href="css/grayscale.css" rel="stylesheet">
    
    <!---google api code--->
  

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">

    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <!--<a class="navbar-brand" href="#page-top">
                    <i class="fa fa-play-circle"></i>  <span class="light">Start</span> Bootstrap
                </a>-->
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
					<li class="page-scroll">
                        <a href="#top">Home</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#login">Log in/Sign up</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
            <div id="lsform"></div>
    </nav>


    <section class="intro" id="top">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h1 class="brand-heading">SocialLink</h1>
                        <p class="intro-text">The one place to find out what's on, tailored to you.</p>



                        <div class="page-scroll">
                            <a style="padding-bottom:0%;"class="btn btn-circle" href="main.php">
                                <p>Visit Site</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="login" class="content-section text-center">
        <div class="download-section">
        <div class="row">
            <div class="col-lg-4 col-md-offset-2">
                    <div class="login">
                    	<h1>Log in</h1>
                        <form method='post' action='php/login.php' style="background: rgba(0,0,0,0.4);"> 
                        	<input type="text" name="username" placeholder="Username" required="required" />
                            <input type="password" name="password" placeholder="Password" required="required" />
                            <button type="submit" class="btn btn-primary btn-block btn-large">Log in</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="register">
                    	<h1>Register</h1>
                        <form id="theForm"method='post' action='php/register1.php' style="background: rgba(0,0,0,0.4); color: white;">
                            <input type="text" name="fname" placeholder="First Name" required="required" />
                            <input type="text" name="lname" placeholder="Last Name" required="required" />
                            <input type="text" name="email" placeholder="Email" required="required" /> 
                            <input name="dob" type="date" min="01/01/1990" max="01/01/2010" required="required">
                            <select name="gender" required style="padding:5px; font-size:150%; color:white; background: rgba(0,0,0,0.2); width:100%;">
                                <option value="" selected="selected" style="font-family: 'Lucida', 'Serif'; background: rgba(0,0,0,0.4); color:black;">Select gender</option>
                                <option style="color:black;" value="male">Male</option>
                              <option style="color:black;" value="female">Female</option>
                              <option style="color:black;" value="other">Other</option>
                              <option style="color:black;" value="prefer not to disclose">Prefer not to disclose</option>
                            </select>
                        	<input type="text" name="username" placeholder="Username" required="required" />
                            <input type="password" name="password" placeholder="Password" required="required" />
                            <button type="submit" class="btn btn-primary btn-block btn-large">Register</button>
                            <div id="formError"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

     <section align="center" id="contact" class="container content-section text-center">
        <div class="row">
            <divclass="col-lg-10">
                <h2>Contact SocialLink</h2>
              
                  <form role="form" method="post" action="php/contact.php" > 
                    
                	<input type="text" required="required"  id="name" name="name" placeholder="First & Last Name" value="">
                    <input type="email"  required="required" id="email" name="email" placeholder="example@domain.com" value="">
                    <textarea required="required" rows="4" name="message"  placeholder="Write your feedback here"></textarea>
                        	
                   <p><div align="center" class="g-recaptcha" data-sitekey="6LdBBAwUAAAAAAFaH1bLn_mo1Nckr_pR8VdwuT6o"></div></p>
                    </br>
                    
                    <input id="submit" onclick='return validate()' name="submit" type="submit" value="Send"   class="btn btn-primary" >
                    
                
                   </form> 
            
             <div class="col-lg-6 col-md-offset-3">
                  
                <p>Feel free to get in touch using the methods below. <div class="fb-login-button" data-max-rows="1" data-size="medium" data-show-faces="false" data-auto-logout-link="false"></div>Your feedback and suggestions will help us better and improve our service!</p>
                <ul class="list-inline banner-social-buttons">
                    <li><a href="https://twitter.com/SBootstrap" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
                    </li>
                    <li><a href="https://github.com/IronSummitMedia/startbootstrap" class="btn btn-default btn-lg"><i class="fa fa-github fa-fw"></i> <span class="network-name">Github</span></a>
                    </li>
                    <li><a href="https://plus.google.com/+Startbootstrap/posts" class="btn btn-default btn-lg"><i class="fa fa-google-plus fa-fw"></i> <span class="network-name">Google+</span></a>
                    </li>
                </ul>
                 
            </div>
        </div>
    </section>
    
    

    <!-- Core JavaScript Files -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Google Maps API Key - You will need to use your own API key to use the map feature -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/grayscale.js"></script>
    <script src="js/directions-map.js"></script>
    
    
     <!--Google reCAPTCHA-->
 <script src="https://www.google.com/recaptcha/api.js" ></script>
    
    
    
    
 
     
    
</div>
</body>

</html>
