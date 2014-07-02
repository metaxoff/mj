<?php

$link = new mysqli('localhost', 'metaxoff_maria', 'XSTJ)t{Ib{7S', 'metaxoff_maria');


if (isset($_POST)) {
     $headers = 'From: '.trim($_POST["name"]) . "\r\n" .
    'Reply-To: ' . trim($_POST["email"]) . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
    $link->query('INSERT INTO rsvp '
            . 'SET guest_name="' . mysqli_real_escape_string($link, trim($_POST['name'])) . '",'
            . 'email="' . mysqli_real_escape_string($link, trim($_POST['email'])) . '",'
            . 'message="' . mysqli_real_escape_string($link, trim($_POST['message'])) . '"');
    mail('janandmaria@gmail.com', 'RSVP message from ' . trim($_POST["name"]), trim($_POST['message']), $headers);
}
