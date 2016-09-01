<?php


function DBConnection($db_hostname, $db_database, $db_username, $db_password ) {
    
    $connection = new mysqli($db_hostname, $db_username, $db_password, $db_database);
	    if(mysqli_connect_errno()) {
		    printf("Connect failed: %s\n", mysqli_connect_error());
            exit();
	    } else {
           // printf("yay! I'm connected");
	    }  

        return $connection;
}
?>


