<?php

/*
 * Auto Load Classes
 */

spl_autoload_register(function ($class) {
    require "AutoloadClasses/" . $class . ".class.php";
});

$var = new Testing3();
print_r($var);