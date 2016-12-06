<?php
session_start();

include 'config.php';


$seshID = $_SESSION['userID'];
$user = $_POST['username'];
$email = $_POST['email'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];

$db = new mysqli("$hostname", "$username", "$password", "$dbname");
if (mysqli_connect_errno()) {
	echo 'Error: Could not connect to database.  Please try again later.';
	exit;
}
$up_user = "UPDATE userinfo 
            SET username = '$user', email = '$email', fname='$fname', lname='$lname', dob='$dob', gender='$gender'
            WHERE userID='$seshID'";
            

if($run_user = mysqli_query($db, $up_user)){
$sel_user = "SELECT * FROM userinfo WHERE userID = '$seshID'";

$run2_user = mysqli_query($db, $sel_user);

$check_user = mysqli_num_rows($run2_user);

if($check_user>0){
$retr = "select * from userinfo where userID = '$seshID'";
echo "<script>showSuccessMsg();</script>";
$query = mysqli_query($db, $retr);
while($rs = mysqli_fetch_assoc($query)){
     $newUser= $rs['userID'];
    $newusername= $rs['username'];
    $newfname= $rs['fname'];
    $newlname= $rs['lname'];
    $newemail= $rs['email'];
    $newdob = $rs['dob'];
    $newgender= $rs['gender'];
}
$_SESSION["userID"] = $newUser;
$_SESSION["user"] = $newusername;
$_SESSION["fname"] = $newfname;
$_SESSION["lname"] = $newlname;
$_SESSION["email"] = $newemail;
$_SESSION["dob"] = $newdob;
$_SESSION["gender"] = $newgender;
echo "<script>window.open('../account.php','_self')</script>"; 
}
}
else{
  echo "Problems";
}


?>