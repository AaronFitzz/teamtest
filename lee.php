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
</script>

<!--reCaptcha-->
<!--<script type="text/javascript">
                    
  function checkForm(form)
        {
                    
         if(!form.captcha.value.match(/^\d{5}$/)) {
         alert('Please enter the CAPTCHA digits in the box provided');
         form.captcha.focus();
         return false;
        }
                    
                    
         return true;
     }
        
 </script>-->
 
 
 
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
                        <a href="#about"> Log in/Sign Up</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#about">About</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#download">Download</a>
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


    <section class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h1 class="brand-heading">SocialLink</h1>
                        <p class="intro-text">The one place to find out what's on, tailored to you.</p>



                        <div class="page-scroll">
                            <a href="#about" class="btn btn-circle">
                                <i class="fa fa-angle-double-down animated"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                
                <link href="css/style.css" rel="stylesheet">
                
            </div>
        </div>
    </section>

  

    <section id="about" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>About SocialLink</h2>
                <p>SocialLink connects you to fellow users going to events or venues based on your prefences. See what's on and how many people are there while also leaving your on mark by by checking in or leaving a review.</p>
                <p>Find what YOU want, fast, clear and with ease.</p>
            </div>
        </div>
    </section>

       <section id="download" class="content-section text-center">
        <div class="download-section">
            <div class="container">
                <div class="col-lg-6">
                    <div class="login">
                    	<h1>Log in</h1>
                        <form method='post' action='php/login.php'>
                        	<input type="text" name="username" placeholder="Username" required="required" />
                            <input type="password" name="password" placeholder="Password" required="required" />
                            <button type="submit" class="btn btn-primary btn-block btn-large">Log in</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="Register">
                    	<h1>Register</h1>
                        <form method='post' action='php/register1.php'>
                            <input type="text" name="fname" placeholder="First Name" required="required" />
                            <input type="text" name="lname" placeholder="Last Name" required="required" />
                            <input type="text" name="email" placeholder="Email" required="required" />
                            <input type="text" name="dob" placeholder="D.O.B" required="required" />
                            <input type="text" name="gender" placeholder="Gender" required="required" />
                        	<input type="text" name="username" placeholder="Username" required="required" />
                            <input type="password" name="password" placeholder="Password" required="required" />
                            <button type="submit" class="btn btn-primary btn-block btn-large">Register</button>
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
                   
                   
                  <!-- <form method="POST" action="form-handler" onsubmit="return checkForm(this);">


                    
                    <p><img src="/captcha.php" width="120" height="30" border="1" alt="CAPTCHA"></p>
                    <p><input type="text" size="6" maxlength="5" name="captcha" value=""><br>
                    <small>copy the digits from the image into this box</small></p>
                    
                    
                    
                    </form>-->
               
            
            
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
    
    </section>

   
    
    

    <!-- Core JavaScript Files -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Google Maps API Key - You will need to use your own API key to use the map feature -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/grayscale.js"></script>

 
     
    

</body>

     <!--Google reCAPTCHA-->
 <script src="https://www.google.com/recaptcha/api.js" ></script>

</html>
