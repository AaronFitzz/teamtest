<?php
session_start();

include 'config.php';

$user = $_POST['username'];
$pass = $_POST['password'];

$db = new mysqli("$hostname", "$username", "$password", "$dbname");
if (mysqli_connect_errno()) {
	echo 'Error: Could not connect to database.  Please try again later.';
	exit;
}
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
echo "<script>window.open('../main.php','_self')</script>";
}

else{
  echo "Problems";
}

?>