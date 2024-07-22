<?php
  
  if(!isset($_POST['name']) || !isset($_POST['email']) || !isset($_POST['subject']) || !isset($_POST['code'])
    || empty($_POST['name']) || empty($_POST['email']) || empty($_POST['subject']) || empty($_POST['code'] 
    || empty($_POST['message']))
  ) {
    die('Input error. Please fill all the fields.');
  }

  $receiving_email_address = 'info@wesea-it.com';
  $message = 'Name: '. $_POST['name'] . '<br>';
  $message .= 'Email: '. $_POST['email'] . '<br>';
  $message .= 'Subject: '. $_POST['subject'] . '<br>';
  $message .= 'Message: '. $_POST['message'] . '<br><br>';
  $message .= 'From: Tahir portfolio website. Wesea-it.com/tahir';

  $headers = "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 

  mail($receiving_email_address, 'Message from WeSea-IT Tahir Resume Form', $message, $headers);
  echo 'sent';
?>