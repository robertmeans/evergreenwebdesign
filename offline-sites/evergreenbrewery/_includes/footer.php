<footer>
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

	<div id="cc-invite">
		<p class="invite">Join our mailing list and be the first one to hear about events, meet-ups, discounts and more!</p>
		<span style="text-align:center;"><a class="show-cc" onClick="showSignUp(); return false;" href="#">JOIN HERE</a></span>
	</div><!-- #cc-invite -->

	<div id="sign-up-hidden">
		<div id="footer-sign-up">
			<div id="ctr-cc" class="cf">
				<div id="close-cc">
					<a class="cc-x" onClick="hideSignUp(); return false;" href="#"><i class="far fa-window-close"></i></a>
				</div><!-- #close-cc -->
				<!-- Begin Constant Contact Inline Form Code -->
				<div class="ctct-inline-form" data-form-id="14a8ad96-ce01-43e3-82e8-ddbd6c63053a"></div>
				<!-- End Constant Contact Inline Form Code -->
			</div><!-- #ctr-cc -->
		</div><!-- #footer-sign-up -->
	</div><!-- #sign-up-hidden -->

	<p class="copyright"><?= ewd_copyright(2017); ?> Evergreen Brewery | <a href="http://www.evergreenwebdesign.com" target="_blank">Evergreen Web Design</a></p>

	<!-- Begin Constant Contact Universal Code -->
	<script> var _ctct_m = "fec03c291dec1ef04deffafbd2b8ba1f"; </script>
	<script id="signupScript" src="//static.ctctcdn.com/js/signup-form-widget/current/signup-form-widget.min.js" async defer></script>
	<!-- End Constant Contact Universal Code -->	
</footer>