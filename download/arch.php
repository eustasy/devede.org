<?php
	require_once __DIR__.'/../_puff/sitewide.php';
	$Page['Type']  = 'Page';
	$Page['Title'] = 'Download DeVeDe for Arch &nbsp;&middot;&nbsp; DeVeDe, Free Video to DVD Converter.';

	$Page['Header'] = '<meta http-equiv="refresh" content="3; url=http://www.rastersoft.com/descargas/devedeng/python-devedeng-4.7.0-1-any.pkg.tar.xz">';
	require_once $Sitewide['Templates']['Header'];
?>
<script>
	if ( window.ga ) {
		ga("send", "event", "Download", "Arch");
	}
</script>

<section>

	<a href="http://www.rastersoft.com/descargas/devedeng/python-devedeng-4.7.0-1-any.pkg.tar.xz" title="Download DeVeDe for Arch" class="whole button arch js-no-external">
		<img src="/assets/images/system-arch.png" alt="Arch Logo" class="float-left">
		<h2>Thanks for Downloading!</h2>
		<p>Your download should begin shortly. Look at the top or bottom on this window in case your browser requires confirmation. If nothing appears, click here for a direct link.</p>
	</a>

</section>

<?php
	require_once $Sitewide['Templates']['Footer'];
