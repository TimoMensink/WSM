<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = htmlspecialchars($_POST['naam']);
  $email = htmlspecialchars($_POST['email']);
  $telnummer = htmlspecialchars($_POST['telefoonnummer']);
  $klus = htmlspecialchars($_POST['klus']);
  $oppervlak = htmlspecialchars($_POST['oppervlak']);
  $bericht = htmlspecialchars($_POST['bericht']);

  $to = "timomensinkspam@gmail.com";  
  $subject = "New Form Submission";
  $body = "Name: $name\nEmail: $email\tel: $telnummer\nklus: $klus\oppervlak: $oppervlak\bericht: $bericht";
  $headers = "From: $email";

  if (mail($to, $subject, $body, $headers)) {
    echo "Message sent!";
  } else {
    echo "Failed to send message!";
  }
}

