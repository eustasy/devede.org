<?php
	require_once __DIR__.'/_puff/sitewide.php';
	$Page['Type']        = 'Page';
	$Page['Title']       = 'Operation &nbsp;&middot;&nbsp; How to Convert AVI to DVD, MP4 To DVD and MPG to DVD. &nbsp;&middot;&nbsp; DeVeDe, Free Video to DVD Converter.';
	$Page['Description'] = 'How to Convert AVI to DVD, MP4 To DVD and MPG to DVD.';
	require_once $Sitewide['Templates']['Header'];
?>

<section>
	<h2>Operating DeVeDe</h2>
	<h3>Choose a Disc Type</h3>
	<p>You have 5 options here, depending on what you want to make a DVD of and where you want to play it.</p>
	<p>They're all pretty well explained in DeVeDe, and most people will want the top one:</p>
	<p>Video DVD, Creates a video DVD suitable for all home DVD players.</p>
	<a class="colorbox" href="/assets/images/screenshots/1_Choose-Disc-Type.png">
		<img class="width-full pad-bottom" src="/assets/images/screenshots/1_Choose-Disc-Type.png">
	</a>
	<h3>The Default View</h3>
	<p>This is what your project will look like when it is first opened. Titles are on the left and can be used to name videos or groups of videos, and the files for that title are displayed on the right. This enables you to do things like group several short clips of home movies under the title Christmas, and another group under another title of Charlies Birthday. Multiple videos under the same title will play seamlessly, one after the other.</p>
	<a class="colorbox" href="/assets/images/screenshots/2_Default-View.png">
		<img class="width-full pad-bottom" src="/assets/images/screenshots/2_Default-View.png">
	</a>
	<h3>Title Properties</h3>
	<p>This is where you can change the Title and what happens when the title ends.</p>
	<a class="colorbox" href="/assets/images/screenshots/3_Title-Properties.png">
		<img class="width-full pad-bottom" src="/assets/images/screenshots/3_Title-Properties.png">
	</a>
	<div class="grid">
		<div class="whole medium-half">
			<h3>File Properties</h3>
			<p>This section can be very simple, or much more advanced, depending on how many options you wish to change. By default, all you can do is modify volume (and fix those far-too-quiet videos), add subtitles, and choose PAL or NTSC format.</p>
			<p>If you are unaware of the technical difference, you will probably not notice much quality variation, and should probably just use your countries default, which you can find on the map to the right.</p>
			<p>DeVeDe defaults to PAL, and apart from the United States, Canada and Mexico, very few people reside in countries that use NTSC.</p>
		</div>
		<div class="whole medium-half">
			<a class="colorbox" href="/assets/images/PAL-NTSC-SECAM.png">
				<img class="width-full pad-bottom" src="/assets/images/PAL-NTSC-SECAM.png">
			</a>
		</div>
	</div>
	<a class="colorbox" href="/assets/images/screenshots/4_File-Properties.png">
		<img class="width-full pad-bottom" src="/assets/images/screenshots/4_File-Properties.png">
	</a>
	<h3>General Options</h3>
	<p>Expand Advanced Options, and under the General tab you will be able to set the Video and Audio bitrates. The larger these are, the better the quality, but it will also mean less video per DVD. It is advised that these be set to the default values of 5001 and 224 or the original rates, whichever is smaller. You can also decide whether or not to automatically add chapters to a title, and how many minutes long they should each be.</p>
	<a class="colorbox" href="/assets/images/screenshots/5_File-Properties_Advanced-Options_General.png">
		<img class="width-full pad-bottom" src="/assets/images/screenshots/5_File-Properties_Advanced-Options_General.png">
	</a>
	<h3>Video Format</h3>
	<p>Under Video Format you can change the video size and aspect ratio. If you want to minimize black bars you should leave it as default and 16:9 for most screens. Switching between PAL and NTSC will change the options available to you.</p>
	<a class="colorbox" href="/assets/images/screenshots/6_File-Properties_Advanced-Options_Video-Format.png">
		<img class="width-full pad-bottom" src="/assets/images/screenshots/6_File-Properties_Advanced-Options_Video-Format.png">
	</a>
	<h3>Video Options</h3>
	<p>The Video Options tab allows you to rotate, mirror, and scale the video. Scalling to remove black bars can result in a huge amount of image distortion leaving the end result unwatchable. Mirroring is rarely used, even upside-down recordings are better off rotated 180 degrees, and 90 degree rotations can make mobile phone videos watchable on a television.</p>
	<a class="colorbox" href="/assets/images/screenshots/7_File-Properties_Advanced-Options_Video-Options.png">
		<img class="width-full pad-bottom" src="/assets/images/screenshots/7_File-Properties_Advanced-Options_Video-Options.png">
	</a>
	<h3>Quality Options</h3>
	<p>The Quality tab contains what are probably the most technical and complex options. MacroBlock Decision Algorithm, Trellis Searched Quantization, Dual Pass Encoding, 	and Deinterlacing should all be left to their default values (shown below), except for the most advanced of users.</p>
	<a class="colorbox" href="/assets/images/screenshots/8_File-Properties_Advanced-Options_Quality.png">
		<img class="width-full pad-bottom" src="/assets/images/screenshots/8_File-Properties_Advanced-Options_Quality.png">
	</a>
	<h3>Audio Options</h3>
	<p>The Audio Options are largely useless for most users, unless you want surround sound (your video probably doesn't have that, but you can pretend, which most sound systems will do anyway), delay the audio, or know how the audio is already encoded, you can probably leave everything here well alone.</p>
	<a class="colorbox" href="/assets/images/screenshots/9_File-Properties_Advanced-Options_Audio.png">
		<img class="width-full pad-bottom" src="/assets/images/screenshots/9_File-Properties_Advanced-Options_Audio.png">
	</a>
	<h3>Miscellaneous Options</h3>
	<p>The Misc tab is another one with options you could go years without using, and unless you know that the formats and encoding of your videos are special, or you want to add special parameters of your own construction, you can probably just leave them at the deafults, with only GOP checked, to improve compatability.</p>
	<a class="colorbox" href="/assets/images/screenshots/10_File-Properties_Advanced-Options_Misc.png">
		<img class="width-full pad-bottom" src="/assets/images/screenshots/10_File-Properties_Advanced-Options_Misc.png">
	</a>
	<h3>Action Options</h3>
	<p>Now that we've done fiddling around with the file, we can click Advanced Options on the main view and choose whether to convert to compliant MPEG files, create the disc structure, or create and ISO or BIN/CUE image, which is what most things will want to burn.</p>
	<a class="colorbox" href="/assets/images/screenshots/11_Default-View_Advanced-Options.png">
		<img class="width-full pad-bottom" src="/assets/images/screenshots/11_Default-View_Advanced-Options.png">
	</a>
	<h3>Menu Options</h3>
	<p>There are a lot of options here, almost all to do with the way the menu will look, the exceptions being Menu Sound and whether or not to show the Menu when you firrst play the disc. The rest are margins, fonts, sizes, colours, backgrounds, alignment and shadows. You can make some quite good looking things here if you fiddle about with the options and preview, but, again, the default options will suffice for most users.</p>
	<a class="colorbox" href="/assets/images/screenshots/12_Menu-Options.png">
		<img class="width-full pad-bottom" src="/assets/images/screenshots/12_Menu-Options.png">
	</a>
	<h3>Choose Folder and Filename</h3>
	<p>Here you can select the folder you wish to save to and the filename, as well as whether or not to shutdown when DeVeDe has finished converting the video to DVD.</p>
	<a class="colorbox" href="/assets/images/screenshots/13_Choose-File-Folder.png">
		<img class="width-full pad-bottom" src="/assets/images/screenshots/13_Choose-File-Folder.png">
	</a>
	<h3>Creating Menu</h3>
	<p>This should only take a few seconds.</p>
	<a class="colorbox" href="/assets/images/screenshots/14_Creating-Menu.png">
		<img class="width-full pad-bottom" src="/assets/images/screenshots/14_Creating-Menu.png">
	</a>
	<h3>Converting Files</h3>
	<p>The time it takes to convert files depends largely on the options you choose and the original videos, and your computers processing power. On an average performance computer, expect it to take around the same amount of time watching them would.</p>
	<a class="colorbox" href="/assets/images/screenshots/15_Converting-Files.png">
		<img class="width-full pad-bottom" src="/assets/images/screenshots/15_Converting-Files.png">
	</a>
	<h3>Burning the File</h3>
	<p>Now we have an image, you'll need to burn it.</p>
	<p>On the various linux variants, you should find that you have an image burner installed, probably <a href="http://projects.gnome.org/brasero/">Brasero</a>. For Windows there is <a href="http://www.freeisoburner.com/">Free ISO Burner</a> (which is extreamly quick and simple) or <a href="http://www.imgburn.com/">ImgBurn</a> (a little more complex but with some options power-users will appreciate).</p>
</section>

<?php
	require_once $Sitewide['Templates']['Footer'];
