<?php

/*
 * Class Abstraction
 * - Cannot Be Instantiated [ Can't Create Object From ]
 * - Made For Other Classes To Inherit Prop & Methods From
 * - Can Have Methods And Properties
 * - Can Have Abstract Methods And None Abstracted Methods
 * - Abstract Methods [ Contains NoBody Codes ]
 *
 * * Rules To Go On
 * * Force Developer To Follow Your Methods
 */

abstract class MakeDevice {
    // Methods
    abstract public function testPerformance();
    abstract public function verifyOwner();
    abstract public function sayWelcome($n);
}

class iPhone extends MakeDevice {
    public $owner;

    public function testPerformance()
    {
        echo "Performance Test Is Good 100%";
    }
    public function verifyOwner()
    {
        echo "Owner Is Verified";
    }
    public function sayWelcome($s)
    {
        $this->owner = $s;
        echo "Welcome " . $s;
    }
}

class iPad extends MakeDevice {
    public $owner;

    public function testPerformance()
    {
        echo "Performance Test Is Good 100%";
    }
    public function verifyOwner()
    {
        echo "Owner Is Verified";
    }
    public function sayWelcome($x)
    {
        $this->owner = $x;
        echo "Welcome " . $x;
    }
}

$iPhone = new iPhone();
$iPhone->sayWelcome("Abdou");
echo "<pre>"; print_r($iPhone); echo "</pre>";

$iPad = new iPad();
$iPad->sayWelcome("Shalby");
echo "<pre>"; print_r($iPad); echo "</pre>";