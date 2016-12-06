 <?php
session_start();
?>
<?php
 //include 'config.php';
 $hostname = "localhost";
 $username = "x14715335";
 $password = "";
 $dbname = "SocialLink";
 
$user = $_POST['username'];
$pass = $_POST['password'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];

$db = new mysqli($hostname, $username, $password, $dbname);
if (mysqli_connect_errno()) {
	echo 'Error: Could not connect to database.  Please try again later.';
	exit;
}
  
$q1 = "SELECT userID FROM userinfo where username='$user'";
$result1 = $db->query($q1);
if(mysqli_fetch_row($result1)){
  echo "This username is already taken";
}

$q3 = "SELECT userID FROM userinfo where email='$email'";
$result2 = $db->query($q3);
if(mysqli_fetch_row($result2)){
  echo "This email is already taken";
}
else{
  $q2 = "INSERT INTO userinfo (userID, username, password, fname, lname, email, dob, gender) VALUES ('','$user', MD5('$pass'),'$fname','$lname','$email','$dob','$gender')";
  //$result2 = $db->query($q2);
  //$rt = mysqli_query($db,$q2); 
  //$q2 = "INSERT INTO userinfo (username, password, fname, lname, email, dob, gender) VALUES ('$user', '$pass','$fname,'$lname','$email','$dob','$gender')";
  if ($db->query($q2) === TRUE) {
    $sel_user = "SELECT * FROM userinfo WHERE password = MD5('$pass') AND username = '$user'";

$run_user = mysqli_query($db, $sel_user);

$check_user = mysqli_num_rows($run_user);

if($check_user>0){
$retr = "select * from userinfo where username = '$user'";
$query = mysqli_query($db, $retr);
while($rs = mysqli_fetch_assoc($query)){
     $UserID= $rs['userID'];
    $username= $rs['username'];
    $fname= $rs['fname'];
    $lname= $rs['lname'];
    $email= $rs['email'];
    $dob = $rs['dob'];
    $gender= $rs['gender'];
}
$_SESSION["userID"] = $UserID;
$_SESSION["user"] = $username;
$_SESSION["fname"] = $fname;
$_SESSION["lname"] = $lname;
$_SESSION["email"] = $email;
$_SESSION["dob"] = $dob;
$_SESSION["gender"] = $gender;
    echo "<script>window.open('main.php','_self')</script>";
    
} else {
    echo "Error: " . $q2 . "<br>" . $db->error;
}
	}

}

//$conn->close();
?>