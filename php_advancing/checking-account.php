<?php

/* associated array : "map" where you have an index with a name that send you to a value 
    use [] to make an array of arrays (that should be indicated also with [])
*/

$account1 = [
    'holder' => 'Lívia',
    'balance' => 1000
];
$account2 = [
    'holder' => 'Maria',
    'balance' => 10000
];
$account3 = [
    'holder' => 'Joana',
    'balance' => 300
];

//those array we define the index

$checkingAccount = [$account1, $account2, $account3];

for ($i = 0; $i < count ($checkingAccount); $i++) {
    echo $checkingAccount [$i] ['holder'] . PHP_EOL;
}

