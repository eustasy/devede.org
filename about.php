<?php
	require_once __DIR__.'/_puff/sitewide.php';
	$Page['Type']        = 'Page';
	$Page['Title']       = 'About &nbsp;&middot;&nbsp; DeVeDe, Free Video to DVD Converter.';
	$Page['Description'] = 'About DeVeDe, A Free Video to DVD Converter.';
	require_once $Sitewide['Templates']['Header'];
?>

<h2 class="align-center">About DeVeDe</h2>

<section class="grid">
	<div class="whole medium-half">
		<h3>The Program</h3>
		<p>DeVeDe is a Video File to DVD programme, which utilises Mencoder and FFMpeg to turn AVI, MP4, MPG and many other video files into DVD format images. This means that DeVeDe can proccess videos from digital cameras, youtube videos, and downloads so that when burned to a DVD, they will play in a standard DVD Player.</p>
	</div>
	<div class="whole medium-half">
		<h3>The Authors</h3>
		<p>DeVeDe was originally created by <a href="http://www.rastersoft.com/programas/devede.html" title="DeVeDe on Rastersoft">Rastersoft</a> for <a href="http://www.ubuntu.com/ubuntu" title="Ubuntu">Ubuntu</a> and other <a href="http://www.debian.org/" title="Debain">Debian</a> based systems. Later, <a href="http://www.majorsilence.com/devede" title="DeVeDe on MajorSilence">MajorSilence</a> ported it to windows.</p>
	</div>
</section>

<?php
	require_once $Sitewide['Templates']['Footer'];
