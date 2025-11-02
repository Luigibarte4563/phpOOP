<?php

$file = fopen("second.txt", "a");
fwrite($file, "hello this program is to append\n");
fwrite($file, "this new line hehe\n\n");

echo "successfully append!";

fclose($file);
?>