<?php 

// Open the file for reading 
$fp = fopen("log.txt", "r"); 

// Get the existing count 
$count = fread($fp, 1024); 

// Close the file 
fclose($fp); 

// Add 1 to the existing count 
$count = $count + 1; 

// Display the number of hits 
// If you don't want to display it, comment out this line 
echo 'Downloads: <a href="http://www.devede.org/download/count/">' . $count . '</a>'; 

// Reopen the file and erase the contents 
$fp = fopen("log.txt", "w"); 

// Write the new count to the file 
fwrite($fp, $count); 

// Close the file 
fclose($fp); 

?> 
