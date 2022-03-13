<?php

class AppleDevice {
    // Properties
    // Public And Private And Protected Is Called Visibility Marker
    public $ram = "2GB";
    public $inch = "4 Inch";
    public $space = "16GB";
    public $color = "Silver";
    public $ownerName;

    // Constants
    const OWNERNAME = 5;

    // Methods
    public function setOwnerName() {
        if (strlen($this->ownerName) < self::OWNERNAME) {
            echo "Owner Name Cant Be Less Than ". self::OWNERNAME ." Characters";
        } else {
            echo "Welcome: " . $this->ownerName;
        }
    }
}

$iPhone6Plus = new AppleDevice();
$iPhone6Plus->ram = "2GB";
$iPhone6Plus->inch = "5 Inch";
$iPhone6Plus->space = "32GB";
$iPhone6Plus->color = "Gold";
$iPhone6Plus->ownerName = "Abdou";
$iPhone6Plus->setOwnerName();
echo "<br>" . AppleDevice::OWNERNAME;
echo "<br>" . $iPhone6Plus::OWNERNAME;
echo "<pre>";
var_dump($iPhone6Plus);
echo "</pre>";

$iPhone7Plus = new AppleDevice();
$iPhone7Plus->ram = "4GB";
$iPhone7Plus->inch = "5.5 Inch";
$iPhone7Plus->space = "256GB";
$iPhone7Plus->color = "Silver";
echo "<pre>";
var_dump($iPhone7Plus);
echo "</pre>";

$iPhone = new AppleDevice();
echo "<pre>";
var_dump($iPhone);
echo "</pre>";