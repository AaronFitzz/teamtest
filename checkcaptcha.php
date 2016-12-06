<?php

  if($_POST && "all required variables are present") {
  

    session_start();
    if($_POST['captcha'] != $_SESSION['digit']) die("Sorry, the CAPTCHA code entered was incorrect!");
    session_destroy();


  }





?>