<?php

$file = fopen("first.txt", "r");
while(!feof($file)) {
    echo fgets($file) . "<br>";
}

fclose($file);
?>