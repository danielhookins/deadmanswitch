<?php
//  DEAD MAN SWITCH: CRON SCRIPT
 
// Install Instructions
// 1. Update preferences file. 
//  (save as: cron_preferences.php)
// 2. Point your a cron job to this file.

// CONFIG
require_once 'vendor/swiftmailer/swiftmailer/lib/swift_required.php';
require_once 'cron_preferences.php';
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

        if($interval->days >= 7) {
    		// ADD USER ID TO ARRAY
    		$users[] = $row["id"];
    	}

    }

    /* free result set */
    $userResult->free();
}

// ITERATE THROUGH VALID USERS
foreach($users as $user) {
	
    $switchSelectQuery  = "SELECT id, user_id, to_email, title, text, status FROM switches WHERE user_id = ".$user." AND status =1";

    if ($switchResult = $mysqli->query($switchSelectQuery)) {

    /* fetch associative array */
    while ($row = $switchResult->fetch_assoc()) {
       
        $mailer = Swift_Mailer::newInstance($transport);

        $to_email = $row['to_email'];
        $text = $row['text'];

        //SEND EMAIL
        // Create the message using Swift Mailer
        $message = Swift_Message::newInstance()
          ->setSubject('A fail-safe message to you has been activated.')
          ->setFrom(array($fromEmail => 'DMS Failsafe'))
          ->setTo(array($to_email))
          ->setBody(
        '<html>' .
        ' <head><title>DMS: Fail-Safe Message Activated</title></head>' .
        ' <body>' .
        '   <p><strong>A fail-safe message to you has been activated.</strong></p>' .
        '   <p>' . $text . '</p' .
        '   <p>---</p><br /> ' .
        '   <p>This is a fail-safe messenger service by <a href="http://deadmanswitch.hoodev.com">HooDev: Dead Man Switch</a></p>' .
        ' </body>' .
        '</html>',
        'text/html'
        )
          ->setReturnPath($returnPath);

        // Send the message
        $result = $mailer->send($message);

        // Set switch status to 3 ('Message Sent')
        $updateStatusQuery = "UPDATE switches SET status=3 WHERE id=" . $row['id'];

        if ($switchStatusUpdate = $mysqli->query($updateStatusQuery)) {
            echo 'Switch Status updated for: ' . $row['title'];
        } else {
            echo 'Error: Status not updated for: ' . $row['title'];
        }
    }

    /* free result set */
    $switchResult->free();
    }

}

/* close connection */
$mysqli->close();