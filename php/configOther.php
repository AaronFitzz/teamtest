<?php
/*
  This is your configuration file and should include the names of your database and the access
  credentials for gaining access to your database...
*/
    
    //Connect to the database
    $host = "127.0.0.1";
    $user = "root";                   
    $pass = "";                                  
    $db = "c9";                                  
    $port = 3306;                                
    
    $connection = mysqli_connect($host, $user, $pass, $db, $port)or die(mysql_error());



    //And now to perform a simple query to make sure it's working
    $query = "SELECT * FROM register";
    $result = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_assoc($result)) {
        echo "The ID is: " . $row['id'] . " and the Username is: " . $row['user'];
    }

?>
