<?php
    $name = $_POST['name'];
    $title = $_POST['title'];
    $message = $_POST['message'];
    $from = 'From: CleverGraphics';
    $to = 'sonja.cederlund@icloud.com';
    $subject = 'Customer Contact on Clever Graphics Site';
    $human = $_POST['human'];


    $body = "From: $name\n E-Mail: $email\n Message:\n $message";

if ($_POST['submit'] && $human == '4') {
    if (mail($to, $subject, $body, $from)) {
        echo'<p>Your message has been sent!</p>';
    } else {
        echo'<p>Something went wrong, go back and try again!</p>';
    }
} elseif ($_POST['submit'] && $human != '4') {
    echo'<p>You answered the anti-spam question incorrectly!</p>';
}
