<?php

$checkingAccount = [
12345678910 => [
    'holder' => 'Lívia',
    'balance' => 1000
],
12345678911 => [
    'holder' => 'Maria',
    'balance' => 10000
],
12345678912 => [
    'holder' => 'Joana',
    'balance' => 300
]
];

$checkingAccount [] = [
    'holder' => 'Claudia',
    'balance' => 2000
];

//with foreach we don't need to 'know' the index
foreach ($checkingAccount as $cpf => $account) {
    echo $cpf . "" . $account['holder'] . PHP_EOL;
}