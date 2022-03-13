<?php

/*
 * Magic Methods
 * - Method With Special Name Start With Double Underscore [ __ ]
 *
 * Magic Method Clone & Clone Keyword
 * - Typical Copy Of Object In PHP Works By Reference.
 * Means Both ( Main And Copied ) Object Will Be Interlinked.
 */

class iPhone
{
    public $name;
    public $email;

    public function __construct($n, $e) {
        $this->name = $n;
        $this->email = $e;
    }
}

$main = new iPhone("Abdou", "A@A.Com");
$copy = clone $main;

$copy->name = "Ahmed";

echo "<pre>"; print_r($main); echo "</pre>";
echo "<pre>"; print_r($copy); echo "</pre>";