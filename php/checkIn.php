 <?php
session_start();
?>
<?php
  
  include 'config.php';

$db = new mysqli("$hostname", "$username", "$password", "$dbname");
if (mysqli_connect_errno()) {
	echo 'Error: Could not connect to database.  Please try again later.';
	exit;
}
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
?>