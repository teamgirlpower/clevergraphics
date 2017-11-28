<?php
       // from the form
       $name = trim(strip_tags($_POST['name']));
       $title = trim(strip_tags($_POST['title']));
       $message = htmlentities($_POST['message']);

       // set here
       $subject = "Contact form submitted!";
       $to = 'sonja.cederlund@icloud.com';

       $body = <<<HTML
$message
HTML;

       $headers = "From: $email\r\n";
       $headers .= "Content-type: text/html\r\n";

       // send the email
       mail($to, $subject, $body, $headers);

       // redirect afterwords, if needed
   // testing hence removed   header('Location: thanks.html');
?>