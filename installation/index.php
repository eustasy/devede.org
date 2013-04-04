<?php require '../chunks/doctype.php'; ?>

	<title>Installation &nbsp;&middot;&nbsp; DeVeDe, Free Video to DVD Converter.</title>

	<?php require '../chunks/header.php'; ?>

<?php

require("../chunks/detect.php");

$ua = UA::parse();

?>
<!-- UA Parsed -->

<?php if (
$ua->os == "Windows ME"  || // Windows ME
$ua->os == "Win16" || // Windows 3.11
$ua->os == "Windows NT 4.0" || // Windows NT 4.0
$ua->os == "WinNT4.0" || 
$ua->os == "WinNT" || 
$ua->os == "Windows NT" || 
$ua->os == "Windows_95" || // Windows 95
$ua->os == "Windows 95" || 
$ua->os == "Win95" ||
$ua->os == "Windows 98" || // Windows 98
$ua->os == "Win98" ||
$ua->os == "Windows NT 5.0" || // Windows 2000
$ua->os == "Windows 2000" ||
$ua->os == "Windows NT 5.1" || // Windows XP
$ua->os == "Windows XP" || 
$ua->os == "Windows NT 5.2" || // Windows Server 2003
$ua->os == "Windows NT 6.0" || // Windows Vista
$ua->os == "Windows Vista" ||
$ua->os == "Windows NT 6.1" || // Windows 7
$ua->os == "Windows 7" || 
$ua->os == "Windows NT 6.2" || // Windows 8
$ua->os == "Windows 8"
) { ?>
<!-- Windows -->
<div class="section group" id="installation">
	<div class="col span_3_of_5">
		<div class="bubble windows prefered">
			<h2>How to Install DeVeDe on Windows</h2>
		</div>
		<div class="bubble">
			<ol>
				<li><a href="http://www.devede.org/#downloads" title="Download DeVeDe for Ubuntu and Windows.">Download</a> the .Msi package</a>.</li>
				<li>Open the .Msi package.</li>
				<li>If prompted for Administrator Privileges, allow.</li>
				<li>An Installer will run. Choose applicable options and click Next/Install.</li>
				<li>Close the Installer when it has finished insalling DeVeDe.</li>
				<li>All done! Want to check out <a href="http://www.devede.org/operation/" title="How to Use DeVeDe on Ubuntu and Windows."> How to Use DeVeDe</a> to convert AVI to DVD, MP4 to DVD, and MPG to DVD all in one simple utility with support for titles, automatic chapters, and both Ubuntu and Windows.</li>
			</ol>
		</div>
	</div>
	<div class="col span_2_of_5">
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

<?php } elseif ($ua->os == "Linux" || $ua->os == "Ubuntu" || $ua->os == "Linux Mint") { ?>
<!-- Linux -->

<div class="section group" id="installation">
	<div class="col span_3_of_5">
		<div class="bubble ubuntu prefered">
			<h2>How to Install DeVeDe on Ubuntu</h2>
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
	<div class="col span_2_of_5">
		<div class="bubble windows">
			<h3>How to Install DeVeDe on Windows</h3>
		</div>
		<div class="bubble">
			<ol>
				<li><a href="http://www.devede.org/#downloads" title="Download DeVeDe for Ubuntu and Windows.">Download</a> the .Msi package</a>.</li>
				<li>Open the .Msi package.</li>
				<li>If prompted for Administrator Privileges, allow.</li>
				<li>An Installer will run. Choose applicable options and click Next/Install.</li>
				<li>Close the Installer when it has finished insalling DeVeDe.</li>
				<li>All done! Want to check out <a href="http://www.devede.org/operation/" title="How to Use DeVeDe on Ubuntu and Windows."> How to Use DeVeDe</a> to convert AVI to DVD, MP4 to DVD, and MPG to DVD all in one simple utility with support for titles, automatic chapters, and both Ubuntu and Windows.</li>
			</ol>
		</div>
	</div>
</div>

<?php } else { ?>
<!--Unsupported System -->

<?php if ($ua->os == "Mac OS X") { ?>
<!-- OS X -->
<div class="section group">
	<div class="col span_2_of_5">
		<div class="bubble warning">
			<h2>Warning!</h2>
			<p>You appear to be using OS X, and this application is not compatible with that system.</p>
			<p class="right">Continue at your peril.</p>
		</div>
	</div>
<?php } elseif ($ua->os == "iOS") { ?>
<!-- iOS -->
<div class="section group">
	<div class="col span_2_of_5">
		<div class="bubble warning">
			<h2>Warning!</h2>
			<p>You appear to be using iOS, and this application is not compatible with that system.</p>
			<p class="right">Continue at your peril.</p>
		</div>
	</div>
<?php } elseif ($ua->os == "Android") { ?>
<!-- Android -->
<div class="section group">
	<div class="col span_2_of_5">
		<div class="bubble warning">
			<h2>Warning!</h2>
			<p>You appear to be using Android, and this application is not compatible with that system.</p>
			<p class="right">Continue at your peril.</p>
		</div>
	</div>
<?php } elseif ($ua->os == "SymbianOS") { ?>
<!-- SymbianOS -->
<div class="section group">
	<div class="col span_2_of_5">
		<div class="bubble warning">
			<h2>Warning!</h2>
			<p>You appear to be using SymbianOS, and this application is not compatible with that system.</p>
			<p class="right">Continue at your peril.</p>
		</div>
	</div>
<?php } elseif ($ua->os == "BlackBerry") { ?>
<!-- BlackBerry -->
<div class="section group">
	<div class="col span_2_of_5">
		<div class="bubble warning">
			<h2>Warning!</h2>
			<p>You appear to be using BlackBerry, and this application is not compatible with that system.</p>
			<p class="right">Continue at your peril.</p>
		</div>
	</div>
<?php } elseif ($ua->os == "Chrome OS") { ?>
<!-- Chrome OS -->
<div class="section group">
	<div class="col span_2_of_5">
		<div class="bubble warning">
			<h2>Warning!</h2>
			<p>You appear to be using Chrome OS, and this application is not compatible with that system.</p>
			<p class="right">Continue at your peril.</p>
		</div>
	</div>
<?php } else { echo '<!-- Browser: ' . $ua->browser . ' Major: ' . $ua->major . ' OS: ' . $ua->os . ' -->'; ?>
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
				<li><a href="http://www.devede.org/#downloads" title="Download DeVeDe for Ubuntu and Windows.">Download</a> the .Msi package</a>.</li>
				<li>Open the .Msi package.</li>
				<li>If prompted for Administrator Privileges, allow.</li>
				<li>An Installer will run. Choose applicable options and click Next/Install.</li>
				<li>Close the Installer when it has finished insalling DeVeDe.</li>
				<li>All done! Want to check out <a href="http://www.devede.org/operation/" title="How to Use DeVeDe on Ubuntu and Windows."> How to Use DeVeDe</a> to convert AVI to DVD, MP4 to DVD, and MPG to DVD all in one simple utility with support for titles, automatic chapters, and both Ubuntu and Windows.</li>
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



<?php require '../chunks/footer.php'; ?>
