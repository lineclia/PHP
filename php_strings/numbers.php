<?php

//numeric strings = if starts with a number and have only spaces after, it is a numeric string, if has space in the beginning and only numbers, also a numeric string, but if it has letter than numbers and spaces, is not numeric string

$yearOfBirth = '1997';

$age = 2023 - $yearOfBirth;

echo $age . PHP_EOL;

if ($yearOfBirth == 1997) {
    echo 'YES' . PHP_EOL;
} else {
    echo 'NO' . PHP_EOL;
};