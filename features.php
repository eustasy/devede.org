<?php
	require_once __DIR__.'/_puff/sitewide.php';
	$Page['Type']        = 'Page';
	$Page['Title']       = 'Features &nbsp;&middot;&nbsp; DeVeDe, Free Video to DVD Converter.';
	$Page['Description'] = 'Features in DeVeDe';
	require_once $Sitewide['Templates']['Header'];
?>

<h2 class="align-center">DeVeDe Features</h2>

<section class="grid">
	<div class="whole medium-half">
		<h3>General</h3>
		<ul>
			<li>Preview Video with selected settings</li>
			<li>Save disc structure to convert at a later time</li>
			<li>Ability to check for updates</li>
			<li>Menu option to view documentation</li>
		</ul>
	</div>
	<div class="whole medium-half">
		<h3>Create</h3>
		<ul>
			<li>Video DVD</li>
			<li>Video CD</li>
			<li>Super Video CD</li>
			<li>CVD</li>
			<li>DIVX / MPEG-4</li>
		</ul>
	</div>
</section>
<section class="grid">
	<div class="whole medium-half">
		<h3>When finished Action</h3>
		<ul>
			<li>Stop reproduction/show disc menu</li>
			<li>Play the first title</li>
			<li>Play the previous title</li>
			<li>Play current title again (loop)</li>
			<li>Play the next title</li>
			<li>Play the last title</li>
		</ul>
	</div>
	<div class="whole medium-half">
		<h3>Menus</h3>
		<ul>
			<li>Choose custom background</li>
			<li>Choose PAL/SECAM or NTSC format</li>
			<li>Customize menu font</li>
			<li>Preview menu</li>
			<li>Option for no menu</li>
		</ul>
	</div>
</section>
<section class="grid">
	<div class="whole medium-half">
		<h3>DVD Options</h3>
		<ul>
			<li>Convert only to MPEG</li>
			<li>Convert only to disc structure</li>
			<li>Convert to ready to burn ISO file</li>
			<li>Choose 1.4 GB, 4.7 GB, or 8 GB DVD</li>
		</ul>
	</div>
	<div class="whole medium-half">
		<h3>Quality Options</h3>
		<ul>
			<li>Trellis search Quantization</li>
			<li>MacroBloc decision algorithm</li>
			<li>Deinterlacing</li>
		</ul>
	</div>
</section>
<section class="grid">
	<div class="whole medium-half">
		<h3>Audio Options</h3>
		<ul>
			<li>Delay audio (in seconds)</li>
			<li>Create DVD with 5.1 channel sound</li>
			<li>Specify video already has AC3 sound</li>
		</ul>
	</div>
	<div class="whole medium-half">
		<h3>Subtitles</h3>
		<ul>
			<li>Add subtitles from sub and srt formats</li>
			<li>Choose encoding type of subtitles file</li>
			<li>Ability to raise subtitles above black bars (if chosen in scaling)</li>
		</ul>
	</div>
</section>
<section class="grid">
	<div class="whole medium-half">
		<h3>Video Information</h3>
		<ul>
			<li>Original size (pixels)</li>
			<li>Final size (pixels)</li>
			<li>Length (seconds)</li>
			<li>Estimated length (MBytes)</li>
			<li>Output aspect ratio</li>
			<li>Frames per second</li>
			<li>Video rate (Kbits/sec)</li>
			<li>Audio rate (Kbits/sec)</li>
			<li>Size of chapters</li>
		</ul>
	</div>
	<div class="whole medium-half">
		<h3>Video Properties</h3>
		<ul>
			<li>Set video rate (Kbits/sec)</li>
			<li>Set audio rate (Kbits/sec)</li>
			<li>Output video format as PAL/SECAM or NTSC</li>
			<li>Choose scaling mode</li>
			<li>Can choose to use 16:9 aspect ratio</li>
			<li>Set Final video size to:
				<ul>
					<li>720x576</li>
					<li>704x576</li>
					<li>480x576</li>
					<li>352x576</li>
					<li>352x288</li>
					<li>Default</li>
				</ul>
			</li>
		</ul>
	</div>
</section>
<section class="grid">
	<div class="whole medium-half">
		<h3>Misc Video Options</h3>
		<ul>
			<li>Split video file in chapter (for easy seeking). Defaults to 5 minutes per chapter.</li>
			<li>Specify video file is already DVD suitable MPEG-PS file</li>
			<li>Use a GOP of 12 frames (this improves compatibility)</li>
			<li>Option to specify extra parameters for mencoder (DeVeDe back end)</li>
		</ul>
	</div>
</section>

<?php
	require_once $Sitewide['Templates']['Footer'];
