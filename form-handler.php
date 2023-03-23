<?php
  $name = $_POST['name'];
  $postcode = $_POST['postcode'];
  $phone = $_POST['phone'];
  $guest_email = $_POST['email'];
  $message = $_POST['message'];

$email_from = 'info@ektransport.lt';

$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n".
                "User Email: $guest_email.\n".
                "Postcode: $postcode.\n".
                "User Message: $message.\n";

$to = 'ektransport.no@gmail.com';

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $guest_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header ("Location: contact.html");

?>