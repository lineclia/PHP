<?php

/*
-"run routine" = a code that will do the same thing all the time that I execute it

- isolate a part of the code 

- a function doesn't need to have a subroutine

- a function return a value, i.e. it represents a value after your execution. A subroutine it's only a isolated code

- Function nameOfTheRoutine ($parameter)
{
   code of the subroutine
}

-explicit the parameters of the subroutines and functions elevate the security of the code and is easier to search for mistakes

-for a function that will not return anything you can specify the function as a "void", that means that it is absent of value */ 

require_once 'funcoes.php';

$checkingAccount = [
    '123.456.789-10' => [
        'holder' => 'Lívia',
        'balance' => 1000
    ],
    '123.456.789-11' => [
        'holder' => 'Maria',
        'balance' => 10000
    ],
    '123.456.789-12' => [
        'holder' => 'Joana',
        'balance' => 300
    ]
    ];


$checkingAccount ['123.456.789-10'] = withdraw (
    $checkingAccount ['123.456.789-10'],
    200
);

$checkingAccount ['123.456.789-11'] = deposit (
    $checkingAccount ['123.456.789-11'],
    900
);

holderWithCapitalLetters ($checkingAccount['123.456.789-11']);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Checking Accounts</h1>

    <d1>
        <?php foreach($checkingAccount as $cpf => $account) { ?>
            <dt>
                <h3><?= $account ['holder']; ?> - <?php $cpf; ?> </h3>
            </dt>
            <dd> Balance:<?= $account['balance']; ?> 
            </dd>
            <?php } ?>
    </d1>
</body>
</html>


