<?php
$filename = "hi.txt";

// Open file for writing (create if it doesn’t exist)
$file = fopen($filename, "a") or die("Unable to open file!");

// Write content
fwrite($file, "Luigi!\n");
fwrite($file, "Barte");

// Close file
fclose($file);

echo "File has been created and written successfully.";
?>
