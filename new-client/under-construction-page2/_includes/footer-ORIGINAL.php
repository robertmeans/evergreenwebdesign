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
	<div id="left">
		<p>ABC Company</p>
	</div>
	<div id="center">
		<p><i class="fa fa-map-marker"></i> >Piazza del Colosseo, 1, 00184 Roma RM, Italy</p>
	</div>
	<div id="right">
		<p><i class="fa fa-phone-square"></i> <a class="tel" tabIndex="-1" href="tel:(303) 555-1234">555.123.4567</a></p>
	</div>
	<div class="copyright"><p><?= ewd_copyright(2015); ?> ABC Company | <a href="http://www.evergreenwebdesign.com" target="_blank">Evergreen Web Design</a></p></div>
</footer>