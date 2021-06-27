<?php
$name= $_POST['name'];
$visitor_email = $_POST['email'];
$queries = $_POST['queries'];

$email_from = 'info@website_name.com';       

$email_subject = 'New Form Submission';
$email_body = "User name: $name.\n".
                "User name: $visitor_email.\n".
                "User queries: $queries.\n";

$to = 'abcd@your_mail_id.com';             

$headers = "From: $email_from \r\n";

$headers = "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact us.html");


?>