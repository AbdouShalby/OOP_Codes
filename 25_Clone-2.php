<?php

/*
 * Magic Methods
 * - Method With Special Name Start With Double Underscore [ __ ]
 *
 * Magic Method Clone & Clone Keyword
 * - Typical Copy Of Object In PHP Works By Reference.
 * Means Both ( Main And Copied ) Object Will Be Interlinked.
 *
 * - The Clone Operation Creates A So-Called Shallow Copy Of The Original Instance,
 * Which Means That It Constructs A New Object With All Fields Duplicated
 *
 * - The Above Technique Works With A Class Having Data Members That Are Of Intrinsic Type i.e int,
 * Boolean, String, Float, etc. However, This Technique Will Not Work With A Class That Had A Data
 * Member Which Is An Object Of Another Class. In Such A Scenario, The Cloned Object Continues To Share
 * The Reference Of The Data Member Object Of The Class That Was Cloned.
 *
 * - Magic Method Clone Executes When Object Is Performed.
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