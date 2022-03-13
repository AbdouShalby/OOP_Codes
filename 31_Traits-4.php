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

trait MyFeature1 {
    public function feature() {
        echo "This Is Feature Number One<br>";
    }
}

trait MyFeature2 {
    public function feature() {
        echo "This Is Feature Number Two<br>";
    }
}

class iPhone {
    use MyFeature1, MyFeature2 {
        // [Trait Name] [::] [Method Name] [Keyword as] [New Name]
        MyFeature2::feature as afeat;

        // [Trait Name] [::] [Method Name] [Keyword insteadof] [Other Method Name]
        MyFeature1::feature insteadof MyFeature2;
    }
}

$iphone = new iPhone();
$iphone->feature();
$iphone->afeat();
echo "<pre>"; print_r($iphone); echo "</pre>";