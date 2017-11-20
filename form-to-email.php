<?php
if(isset($_POST['submit']))
{
  //This page should not be accessed directly. Need to submit the form.
  echo "error; you need to submit the form!";
}
$name = $_POST['name'];
$visitor_email= $_Post['email]';
$message = $_Post['message'];

//Validate first
if(empty($name)||empty($visitor_email))
{
  echo "Name and email are mandatory!";
  exit;
}


                       

$email_from = 'nguy2930@mylaurier.ca';//<== Put your email here
$email_subject = "Question or Concern about the used textbook website";
$email_body = "You have received a new message from the user $name. \n".
  "email address: $visitor_email\n".
  "Here is the message:\n $message".
  
$to = "nguy2930@mylaurier.ca";//<== Put your email here  
$headers = "From: $email_from \r\n";
$headers .= "Reply-To:$visitor_email \r\n";
$headers .= "Cc: https://kaichizuru01.github.io/Used-Textbooks-Laurier/index.html \r\n";                     

  
//Send the email!
mail($to,$email_subject,$email_body,$headers);
//done. redirect to thank-you page.
