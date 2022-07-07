<?php
  if(isset($_POST['submit'])){
  // Replace contact@example.com with your real receiving email address
  $to = 'brunorodriguez89@gmail.com';
  $txt = "PRUEBA";// $_POST['name'];
  echo $txt ;
  /*$contact->from_name = $_POST['name'];
  $contact->from_email = $_POST['email'];*/
  $subject = "ALGO"; //  $_POST['subject'];

  mail($to,$subject,$txt);
  }
?>
