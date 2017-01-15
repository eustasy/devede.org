<?php
	require_once __DIR__.'/_puff/sitewide.php';
	$Page['Type']        = 'Page';
	$Page['Title']       = 'FAQs &nbsp;&middot;&nbsp; DeVeDe, Free Video to DVD Converter.';
	$Page['Description'] = 'FAQs about DeVeDe';
	require_once $Sitewide['Templates']['Header'];
?>

<h2 class="align-center">Freqently Asked Questions</h2>

<section class="grid">
	<div class="whole medium-half">
		<h3>What Video File Formats does DeVeDe Support?</h3>
		<p>DeVeDe uses Mplayer, Mencoder, FFMpeg, DVDAuthor, VCDImager and MKisofs to transform the videos, and as such can cope with almost any codec, so long as it is on your machine. Windows systems may be more fussy, but it will easily support AVI to DVD, MP4 to DVD, MPG to DVD, and MKV to DVD.</p>
		<p>This is by no means a full list of file formats.</p>
	</div>
	<div class="whole medium-half">
		<h3>What Disc Types does DeVeDe Support?</h3>
		<p class="important">If you have the disc, it's writable, and you have a disk drive that can burn it, DeVeDe will do it. DeVeDe doesn't actually carry out the burning itself instead simply handling creating a disk image, than handing that work out. On Ubuntu, this usually means Brasero.</p>
		<p>CD-R, CD+R, CD-RW, CD+RW, DVD-R, DVD+R, DVD-RW, or DVD+RW are common, with writable HD-DVDs never really catching on, but BluRay are gaining popularity.</p>
	</div>
</section>

<section>
	<h3>How do i..?</h3>
	<p>Looking for <a href="/operation" title="How to convert Video files to DVDs in DeVeDe.">How to Use DeVeDe</a>?</p>
</section>

<?php
	require_once $Sitewide['Templates']['Footer'];
