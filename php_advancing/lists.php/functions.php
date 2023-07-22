<?php

function withdraw (array $account, float $valueToWithdraw) : array 
{
    if ($valueToWithdraw > $account ['balance']) {
        showMessage ("You cant withdraw");
    } else {
        $account ['balance'] -= $valueToWithdraw;
    }

    return $account;
}

function deposit (array $account, float $valueToDeposit) : array
{
    if ($valueToDeposit > 0) {
    $account ['balance'] += $valueToDeposit;
    } else {
        echo "Deposits needs to be a positive value";
    }
    return $account;
}
function showMessage (string $message)
{
    echo $message . '<br>';
}

function holderWithCapitalLetters (array &$account)
{
    $account ['holder'] = mb_strtoupper($account ['holder']);
}

function showAccount (array $account)
{
    ['holder' => $holder, 'balance' => $balance] = $account;
    echo " <li> Holder: $holder . Balance: $balance </li>";
}