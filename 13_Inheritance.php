<?php

/*
 * Inheritance
 */

class AppleDevice {
    // Properties
    // Public And Private And Protected Is Called Visibility Marker
    public $ram = "1GB";
    public $inch = "4 Inch";
    public $space = "16GB";
    public $color = "Silver";
    public $screen = "LCD";

    // Methods
    public function changeSpec($ra, $in, $sp, $co) {
        $this->ram      = $ra;
        $this->inch     = $in;
        $this->space    = $sp;
        $this->color    = $co;
    }
}

class Sony extends AppleDevice {
    // Properties
    // Public And Private And Protected Is Called Visibility Marker
    public $camera = "25MB";
}

$iPhone6Plus = new AppleDevice();
$iPhone6Plus->changeSpec("2GB", "5 Inch", "32GB", "Gold");
echo "<pre>"; print_r($iPhone6Plus); echo "</pre>";

$sony = new Sony();
$sony->changeSpec("2GB", "5 Inch", "32GB", "Gold");
echo "<pre>"; print_r($sony); echo "</pre>";