<?php

require_once __DIR__ . '/DC/Hero.php';
require_once __DIR__ . '/Marvel/Hero.php';

use DC\Hero as DCHero;
use Marvel\Hero as MarvelHero;

$DC = new DCHero();
$Marvel = new MarvelHero();

echo "<h3>DC hero turn</h3>";
$DC->attack();
$DC->defend();

echo "<br>";

echo "<h3>Marvel hero turn</h3>";
$Marvel->attack();
$Marvel->defend();

