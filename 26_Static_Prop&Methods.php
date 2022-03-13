<?php

/*
 * [ Static Keyword ]
 * - Static Properties/Methods Are Used To Access Properties/Methods In A Global Scope
 *
 * - Declaring Class Properties Or Methods As Static
 * Makes Them Accessible Without Needing An Instantiation Of The Class.
 *
 * - Because Static Methods Are Callable Without An Instance Of The Object Created,
 * The Pseudo-Variable $this Is Not Available Inside The Method Declared As Static.
 *
 * - A Property Declared As Static Cannot Be Accessed
 * With An Instantiated Class Object ( Though A Static Method Can ).
 *
 * - "One Of The Major Benefits To Using Static Properties
 * Is That They Keep Their Stored Values For The Duration Of The Script."
 */

class iPhone
{
    public static $name = "Abdou";
    public static $ram  = "2GB";

    public static function sayHello() {
        return "Hello";
    }
}

echo iPhone::sayHello();

//echo iPhone::$name . "<br>";
//echo iPhone::$ram . "<br>";
//echo iPhone::sayHello() . "<br>";