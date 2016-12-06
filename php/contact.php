<?php
    $hostname = "localhost";
    $username = "x14715335";
    $password = "";
    $dbname = "SocialLink";

    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

	

    	$db = new mysqli($hostname, $username, $password, $dbname);
    if (mysqli_connect_errno()) {
    	echo 'Error: Could not connect to database.  Please try again later.';
    	exit;
    } 
    
    
    
    
    else{
      $q2 = "INSERT INTO contactF (con_ID, name, email, message) VALUES ('','$name', '$email','$message')";
      
      if ($db->query($q2) === TRUE) {
         echo "<script>window.open('../lee.php','_self')</script>";
                }
      } 

?>