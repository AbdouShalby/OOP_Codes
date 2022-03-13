<?php

/*
 * Methods Chaining
 * - When A Class's Methods Return The $this Keyword, They Can Be Chained Together
 */

class iPhone {
    public $name;
    public $email;

    public function pressPower() {
        echo "You Have Pressed The Power Button<br>";
        return $this;
    }
    public function bootPhone() {
        echo "The Phone Is Booting Now...<br>";
        return $this;
    }
    public function sayWelcome() {
        echo "Welcome To Phone<br>";
        return $this;
    }
}

$phone = new iPhone();

$phone->pressPower()->bootPhone()->sayWelcome();

echo "<pre>"; print_r($phone); echo "</pre>";