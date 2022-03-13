<?php

/*
 * Encapsulation
 */

class AppleDevice {
    // Properties
    // Public And Private And Protected Is Called Visibility Marker
    public $ram = "1GB";
    public $inch = "4 Inch";
    public $space = "16GB";
    public $color = "Silver";
    private $lock;

    // Methods
    public function changeSpec($ra, $in, $sp, $co) {
        $this->ram      = $ra;
        $this->inch     = $in;
        $this->space    = $sp;
        $this->color    = $co;
    }

    public function changeLock($lo) {
        $this->lock = sha1($lo);
    }
}

$iPhone6Plus = new AppleDevice();
$iPhone6Plus->changeSpec("2GB", "5 Inch", "32GB", "Gold");

$iPhone6Plus->changeLock("Password@123456");

//$iPhone6Plus->lock = "Password@123";
//echo $iPhone6Plus->lock;

echo "<pre>";
var_dump($iPhone6Plus);
echo "</pre>";

$iPhone7Plus = new AppleDevice();
$iPhone7Plus->changeSpec("4GB", "5.5 Inch", "256GB", "Sliver");
echo "<pre>";
var_dump($iPhone7Plus);
echo "</pre>";

$iPhone = new AppleDevice();
echo "<pre>";
var_dump($iPhone);
echo "</pre>";