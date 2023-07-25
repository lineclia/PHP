<?php

$text = 'Text with something fuck and shit';

echo str_replace (
    ['fuck', 'shit'], 
    ['f', 's'], 
    $text
) . PHP_EOL;

echo strtr($text, ['fuck' => 'f', 'shit' => 's']) . PHP_EOL;
echo strtr ($text, ['fuck' => 'f', 'shit' => 's']) . PHP_EOL; 