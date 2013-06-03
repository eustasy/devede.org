<?php include 'chunks/doctype.php'; ?>

	<title>DeVeDe &nbsp;&middot;&nbsp; Free Video to DVD Converter.</title>

	<?php include 'chunks/header.php'; ?>

<?php

include("chunks/detect-two.php");

if ($ua) {

	if ($windows) { // Windows

?>
<!-- Windows -->
<div class="section group" id="downloads">
	<div class="col span_3_of_5">
		<a href="http://www.devede.org/download/windows/" title="Download for Windows 7 and 8">
			<div class="bubble windows prefered">
				<h2>Download for<br>Windows 7 &amp; 8</h2>
			</div>
		</div>
	</a>
	<div class="col span_2_of_5">
		<a href="http://www.devede.org/download/previous-windows/" title="Download DeVeDe for Windows Vista and XP.">
			<div class="bubble previous-windows">
				<h3>Download for Windows XP and Vista</h3>
			</div>
		</a>
	</div>
	<p class="center"><a href="http://www.devede.org/download/choose/" title="Other ways to get DeVeDe / Get DeVeDe for Other Systems.">Other ways to get DeVeDe and  DeVeDe for Other Systems.</a></p>
</div>

<?php } elseif ($linux) { // Linux ?>
<!-- Linux -->
<div class="section group" id="downloads">
	<div class="col span_3_of_5">
		<a href="http://www.devede.org/download/ubuntu/" title="Download DeVeDe for Ubuntu.">
			<div class="bubble ubuntu prefered">
				<h2>Download for Ubuntu</h2>
				<p>Download the .deb Debian Package for Ubuntu and other Debian based linux distributions.</p>
			</div>
		</a>
	</div>
	<div class="col span_2_of_5">
		<a href="http://www.devede.org/download/source/" title="Download the Source of DeVeDe.">
			<div class="bubble source">
				<h3>Download the Source</h3>
				<p>Download the Source of DeVeDe in a .tar.bz2 archive.</p>
			</div>
		</a>
	</div>
	<p class="center"><a href="http://www.devede.org/download/choose/" title="Other ways to get DeVeDe / Get DeVeDe for Other Systems.">Other ways to get DeVeDe and  DeVeDe for Other Systems.</a></p>
</div>

<?php } elseif ($osx) { // OS X ?>
<!-- OS X -->
<div class="section group">
	<div class="col span_2_of_4">
		<div class="bubble warning">
			<h2>Warning!</h2>
			<p>You appear to be using OS X, and this application is not compatible with that system.</p>
			<p class="right">Continue at your peril.</p>
		</div>
	</div>
<?php include 'chunks/warning.php';

} else { ?>
<!-- Unable to Detect Operating System -->
<div class="section group">
	<div class="col span_2_of_4">
		<div class="bubble warning">
			<h2>Warning!</h2>
			<p>We couldn't detect your Operating System, and as such cannot guarantee this applications compatibility.</p>
			<p class="right">Continue at your peril.</p>
		</div>
	</div>
<?php include 'chunks/warning.php';

}} ?>



<div class="section group">
	<div class="bubble standard">
		<div class="col span_4_of_6">
			<h4>About</h4>
			<p><a href="http://www.devede.org/about/" title="About DeVeDe">DeVeDe</a> is a free, open-source Video to DVD converter. It will transform various <a href="http://www.devede.org/faq/#formats" title="Video Formats DeVeDe supports.">formats</a> of video to a DVD Player playable video <a href="http://www.devede.org/faq/#discs" title="Different types of writable discs.">DVD</a>, VideoCD, Super VideoCD, China VideoDisc, or DivX/MPEG-4 compliant image which it will then offer to start burning it. You can download DeVeDe for free and start converting AVI, MP4 and MPG to DVD now, no watermarks, no premium version</p>
		</div>
		<div class="col span_1_of_6">
			<ul>
				<li>AVI to DVD</li>
				<li>MP4 to DVD</li>
				<li>MPG to DVD</li>
			</ul>
		</div>
		<div class="col span_1_of_6">
			<ul>
				<li>DVD to AVI</li>
				<li>DVD to MP4</li>
				<li>DVD to MPG</li>
			</ul>
		</div>
		<div class="clear"></div>
	</div>
</div>







<?php include 'chunks/footer.php'; ?>
