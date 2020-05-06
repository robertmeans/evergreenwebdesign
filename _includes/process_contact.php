<?php
$mailSent = false;
$suspect = false;
$pattern = '/Content-type:|Bcc:|Cc:/i';

function isSuspect($value, $pattern, &$suspect) {
	if (is_array($value)) {
		foreach ($value as $item) {
			isSuspect($item, $pattern, $suspect);
		}
	} else {
		if (preg_match($pattern, $value)) {
			$suspect = true;
		}
	}
}

isSuspect($_POST, $pattern, $suspect);


if (!$suspect) :
	foreach ($_POST as $key => $value) {
		/* variable variables - at 4:00
		   https://www.linkedin.com/learning/learning-php-3/making-sure-required-fields-aren-t-blank
		*/
		$value = is_array($value) ? $value : trim($value);
		if (empty($value) && in_array($key, $required)) {
			$missing[] = $key;
			$$key = '';
		} elseif (in_array($key, $expected)) {
			$$key = $value;
		}
	}

	if (!$missing && !empty($email)) :
		$validemail = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
		if ($validemail) {
			email_EWD($name, $email, $message);
			$mailSent = true;
			} else {
				$errors['email'] = true;
			}
		endif;
		// if (!$errors && !$missing) :
		// 	email_EWD($name, $email, $message);
		// endif;

endif;