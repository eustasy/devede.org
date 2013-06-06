<?php 

// Attempt to Open the file for reading
if (($fp = fopen("log.txt", "r")) !== false) { // If successful

	// Get the existing count 
	$count = fread($fp, 1024); 

	// Close the file 
	fclose($fp); 

	// Add 1 to the existing count 
	$count = $count + 1; 

	// Display the number of hits 
	$n_count = number_format($count);
	echo 'Downloads: <a href="http://www.devede.org/download/count/">' . $n_count . '</a>'; 

} // Finish Read

// Attempt to Reopen the file and erase the contents
if (($fp = fopen("log.txt", "w")) !== false) { // If successful

	// Write the new count to the file 
	fwrite($fp, $count); 

	// Close the file 
	fclose($fp); 

} // Finish Write

?> 
