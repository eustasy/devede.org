<?php
	require_once __DIR__.'/../_puff/sitewide.php';
	$Page['Type']  = 'Page';
	$Page['Title'] = 'Choose a Download &nbsp;&middot;&nbsp; DeVeDe, Free Video to DVD Converter.';
	require_once $Sitewide['Templates']['Header'];
?>

<section class="grid">

	<!-- Windows -->
	<a href="/download/windows" title="Download for Windows 7, 8, &amp; 10" class="whole button windows">
		<img src="/assets/images/system-windows.png" alt="Windows 10 Logo" class="float-left">
		<h2>Download for Windows 7, 8, &amp; 10</h2>
	</a>
	<a href="/download/windows-previous" title="Download for Windows 7, 8, &amp; 10" class="whole button windows-previous deprecated">
		<img src="/assets/images/system-windows-previous.png" alt="Windows Vista Logo" class="float-left">
		<h2>Download for Windows Vista</h2>
	</a>

	<!-- Linux -->
	<a href="/download/ubuntu" title="Download for Ubuntu" class="whole button ubuntu">
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

	<!-- Source -->
	<a href="/download/source" title="Source on GitHub" class="whole button github">
		<img src="/assets/images/github.png" alt="GitHub Logo" class="float-left">
		<h2>Source on GitHub</h2>
	</a>

</section>

<?php
	require_once $Sitewide['Templates']['Footer'];
