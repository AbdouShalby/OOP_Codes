<?php

/*
 * Class & Object
 * - Class Is A Blueprint That You Can Create Object From
 * - Object Is A Member In The Main Application
 * - Class Has Properties & Methods
 * - Variable Inside Class = [ Property ]
 * - Variable Outside Class = [ Variable ]
 * - Function Inside Class = [ Method ]
 * - Function Outside Class = [ Function ]
 *
 * - [ class ] = Class Keyword
 * - [ new ] = New Object Keyword
 * - [ Public, Private, Protected ] = Visibility Markers
 * - [ -> ] Object Operator
 *
 * Example
 * Apple
 * - Class          = Apple Blueprint Design
 * - Object         = iPhones That China Made
 * - Application    = Apple Store
 *
 * Web Application Registration
 * - Class          = Code To Add New Member
 * - Object         = The Member
 * - Application    = Web Application Registration
 *
 * Blog System
 * - Class          = Code To Add New Post, Article, News, Information
 * - Object         = Post, Article, News, Information
 * - Application    = Blog System
 */

class AppleDevice {
    // Properties
    // Public And Private And Protected Is Called Visibility Marker
    public $ram = "2GB";
    public $inch = "4 Inch";
    public $space = "16GB";
    public $color = "Silver";

    // Methods
    public function doubleHomePressed() {
        echo "This Device Does Not Support This Feature";
    }
}

$iPhone6Plus = new AppleDevice();
$iPhone6Plus->ram = "2GB";
$iPhone6Plus->inch = "5 Inch";
$iPhone6Plus->space = "32GB";
$iPhone6Plus->color = "Gold";
$iPhone6Plus->doubleHomePressed();
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