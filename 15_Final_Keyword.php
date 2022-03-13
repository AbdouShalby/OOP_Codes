<?php

/*
 * Inheritance | Final Keyword
 * Can Be Used For Method Or Main Class To Be Can't Extendable [ Make A Break For Encapsulation ]
 */

class AppleDevice {
    // Properties
    // Public And Private And Protected Is Called Visibility Marker
    public $ram = "1GB";
    public $inch = "4 Inch";
    public $space = "16GB";
    public $color = "Silver";
    public $screen = "LCD";
    public $name;

    // Methods
    public function changeSpec($ra, $in, $sp, $co) {
        $this->ram      = $ra;
        $this->inch     = $in;
        $this->space    = $sp;
        $this->color    = $co;
    }

    public function sayHello($n) {
        $this->name = $n;
        echo "Welcome To " . $n;
    }
}

class Sony extends AppleDevice {
    // Properties
    // Public And Private And Protected Is Called Visibility Marker
    public $ram = "1GB";
    public $camera = "25MB";
}

$iPhone6Plus = new AppleDevice();
$iPhone6Plus->changeSpec("2GB", "5 Inch", "32GB", "Gold");
$iPhone6Plus->sayHello("iPhone");
echo "<pre>"; print_r($iPhone6Plus); echo "</pre>";

$sony = new Sony();
$sony->changeSpec("2GB", "5 Inch", "32GB", "Gold");
$sony->sayHello("Sony");
echo "<pre>"; print_r($sony); echo "</pre>";