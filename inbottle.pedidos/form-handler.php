<?php 
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$request = $_POST['request'];
$message = $_POST['message'];

$email_from = 'inbottle.pedidos@gmail.com';

$email_request = 'In Bottle Request';

$email_body = "User Name: $name.\n".
                "User Email: $visitor_email.\n".
                "Request: $request.\n".
                "Message: $message.\n";

$to = 'inbottle.pedidos@gmail.com';

$headers = "From: $email_from \r\n";

$headers. = "Reply_To: $visitor_email \r\n";

mail($to,$email_request,$email_body,$headers);

header("Location: contact.html")
?>