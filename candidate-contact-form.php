<?php

$emailReceiver = "a.lytvynenko@move-semantics.com";
$title = "Contact Request from Website";
$fname = $_POST["fname"];
$lname = $_POST["lname"];

$name = $fname;
$name .= " ";
$name .= $lname;

$email = $_POST["email"];

$headers   = array();
$headers[] = "MIME-Version: 1.0";
$headers[] = "Content-type: text/plain; charset=utf-8";

mail( $emailReceiver, $title,
"Contact information:\r\nName: $name\r\nEmail: $email",implode("\r\n",$headers) );

?>