<?php

require_once 'vendor/autoload.php';
require_once 'config/constants.php';

// Create the Transport
// https://swiftmailer.symfony.com/docs/introduction.html
// $transport = (new Swift_SmtpTransport('localhost', 25))
// $transport = (new Swift_SmtpTransport('smtp.office365.com', 587))
// $transport = (new Swift_SmtpTransport('a2plcpnl0382.prod.iad2.secureserver.net', 587, 'tls'))
$transport = (new Swift_SmtpTransport('smtpout.secureserver.net', 80))


// ^^ works with exchange account with Email Routing set to Remote Mail Exchanger

  ->setUsername(EMAIL)
  ->setPassword(PASSWORD);

// Create the Mailer using your created Transport
$mailer = new Swift_Mailer($transport);

function email_EWD($name, $email, $message) 
	{
	global $mailer;

	// Create a message
	$message = (new Swift_Message('Message from Evergreen Web Design Website'))
	  ->setFrom([$email=> $name])
	  // ->setBcc([$email_addresses])
	  ->setTo('robert@evergreenwebdesign.com')
	  ->setBody($message, 'text/html');

	// Send the message
	$result = $mailer->send($message);
}


?>