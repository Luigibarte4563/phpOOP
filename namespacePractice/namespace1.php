<?php

require_once 'namespace2.php';

use namespace2\myClass;

$my = new myClass();
$my->sayHello();

use namespace2\Hello;

$hi = new Hello();
$hi->sayHi();   

