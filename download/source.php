<?php
	require_once __DIR__.'/../_puff/sitewide.php';
	$Page['Type']  = 'Page';
	$Page['Title'] = 'Browse DeVeDe Source on GitHub &nbsp;&middot;&nbsp; DeVeDe, Free Video to DVD Converter.';

	$Page['Header'] = '<meta http-equiv="refresh" content="3; url=https://github.com/rastersoft/devedeng">';
	require_once $Sitewide['Templates']['Header'];
?>
<script>
	if ( window.ga ) {
		ga("send", "event", "Download", "GitHub (Source)");
	}
</script>

<section>

	<a href="https://github.com/rastersoft/devedeng" title="Browse DeVeDe Source on GitHub" class="whole button github js-no-external">
		<img src="/assets/images/github.png" alt="GitHub Logo" class="float-left">
		<h2>Continuing&hellip;</h2>
		<p>You should be redirect momentarily. If nothing happens, click here for a direct link.</p>
	</a>

</section>

<?php
	require_once $Sitewide['Templates']['Footer'];
