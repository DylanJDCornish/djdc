<?php

$fname_error = $lname_error = $email_error = $subject_error = $message_error = "";
$fname = $lname = $email = $subject = $message = $success = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["fname"])) {
    $fname_error = "Required";
  } else {
    $fname = test_input($_POST["fname"]);
  }

  if (empty($_POST["lname"])) {
    $lname_error = "Required";
  } else {
    $lname = test_input($_POST["lname"]);
  }

  if (empty($_POST["email"])) {
    $email_error = "Required";
  } else {
    $email = test_input($_POST["email"]);

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
      $email_error = "Invalid email address";
    }
  }

    if (empty($_POST["subject"])) {
      $subject_error = "Required";
    } else {
      $subject = test_input($_POST["subject"]);
    }

      if (empty($_POST["message"])) {
        $message = "";
      } else {
        $message = test_input($_POST["message"]);
      }

      if ($fname_error == '' and $lname_error == '' and $email_error = '' and $subject_error == ''){
        $message_body = '';
        unset($_POST['submit']);
        foreach ($_POST as $key => $value){
          $message_body .= "$key: $value\n";
        }

        $to = 'dylanjdcornish@gmail.com';
        $msubject = 'Contact Form Submit';
        if(mail($to, $msubject, $message)){
          $success = "message sent";
          $fname = $lname = $email = $subject = $message = "";
        }
      }

}

function test_input($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}

 ?>
