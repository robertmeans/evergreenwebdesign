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
		<p><i class="fa fa-phone-square"></i><a class="tel" tabIndex="-1" href="tel:(720)%20504-6323">720.504.6323</a></p>
		<p class="copyright"><?= ewd_copyright(2015); ?> Evergreen Web Design, LLC</p>
	</div><!-- #footer-info -->
</footer>