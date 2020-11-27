<?php
  $name = $_post['name'];
  $visitor_email = $_post['email'];
  $message = $_post['message'];

  $email_form = 'veliana10@yahoo.com';

  $email_subject = "New Form Submission":

  $email_body = "User Name: $name.\n".
                  "User Email: $visitor_email.\n".
                  "User message: $massage.\n":
$to = "veliana10@yahoo.com";

$headers = "Form: $email_form \r\n";

$headers .= "Reply-to: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header ("location: contact.html")

?>
