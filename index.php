<?php
	require_once __DIR__.'/_puff/sitewide.php';
	$Page['Type']  = 'Page';
	$Page['Title'] = 'DeVeDe &nbsp;&middot;&nbsp; Free Video to DVD Converter.';
	$Page['Keywords'] = 'DeVeDe, dvd, video, video to dvd, download, free, files, convert, format, transfer, burn, play, copy, creator';
	$Page['Description'] = 'DeVeDe is a free, open-source Video to DVD converter. It will transform various formats of video to a DVD Player playable video DVD, VideoCD, Super VideoCD, China VideoDisc, or DivX/MPEG-4 compliant image which it will then offer to start burning to any writable disc type. You can download DeVeDe for free and start converting AVI, MP4 and MPG to DVD now, no watermarks, no premium version.';
	require_once $Sitewide['Templates']['Header'];
?>

<section class="grid">

<?php if ( $Sitewide['OS']['windows'] ) { ?>
	<!-- Windows -->
	<a href="/download/windows" title="Download for Windows 7, 8, &amp; 10" class="whole button windows prefered">
		<img src="/assets/images/system-windows.png" alt="Windows 10 Logo" class="float-left">
		<h2>Download for Windows 7, 8, &amp; 10</h2>
	</a>
	<a href="/download/windows-previous" title="Download for Windows 7, 8, &amp; 10" class="whole button windows-previous deprecated">
		<img src="/assets/images/system-windows-previous.png" alt="Windows Vista Logo" class="float-left">
		<h2>Download for Windows Vista</h2>
	</a>

<?php } else if ( $Sitewide['OS']['linux'] ) { ?>
	<!-- Linux -->
	<a href="/download/ubuntu" title="Download for Ubuntu" class="whole button ubuntu prefered">
		<img src="/assets/images/system-ubuntu.png" alt="Ubuntu Logo" class="float-left">
		<h2>Download for Ubuntu</h2>
	</a>
	<a href="/download/debian" title="Download for Debian" class="whole button debian">
		<img src="/assets/images/system-debian.png" alt="Debian Logo" class="float-left">
		<h2>Download for Debian</h2>
	</a>
	<a href="/download/fedora" title="Download for Fedora" class="whole button fedora">
		<img src="/assets/images/system-fedora.png" alt="Fedora Logo" class="float-left">
		<h2>Download for Fedora</h2>
	</a>
	<a href="/download/arch" title="Download for Arch" class="whole button arch">
		<img src="/assets/images/system-arch.png" alt="Arch Logo" class="float-left">
		<h2>Download for Arch</h2>
	</a>

<?php } else if ( $Sitewide['OS']['osx'] ) { ?>
	<!-- OS X -->
	<div class="whole button warning">
		<h2><i class="fa fa-exclamation-triangle"></i> Warning!</h2>
		<p>You appear to be using OS X, and this application is not compatible with that system.</p>
		<p>Continue at your peril.</p>
	</div>

<?php } else { ?>
	<!-- Unable to Detect Operating System -->
	<div class="whole button warning">
		<h2><i class="fa fa-exclamation-triangle"></i> Warning!</h2>
		<p>We couldn't detect your Operating System, and as such cannot guarantee this applications compatibility.</p>
		<p>Continue at your peril.</p>
	</div>

<?php } ?>

	<p class="align-center"><a href="/download/choose" title="Other ways to get DeVeDe / Get DeVeDe for Other Systems.">Other ways to get DeVeDe / Get DeVeDe for Other Systems.</a></p>
</section>

<section class="grid">
	<div class="whole large-two-thirds">
		<h4>About</h4>
		<p><a href="/about" title="About DeVeDe">DeVeDe</a> is a free, open-source Video to DVD converter. It will transform various <a href="/faq#formats" title="Video Formats DeVeDe supports.">formats</a> of video to a DVD Player playable video <a href="/faq#discs" title="Different types of writable discs.">DVD</a>, VideoCD, Super VideoCD, China VideoDisc, or DivX/MPEG-4 compliant image which it will then offer to start burning it. You can download DeVeDe for free and start converting AVI, MP4 and MPG to DVD now, no watermarks, no premium version.</p>
	</div>
	<div class="whole large-third align-center">
		<h4>Converts:</h4>
		<ul class="list-style-none">
			<li>AVI to DVD</li>
			<li>MP4 to DVD</li>
			<li>MPG to DVD</li>
			<li>DVD to AVI</li>
			<li>DVD to MP4</li>
			<li>DVD to MPG</li>
		</ul>
	</div>
</section>

<?php
	require_once $Sitewide['Templates']['Footer'];
