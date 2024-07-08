<?php
  $receiving_email_address = 'fadilahinayatali12@gmail.com';

  require_once '../assets/vendor/php-email-form/php-email-form.php';

  $contact->ajax = true;
  $contact->to = $receiving_email_address;
  $contact->from_name = $_POST['name'];
  $contact->from_email = $_POST['email'];
  $contact->subject = $_POST['subject'];
  $contact->add_message( $_POST['message'], 'Message');

  echo $contact->send();
?>