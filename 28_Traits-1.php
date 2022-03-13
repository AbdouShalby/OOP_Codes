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

class iPhone {
    public $user;
    public $email;
}

$phone = new iPhone();
echo "<pre>"; print_r($phone); echo "</pre>";