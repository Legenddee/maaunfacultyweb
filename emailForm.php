<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];
  
  $to = "iyaqub69@gmail.com";
  $subject = "New Contact Form Submission";
  $body = "Name: $name\nEmail: $email\nMessage: $message";
  
  if (mail($to, $subject, $body)) {
    echo "Thank you for contacting us. We'll get back to you soon!";
  } else {
    echo "Oops! An error occurred. Please try again later.";
  }
}
?>
