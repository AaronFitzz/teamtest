http://stackoverflow.com/questions/9676084/how-do-i-return-a-proper-success-error-message-for-jquery-ajax-using-php
<?php
session_start();

    
include 'config.php';


$seshID = $_SESSION['userID'];
$oldpass = $_POST['oldpass'];
$newpass = $_POST['newpass'];
$newpass2 = $_POST['newpass2'];

$db = new mysqli("$hostname", "$username", "$password", "$dbname");
if (mysqli_connect_errno()) {
	echo 'Error: Could not connect to database.  Please try again later.';
	exit;
}
$sel_user = "SELECT * FROM userinfo WHERE userID = '$seshID' AND password = MD5('$oldpass')";

$run2_user = mysqli_query($db, $sel_user);

$check_user = mysqli_num_rows($run2_user);

if($check_user>0 && $newpass == $newpass2){
$up_user = "UPDATE userinfo 
            SET password = MD5('$newpass')
            WHERE userID='$seshID'";

if($run_user = mysqli_query($db, $up_user)){
    $response_array['status'] = 'success';
}
else{
  $response_array['status'] = 'error';  
}
}
else{
  $response_array['status'] = 'error';  
}


?>