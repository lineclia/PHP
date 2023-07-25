<?php

$name = 'Lívia Menato ';
$email = ' liviamenato@gmail.com';
$password = 'áéíóú';
 //strlen : function that shows the size of the string, in bytes (each character is 1 byte, when you have an accent it count as 1 byte as well, so if you have a "é" in the string, it is counted as 2 bytes (one for the letter e and another one for the accent ´ ))

 echo mb_strlen($password) . PHP_EOL;

if (mb_strlen($password)  < 8) {
    echo 'Insecure password, less than 8 characters' . PHP_EOL;
};

$positionOfAt = strpos($email, '@');

$user = substr ($email, 0, $positionOfAt);

// substr ($wheretosearch, position that begins, position that ends); shows a part of the string
//strtoupper and strtolower : change characters to upper ou lower
//use mb_str when we have to consider the accents in a string 
//explode = uses a separator to take parts of a string and creates an array

echo mb_strtoupper($user) . PHP_EOL; 
echo substr($email, $positionOfAt + 1) . PHP_EOL;
 
list ($name, $surname) = (explode(' ', $name));

echo 'Name: ' , $name . PHP_EOL;
echo 'Surname : ', $surname . PHP_EOL; 

$csv = 'Lívia Menato, 25, liviamenato@gmail.com';
//common separation value

echo trim ($email) . PHP_EOL; 
//trim removes spaces 
