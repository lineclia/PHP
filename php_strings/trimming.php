<?php

$csv = '.,Lívia Menato, 25,.';

echo trim($csv, '.,') . PHP_EOL;
echo ltrim($csv, '.,') . PHP_EOL;
echo rtrim($csv, '.,') . PHP_EOL;

//ltrim = left trim; rtrim = right trim
// the function trim only removes parameters from the extremities 