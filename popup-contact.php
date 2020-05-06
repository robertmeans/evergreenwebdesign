<?php
require_once '_functions/functions.php';
require_once 'controllers/emailController.php';

$name = '';
$email = '';
$message = '';

$errors = [];
$missing = [];

if ((is_post_request()) && (isset($_POST['pc-submit']))) {

  $expected = ['name', 'email', 'message'];
  $required = ['name', 'message']; // email is handled by required in input field


  require '_includes/process_contact.php';

} 

?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="style.css?<?php echo time(); ?>">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">	
</head>
<body>
	
<div id="msg-one">
	<div class="msg-bkg">
		<div class="inside-msg-one">
			
			<div class="pop-top">
				<h2>How can I help?</h2>
				<a class="close-pc"><i class="far fa-times-circle"></i></a>
			</div>
			<?php if ($_POST && $suspect) : ?>
				<p class="warning">Sorry, your mail could not be sent.</p>

				<?php 
					elseif ($errors || $missing) : ?>
					<p class="warning">All 3 fields serve a purpose. Please don't send me a half-message. :)</p>
				 <?php endif; ?>



	<?php 

		if ($_POST && $mailSent) { ?>

			<div class="success-msg">
				<form id="success-form" action="" method="post">
					<p>Your message was sent successfully!</p>
					<span class="sr"><input type="reset" name="reset-contact" class="reset" value="RESET"> <a class="close close-pc">CLOSE</a></span>
				</form>
			</div>

		<?php } else { ?>




			<form id="pc" action="" method="post">

				<label for="name">Name</label>
				<?php if ($missing && in_array('name', $missing)) : ?>
					<span class="warning">Please add your name</span>
				<?php endif; ?>
				<input type="text" name="name" 
				<?php
					if ($errors || $missing) {
						echo 'value="' . h($name) . '"';
					}

				 ?>>

				<label for="email">Email</label>
				<?php if ($missing && in_array('email', $missing)) : ?>
					<span class="warning">Please add your email</span>
				<?php endif; ?>				
				<input type="email" name="email" 
				<?php
					if ($errors || $missing) {
						echo 'value="' . h($email) . '"';
					}

				 ?> required>

				<label for="message">Message</label>
				<?php if ($missing && in_array('message', $missing)) : ?>
					<span class="warning">Please don't send an empty message.</span>
				<?php endif; ?>				
				<textarea name="message" noresize><?php

					if ($errors || $missing) {
						echo h($message);
					}

				 ?></textarea>
				<div class="pc-btns">
					<input type="reset" class="close-pc reset" name="reset-contact" value="CANCEL"> <input type="submit" name="pc-submit" value="SEND">
				</div>

			</form>


			<?php } ?>





		</div><!-- .inside-msg-one -->
	</div><!-- .msg-bkg -->
</div><!-- #msg-two -->

<script type="text/javascript" src="_scripts/popup_contact.js?<?php echo time(); ?>"></script>
<script src="http://localhost:35729/livereload.js"></script>
</body>
</html>