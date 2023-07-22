<?php

// DISPLAY THE TABLE OF ANY NUMBER FROM 1 TO 9 (i.e. multiplied by 1, 2, 3, up to 9)

echo "This code aims to display the result of the multiplication table of the number 7 with multiplications from 0 to 9";

$table = 7;

for ($i = 0; $i < 10; $i++) {
    $multiplication = $i * $table;
    echo "$table x $i = $multiplication" . PHP_EOL;
} 