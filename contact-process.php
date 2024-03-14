<?php

require_once 'config/initialize.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


require 'vendor/autoload.php';


$name = trim($_POST['name']);
$email = trim($_POST['email']);
$message = trim($_POST['message']);
$words = str_word_count($message);

if (is_post_request() && isset($_POST['qualify'])) {

  $signal = '';
  $msg = '';
  $li = '';
  $ww = '';
  $class = '';

  if (WWW === 'local') { sleep(1); }

  // validation
  if (empty($name)) {
    $signal = 'bad';
    $msg = '<span class="login-txt"><img src="_images/try-again.png"></span>';
    $li .= '<li class="no-count">What\'s your name?</li>';
    $ww .= 'name ';
    $class = 'red';
  }

  if (empty($email)) {
    $signal = 'bad';
    $msg = '<span class="login-txt"><img src="_images/try-again.png"></span>';
    $li .= '<li class="no-count">What\'s your email address?</li>';
    $ww .= 'email ';
    $class = 'red';
  } 

  if (!empty($email) && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $signal = 'bad';
    $msg = '<span class="login-txt"><img src="_images/try-again.png"></span>';
    $li .= '<li class="no-count">Email is no bueno. Check it for errors.</li>';
    $ww .= 'email ';
    $class = 'red';
  }

  if (empty($message)) {
    $signal = 'bad';
    $msg = '<span class="login-txt"><img src="_images/try-again.png"></span>';
    $li .= '<li class="no-count">Please include a message. This is the most critical detail ...aside from the other 2.</li>';
    $ww .= 'message ';
    $class = 'red';
  }

  if (!empty($message) && $words == 1) {
    $signal = 'bad';
    $msg = '<span class="login-txt"><img src="_images/try-again.png"></span>';
    $li .= '<li class="no-count">You only have ' . $words . ' word in your message. Say a little something so I know you\'re a real person.</li>';
    $ww .= 'message ';
    $class = 'red';
  }

  if ($words > 1 && $words < 3) {
    $signal = 'bad';
    $msg = '<span class="login-txt"><img src="_images/try-again.png"></span>';
    $li .= '<li class="no-count">You only have ' . $words . ' words in your message. Say a little something so I know you\'re a real person.</li>';
    $ww .= 'message ';
    $class = 'red';
  }


  if ($li === '') {
    if (WWW === 'local') { sleep(1); }

    $mail = new PHPMailer(true);

    try { 

      // mail_config();
      $mail->isSMTP(); 
      $mail->Host         = "localhost"; 
      $mail->Port         = 25; 
      $mail->SMTPAuth     = false; 
      $mail->SMTPAutoTLS  = false;


      //Recipients
      $mail->setFrom('robert@evergreenwebdesign.com', 'Evergreen Web Design');
      $mail->addAddress('robert@evergreenwebdesign.com', 'Evergreen Web Design');     // Add a recipient
      $mail->addReplyTo($email, $name);

      // Content
      $mail->isHTML(true);
      $mail->Subject = 'Email from Evergreen Web Design Website';
      $mail->Body    =  'Name: ' . $name . '<br>Email: ' . $email . '<br><hr><br><br>' . nl2br($message);

      $mail->send();
      // echo 'Message has been sent';
      $signal = 'ok';
      $msg =  'Message sent successfully';
    } catch (Exception $e) {
        $signal = 'bad';
        $msg = 'Mail Error: {$mail->ErrorInfo}';
    }


  }

}
  $data = array(
    // 'signal' => $signal,
    // 'msg' => $msg
    'signal' => $signal,
    'msg' => $msg, 
    'li' => $li,
    'ww' => $ww,
    'class' => $class
  );
  echo json_encode($data);

// stop

?>