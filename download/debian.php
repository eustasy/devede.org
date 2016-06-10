<?php
	require_once __DIR__.'/../_puff/sitewide.php';
	$Page['Type']  = 'Page';
	$Page['Title'] = 'Download DeVeDe for Debian &nbsp;&middot;&nbsp; DeVeDe, Free Video to DVD Converter.';

	$Page['Header'] = '<meta http-equiv="refresh" content="3; url=http://www.rastersoft.com/descargas/devedeng/python3-devedeng-sid_4.7.0-debian3_all.deb">
	<script>
	if (window.ga) {
		ga("send", "event", "Download", "Debian");
	}
</script>';
	require_once $Sitewide['Templates']['Header'];
?>

<section>

	<a href="http://www.rastersoft.com/descargas/devedeng/python3-devedeng-sid_4.7.0-debian3_all.deb" title="Download DeVeDe for Debian" class="whole button debian js-no-external">
		<img src="/assets/images/system-debian.png" alt="Debian Logo" class="float-left">
		<h2>Thanks for Downloading!</h2>
		<p>Your download should begin shortly. Look at the top or bottom on this window in case your browser requires confirmation. If nothing appears, click here for a direct link.</p>
	</a>

</section>

<?php
	require_once $Sitewide['Templates']['Footer'];
