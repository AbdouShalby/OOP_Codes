<?php

/*
 * Namespace
 */

require "Apple2.php";

$iPhone = new Apple\Hardware\Phones\CreatePhone();
$iPhone->sayHello();
print_r($iPhone);

$tablet = new Apple\Hardware\Tablets\CreateTablet();
$tablet->sayHello();
print_r($tablet);