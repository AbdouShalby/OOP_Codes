<?php

/*
 * Class & Object
 * - Class Is A Blueprint That You Can Create Object From
 * - Object Is A Member In The Main Application
 * - Class Has Properties
 * - Variable Inside Class = [ Property ]
 * - Variable Outside Class = [ Variable ]
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

    public $ram;
    public $inch;
    public $space;
    public $color;
}

$iPhone6Plus = new AppleDevice();

echo "<pre>";
var_dump($iPhone6Plus);
echo "</pre>";

$iPhone7Plus = new AppleDevice();

echo "<pre>";
var_dump($iPhone7Plus);
echo "</pre>";