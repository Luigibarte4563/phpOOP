<?php

$file = fopen("first.txt", "w");
fwrite($file, "Hello, PHP File Handling!\n");
fwrite($file, "This is another line. \n \n");
fclose($file);

echo "File written successfully!";
?>