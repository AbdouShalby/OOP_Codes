<?php

/*
 * Magic Methods
 * - Method With Special Name Start With Double Underscore [ __ ]
 *
 * Get:
 * - Called When Getting a Property Not Accessible Or Not Found
 * - Accept One Parameter [ $Prop ]
 *
 * Set:
 * - Called When Setting a Value To Property Not Accessible Or Not Found
 * - Accept Two Parameters [ $Prop, $Value ]
 */

class iPhone {
    public $name;
    public $ram;
    private $coloring;

    public function __set($porp, $val) {
        echo "The Property [ " . $porp . " ] Is Not Found Or Not Accessible <br>";
        echo "And You Can't Assign This Value [ " . $val . " ] To It <br>";
    }
}

$phone = new iPhone();
$phone->coloring = "Red";
$phone->notfound = "Testing";
echo "<pre>"; print_r($phone); echo "</pre>";