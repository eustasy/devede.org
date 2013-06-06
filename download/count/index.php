<?php require '../../chunks/doctype.php'; ?>

	<title>Download Count &nbsp;&middot;&nbsp; DeVeDe, Free Video to DVD Converter.</title>

	<?php require '../../chunks/header.php'; ?>

<div class="section group" id="installation">
	<div class="col span_1_of_1">
		<div class="bubble standard">

<h2>Download Count</h2>

<table cellborder="0" cellpadding="0">

<?php 

// Open the file for reading 
$uc = fopen("http://www.devede.org/download/ubuntu/thanks/log.txt", "r"); 
// Get the existing count 
$ucount = fread($uc, 1024); 
// Close the file 
fclose($uc); 
$n_ucount = number_format($ucount);
// Display the number of hits 
// If you don't want to display it, comment out this line 
echo "<tr><td>Ubuntu Downloads:</td><td>" . $n_ucount . "</td></tr>"; 


// Open the file for reading 
$wsc = fopen("http://www.devede.org/download/windows/thanks/log.txt", "r"); 
// Get the existing count 
$wscount = fread($wsc, 1024); 
// Close the file 
fclose($wsc); 
$n_wscount = number_format($wscount);
// Display the number of hits 
// If you don't want to display it, comment out this line 
echo "<tr><td>Windows 7 &amp; 8 Downloads:</td><td>" . $n_wscount . "</td></tr>";


// Open the file for reading 
$woc = fopen("http://www.devede.org/download/previous-windows/thanks/log.txt", "r"); 
// Get the existing count 
$wocount = fread($woc, 1024); 
// Close the file 
fclose($woc); 
$n_wocount = number_format($wocount);
// Display the number of hits 
// If you don't want to display it, comment out this line 
echo "<tr><td>Windows Vista &amp; XP Downloads:</td><td>" . $n_wocount . "</td></tr>"; 


// Open the file for reading 
$sc = fopen("http://www.devede.org/download/source/thanks/log.txt", "r"); 
// Get the existing count 
$scount = fread($sc, 1024); 
// Close the file 
fclose($sc); 
$n_scount = number_format($scount);
// Display the number of hits 
// If you don't want to display it, comment out this line 
echo "<tr><td>Source Downloads:</td><td>" . $n_scount . "</td></tr>"; 


// Open the file for reading 
$oc = fopen("http://www.devede.org/download/other/thanks/log.txt", "r"); 
// Get the existing count 
$ocount = fread($oc, 1024); 
// Close the file 
fclose($oc); 
$n_ocount = number_format($ocount);
// Display the number of hits 
// If you don't want to display it, comment out this line 
echo "<tr><td>Other Downloads:</td><td>" . $n_ocount . "</td></tr>"; 



echo "<tr><td><br /></td></tr>"; 



$sum_total = $ucount + $wscount + $wocount + $scount + $ocount;
$n_sum_total = number_format($sum_total);
echo "<tr style='font-size: 1.2em;'><td>Total Downloads:</td><td>" . $n_sum_total . "</td></tr>"; 


?> 


</table>

</div>
</div>
</div>


<?php require '../../chunks/footer.php'; ?>
