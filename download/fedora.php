<?php
	require_once __DIR__.'/../_puff/sitewide.php';
	$Page['Type']  = 'Page';
	$Page['Title'] = 'Download DeVeDe for Fedora &nbsp;&middot;&nbsp; DeVeDe, Free Video to DVD Converter.';

	$Page['Header'] = '<meta http-equiv="refresh" content="3; url=http://www.rastersoft.com/descargas/devedeng/devedeng.fedora23-4.7.0-1.noarch.rpm">';
	require_once $Sitewide['Templates']['Header'];
?>
<script>
	if ( window.ga ) {
		ga("send", "event", "Download", "Fedora");
	}
</script>

<section>

	<a href="http://www.rastersoft.com/descargas/devedeng/devedeng.fedora23-4.7.0-1.noarch.rpm" title="Download DeVeDe for Fedora" class="whole button fedora js-no-external">
		<img src="/assets/images/system-fedora.png" alt="Fedora Logo" class="float-left">
		<h2>Thanks for Downloading!</h2>
		<p>Your download should begin shortly. Look at the top or bottom on this window in case your browser requires confirmation. If nothing appears, click here for a direct link.</p>
	</a>

</section>

<?php
	require_once $Sitewide['Templates']['Footer'];
