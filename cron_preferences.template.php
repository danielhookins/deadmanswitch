<?php 
// CONFIG
$username = "";
$password = "";
$hostname = "";

$transport = Swift_SmtpTransport::newInstance('smtp.server', 25)
  ->setUsername('')
  ->setPassword('')
  ;

$returnPath = ""; //for bounced emails
$fromEmail = "";