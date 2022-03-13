<?php

/*
 * Magic Methods
 * - Method With Special Name Start With Double Underscore [ __ ]
 *
 * Construct:
 * -- Automatic Called When Object Is Created
 * -- Can Be Inherited
 *
 * Destruct:
 * -- Automatic Called When Object Is Destroyed
 */

class iPhone {
    public $name;
    public $ram;

    public function __construct($na, $ra) {
        $this->name = $na;
        $this->ram = $ra;
        echo "Hello " . $na . " Your Device Has " . $ra . "GB Ram";
    }
}

$phone = new iPhone("Abdou", "2");
echo "<pre>"; print_r($phone); echo "</pre>";