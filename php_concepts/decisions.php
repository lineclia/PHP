<?php

$age = 17;
$numberOfPeople = 1;

echo "You can only enter if you're 18 or above, or";
echo "at least 16 years, accompanied. " . PHP_EOL;

/*  "or" ; "||"
    and ; &&    */

// to gather the instructions don't need to put in brackets if it's only one line of code

if ($age >= 18) 
        echo "You have $age years, you can enter alone.";
    else if ($idade >= 16 && $numberOfPeople > 1) 
        echo "You have $age years and are accompanied, so you can enter.";
    else 
        echo "You only have $age years. Access denied.";

echo PHP_EOL;
echo "Goodbye!";