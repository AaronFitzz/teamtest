<?php
session_start();

include 'config.php';


$seshID = $_SESSION['userID'];
$pref1 = $_POST['pref1'];
$pref2 = $_POST['pref2'];
$pref3 = $_POST['pref3'];
$pref4 = $_POST['pref4'];
$pref5 = $_POST['pref5'];

$db = new mysqli("$hostname", "$username", "$password", "$dbname");
if (mysqli_connect_errno()) {
	echo 'Error: Could not connect to database.  Please try again later.';
	exit;
}
$up_user = "UPDATE userinfo 
            SET atmos = '$pref1', music = '$pref2', distance='$pref3', genratio='$pref4', age='$pref5'
            WHERE userID='$seshID'";

if($run_user = mysqli_query($db, $up_user)){
    echo "Thanks";
    $sel_user = "SELECT * FROM userinfo WHERE userID = '$seshID'";

$run2_user = mysqli_query($db, $sel_user);

$check_user = mysqli_num_rows($run2_user);

if($check_user>0){
$retr = "select * from userinfo where userID = '$seshID'";
$query = mysqli_query($db, $retr);
while($rs = mysqli_fetch_assoc($query)){
     $atmos= $rs['atmos'];
    $music= $rs['music'];
    $distance= $rs['distance'];
    $genratio= $rs['genratio'];
    $age= $rs['age'];
}
$_SESSION["atmos"] = $atmos;
$_SESSION["music"] = $music;
$_SESSION["distance"] = $distance;
$_SESSION["genratio"] = $genratio;
$_SESSION["age"] = $age;
echo "<script>window.open('../account.php','_self')</script>"; 
}
}
else{
  echo "Problems";
}

?>