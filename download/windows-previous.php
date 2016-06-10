<?php
	require_once __DIR__.'/../_puff/sitewide.php';
	$Page['Type']  = 'Page';
	$Page['Title'] = 'Download DeVeDe for Windows Vista &nbsp;&middot;&nbsp; DeVeDe, Free Video to DVD Converter.';

	$Page['Header'] = '<meta http-equiv="refresh" content="3; url=http://files.majorsilence.com/devede/downloads/316-9/devede-setup-3.16.9-build7.msi">';
	require_once $Sitewide['Templates']['Header'];
?>
<script>
	if ( window.ga ) {
		ga("send", "event", "Download", "Windows Vista");
	}
</script>

<section>

	<a href="http://files.majorsilence.com/devede/downloads/316-9/devede-setup-3.16.9-build7.msi" title="Download DeVeDe for Windows Vista" class="whole button windows-previous js-no-external">
		<img src="/assets/images/system-windows-previous.png" alt="Windows Vista Logo" class="float-left">
		<h2>Thanks for Downloading!</h2>
		<p>Your download should begin shortly. Look at the top or bottom on this window in case your browser requires confirmation. If nothing appears, click here for a direct link.</p>
	</a>

</section>

<?php
	require_once $Sitewide['Templates']['Footer'];
