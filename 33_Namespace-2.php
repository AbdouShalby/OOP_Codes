<?php

/*
 * Namespace
 */

require "Apple.php";
require "Sony.php";
require "LG.php";

$iPhone = new Apple\CreatePhone();
$iPhone->sayHello();
print_r($iPhone);