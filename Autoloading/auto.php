<?php

$path = __DIR__ . '/../challenge/banking2.php';
$path2 = __DIR__ . '/../challenge/banking2.php';

if(!file_exists($path)) {
    die("File not found!");
}

require_once $path; 
require_once $path2;

