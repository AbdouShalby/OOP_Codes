<?php

/*
 * Magic Methods
 * - Method With Special Name Start With Double Underscore [ __ ]
 *
 * Call:
 * - Called When Invoking Function Not Accessible Or Not Found
 * - Accept 2 Parameters Required [ $Method Name, $Params ]
 */

class iPhone {
    public $name;
    public $ram;

    public function welcomeToApp($na, $ra) {
        $this->name = $na;
        $this->ram  = $ra;
        echo "Welcome " . $na . " Your Phone Has " . $ra . "GB ram";
    }

    public function __call($method, $args) {
        echo "The Method [ " . $method . " ] Not Found Or Not Accessible <br>";
        foreach ($args as $arg) {
            echo "Your Argument: " . $arg . "<br>";
        }
    }
}

$phone = new iPhone();
$phone->welcomeToMobile("Abdou", "2");
echo "<pre>"; print_r($phone); echo "</pre>";