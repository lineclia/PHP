<?php

$name = 'Lívia Menato';
$isFromMyFamily = str_contains($name, 'Menato');

//str_contains --> function to verifies if the element between '' exists in the $variable; bool results (t or f)

if ($isFromMyFamily) {
    echo "$name is from my family". PHP_EOL;
}    else {
     echo "$name is not from my family" . PHP_EOL;
    };
