<?php
// DEAD MAN SWITCH: CRON SCRIPT
// Point your a cron job to this file.

// CONFIG
$username = "root";
$password = "";
$hostname = "localhost";

$mysqli = new mysqli($hostname, $username, $password, "deadmanswitch");

$users = array();

$now = new DateTime();


// CONNECT TO DB OR EXIT
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    exit();
}

// CHECK USERS WHO FAILED TO CHECK IN > 7 days ago

$userSelectQuery    = "SELECT id, last_active FROM users"; 

if ($userResult = $mysqli->query($userSelectQuery)) {

    /* fetch associative array */
    while ($row = $userResult->fetch_assoc()) {
        $last_active = new DateTime(Date($row["last_active"]));    	
    	$interval = $last_active->diff($now);

    	// TODO: change back to 7 after debugging
        if($interval->days >= 0) {
    		// ADD USER ID TO ARRAY
    		$users[] = $row["id"];
    	}

    }

    /* free result set */
    $userResult->free();
}

// ITERATE THROUGH VALID USERS
foreach($users as $user) {
	
    $switchSelectQuery  = "SELECT id, user_id, to_email, text, status FROM switches WHERE user_id = ".$user." AND status =1";

    if ($switchResult = $mysqli->query($switchSelectQuery)) {

    /* fetch associative array */
    while ($row = $switchResult->fetch_assoc()) {
       
        print_r($row);
        // TODO: Send Email

        // TODO: Change status to 3 ('Message Sent')

    }

    /* free result set */
    $switchResult->free();

    }

}

/* close connection */
$mysqli->close();
?>
