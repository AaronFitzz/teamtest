 <?php
session_start();
?>
<?php

 //include 'config.php';
 $hostname = "localhost";
 $username = "x14715335";
 $password = "";
 $dbname = "SocialLink";
 
$seshID = $_SESSION['userID'];
$event = $_POST['eventID'];

$db = new mysqli($hostname, $username, $password, $dbname);
if (mysqli_connect_errno()) {
	echo 'Error: Could not connect to database.  Please try again later.';
	exit;
}

$q1 = "SELECT userID FROM SocialLink.check where userID='$seshID'";
$result = $db->query($q1);

if(mysqli_fetch_row($result)){
  echo "Already checked in";
}
else{
  $q2 = "INSERT INTO SocialLink.check (checkID, eventID, userID) VALUES ('','$event','$seshID')";
  //$result2 = $db->query($q2);
  //$rt = mysqli_query($db,$q2); 
  //$q2 = "INSERT INTO userinfo (username, password, fname, lname, email, dob, gender) VALUES ('$user', '$pass','$fname,'$lname','$email','$dob','$gender')";
  if ($db->query($q2) === TRUE) {
    $query = "SELECT COUNT(*) FROM SocialLink.check WHERE eventID = 1";
 $result = mysqli_query($db, $query); 
        if (!$result) {
    echo 'Could not run query: ' . mysql_error();
   exit;
}



/* numeric array */
$row = mysqli_fetch_array($result, MYSQLI_NUM);
$amount = array($row[0]);
echo str_replace(array('[', ']','"'), '', htmlspecialchars(json_encode($amount), ENT_NOQUOTES));
    
} else {
    echo "Error: " . $q2 . "<br>" . $db->error;
}
	}



//$conn->close();
?>