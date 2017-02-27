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

<div id="ec-badge"></div>
<script src="http://evergreenchamber.chambermaster.com/Content/Script/Member.js" type="text/javascript"></script>
	<script type="text/javascript">
		new MNI.Widgets.Member("ec-badge",{member:11138,styleTemplate:"#@id{text-align:center;position:relative}#@id .mn-widget-member-name{font-weight:100}#@id .mn-widget-member-logo{max-width:162px; background-color: #fff; padding: 3px 8px 3px 8px;}"}).create();
	</script>
	</div><!-- #footer-info -->
</footer>