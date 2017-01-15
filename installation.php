<?php
	require_once __DIR__.'/_puff/sitewide.php';
	$Page['Type']  = 'Page';
	$Page['Title'] = 'Installation &nbsp;&middot;&nbsp; DeVeDe, Free Video to DVD Converter.';
	require_once $Sitewide['Templates']['Header'];
?>

<section class="grid">

<?php if (
		!empty($_GET['windows']) ||
		$Sitewide['OS']['windows']
	) { ?>
	<!-- Windows -->
	<div id="windows">
		<h2 class="align-center">How to Install DeVeDe on Windows</h2>
		<ol>
			<li><a href="/" title="Download DeVeDe for Ubuntu and Windows.">Download</a> the .Msi package</a>.</li>
			<li>Open the .Msi package.</li>
			<li>If prompted for Administrator Privileges, allow.</li>
			<li>An Installer will run. Choose applicable options and click Next/Install.</li>
			<li>Close the Installer when it has finished insalling DeVeDe.</li>
			<li>All done! Want to check out <a href="/operation" title="How to Use DeVeDe on Ubuntu and Windows."> How to Use DeVeDe</a> to convert AVI to DVD, MP4 to DVD, and MPG to DVD all in one simple utility with support for titles, automatic chapters, and both Ubuntu and Windows.</li>
		</ol>
	</div>

<?php } else if (
		!empty($_GET['ubuntu']) ||
		!empty($_GET['debian']) ||
		$Sitewide['OS']['linux']
	) { ?>
	<!-- Linux -->
	<div id="linux">
		<h2 class="align-center">How to Install DeVeDe on Ubuntu or Debian</h2>
		<ol>
			<li><a href="/" title="Download DeVeDe for Ubuntu and Windows.">Download</a> the .Deb package</a>.</li>
			<li>Open the .Deb ackage with your normal installer. Usually for this you just double click, opening it in the Ubuntu Software Center, but you can opt to use GDebi or run the terminal command <code>sudo dpkg -i Downloads/devede.deb</code>, replacing the dirctory and name with the real one.</li>
			<li>In the Ubuntu Software Center, click Install and wait for it to finish. With GDebi click Install and wait for it to finish. With the terminal, type in your password (don't worry when the letters don't appear, they don't) then hit enter. Wait fo the commands to finish executing and return to the home state.</li>
			<li>All done! Check out <a href="/operation" title="How to Use DeVeDe on Ubuntu and Windows."> How to Use DeVeDe</a> to convert AVI to DVD, MP4 to DVD, and MPG to DVD all in one simple utility with support for titles, automatic chapters, and both Ubuntu and Windows.</li>
		</ol>
	</div>

<?php } else { if ($osx) { // OS X ?>
<!-- OS X -->
<div class="section group">
	<div class="col span_2_of_5">
		<div class="bubble warning">
			<h2>Warning!</h2>
			<p>You appear to be using OS X, and this application is not compatible with that system.</p>
			<p class="right">Continue at your peril.</p>
		</div>
	</div>

<?php } else { ?>
<!-- Unable to Detect Operating System -->
<div class="section group">
	<div class="col span_2_of_5">
		<div class="bubble warning">
			<h2>Warning!</h2>
			<p>We couldn't detect your Operating System, and as such cannot guarantee this applications compatibility.</p>
			<p class="right">Continue at your peril.</p>
		</div>
	</div>
<?php } ?>
	<div class="col span_3_of_5">
		<div class="bubble windows prefered">
			<h2>How to Install DeVeDe on Windows</h2>
		</div>
		<div class="bubble">
			<ol>
				<li><a href="/" title="Download DeVeDe for Ubuntu and Windows.">Download</a> the .Msi package</a>.</li>
				<li>Open the .Msi package.</li>
				<li>If prompted for Administrator Privileges, allow.</li>
				<li>An Installer will run. Choose applicable options and click Next/Install.</li>
				<li>Close the Installer when it has finished insalling DeVeDe.</li>
				<li>All done! Want to check out <a href="/operation" title="How to Use DeVeDe on Ubuntu and Windows."> How to Use DeVeDe</a> to convert AVI to DVD, MP4 to DVD, and MPG to DVD all in one simple utility with support for titles, automatic chapters, and both Ubuntu and Windows.</li>
			</ol>
		</div>
	</div>
	<div class="col span_3_of_5 floatright">
		<div class="bubble ubuntu">
			<h3>How to Install DeVeDe on Ubuntu</h3>
		</div>
		<div class="bubble">
			<ol>
				<li><a href="http://www.devede.org/#downloads" title="Download DeVeDe for Ubuntu and Windows.">Download</a> the .Deb package</a>.</li>
				<li>Open the .Deb package.</li>
				<li>The Ubuntu Software Center will open. Click "Install" and wait for the installation of DeVeDe to finish.</li>
				<li>All done! Want to check out <a href="http://www.devede.org/operation/" title="How to Use DeVeDe on Ubuntu and Windows."> How to Use DeVeDe</a> to convert AVI to DVD, MP4 to DVD, and MPG to DVD all in one simple utility with support for titles, automatic chapters, and both Ubuntu and Windows.</li>
			</ol>
			<script>
function toggleExpander(showHideDiv, switchImgTag) {
	var ele = document.getElementById(showHideDiv);
	var imageEle = document.getElementById(switchImgTag);
	if(ele.style.display == "block") {
		ele.style.display = "none";
		imageEle.innerHTML = 'Complicated Version <img src="http://www.devede.org/images/plus.png" alt="+" class="more" /></h2>';
	} else {
		ele.style.display = "block";
		imageEle.innerHTML = 'Disappear <img src="http://www.devede.org/images/minus.png" alt="-" class="less"/>';
	}
}
			</script>
			<a id="imageExpander" href="javascript:toggleExpander('contentExpander', 'imageExpander');">Complicated Version <img src="http://www.devede.org/images/plus.png" alt="+" class="more" /></a>
			<div id="contentExpander" style="display: none;">
				<ol>
					<li><a href="http://www.devede.org/#downloads" title="Download DeVeDe for Ubuntu and Windows.">Download the .Deb package</a>.</li>
					<li>Open the .Deb ackage with your normal installer. Usually for this you just double click, opening it in the Ubuntu Software Center, but you can opt to use GDebi or run the terminal command <code>sudo dpkg -i Downloads/devede.deb</code>, replacing the dirctory and name with the real one.</li>
					<li>In the Ubuntu Software Center, click Install and wait for it to finish. With GDebi click Install and wait for it to finish. With the terminal, type in your password (don't worry when the letters don't appear, they don't) then hit enter. Wait fo the commands to finish executing and return to the home state.</li>
				</ol>
			</div>
		</div>
	</div>
</div>
<?php } ?>

</section>

<?php
	require_once $Sitewide['Templates']['Footer'];
