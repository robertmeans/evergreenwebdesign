<?php

function ewd_copyright($startYear) {
	$currentYear = date('Y');
	if ($startYear < $currentYear) {
		$currentYear = date('y');
		return "&copy; $startYear&ndash;$currentYear";
	} else {
		return "&copy; $startYear";
	}
}

 ?>

<footer>
	<div id="footer-info">
		<p><i class="fa fa-phone-square"></i><a class="tel" tabIndex="-1" href="tel:(303)%20932-7483">(303) WEBSITE</a></p>
		<p class="phone-spelled">That's (303) 932.7483</p>
		<p class="copyright"><?= ewd_copyright(2015); ?> Evergreen Web Design, LLC</p>
		<a href="http://www.evergreenchamber.org" target="_blank"><img class="ecc" src="_images/evergreenchamber-logo_02.jpg" alt="Evergreen, Colorado Chamber of Commerce"></a>

	</div><!-- #footer-info -->
</footer>