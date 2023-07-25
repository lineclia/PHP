<?php

$telephones = ['(24) 99999 - 9999', '(21) 99999 - 9999', '(24) 2222 - 2222'];

foreach ($telephones as $telephone) {
    $validTelephone = preg_match(
        '/^\([0-9]{2}\) (9?[0-9]{4} - [0-9]{4})$/',
        $telephone,
        $correspondence
    ); 
    //reg is from regular expression

    if ($validTelephone) {
        echo 'Valid telephone' . PHP_EOL;
    } else {
        echo 'Invalid telephone' . PHP_EOL;
    }

    echo preg_replace (
        '#\(([0-9]{2})\) (9?[0-9]{4} - [0-9]{4})#',
        '(XX) \2',  
        $telephone
    ) . PHP_EOL;
}