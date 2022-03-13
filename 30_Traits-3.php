<?php

/*
 * Trait => PHP 5.4
 * - A Mechanism For Code Reuse In Single Inheritance Languages Such As PHP.
 * - Problem With Extending Classes, Is That U Can Only Extend One. This Is A Limiting.
 * - With Traits Its Possible For PHP Classes To Inherit Methods & Properties From Multiple Sources.
 *
 * - You Cannot Extend Or Implements.
 * - You Cannot Instantiate.
 * - Its Supporting Class Not Replacing It.
 * - Can Have Methods.
 * - Have Priority Over Class.
 */

trait FingerPrint {
    public function fingerFeature(){
        echo "This Has Finger Print Feature<br>";
        return $this;
    }
}
trait ThreeDimensionTouch {
    public function threeD(){
        echo "This Is 3D Touch Feature<br>";
        return $this;
    }
}
trait FaceDetect {
    public function faceFeature(){
        echo "This Is Face Detect Feature<br>";
        return $this;
    }
}
trait AllFeatures {
    use FingerPrint, ThreeDimensionTouch, FaceDetect;
}

class iPhone {
    use AllFeatures;
    public function sayHello(){
        echo "Hello From iPhone";
        return $this;
    }
}
class Sony {
    use FaceDetect;
    public function sayHello(){
        echo "Hello From Sony";
        return $this;
    }
}
class Nokia {
    public function sayHello(){
        echo "Hello From Nokia";
        return $this;
    }
}

$iphone = new iPhone();
$iphone->fingerFeature()->threeD()->faceFeature()->sayHello();
echo "<pre>"; print_r($iphone); echo "</pre>";

$sony = new Sony();
$sony->faceFeature()->sayHello();
echo "<pre>"; print_r($sony); echo "</pre>";

$nokia = new Nokia();
$nokia->sayHello();
echo "<pre>"; print_r($nokia); echo "</pre>";