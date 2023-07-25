<?php

$grades = [
    'Mary' => 6,
    'Karen' => 8,
    'Michael' => null, //null represents, in this case, that Michael exists, but he have not taken the  test
    'Albert' => 7,
    'Charles' => 9,
];

/* if I use "sort($parameter)" it sorts in ascending order
    using rsort, ir sorts in descending order
    asort and arsort, does the same as sort and rsort but keeps the keys (the indexes)
    ksort or krsort orders using the keys in alphabetic order (ascending [ksort] or descending [krsort]) 
    */

    ksort ($grades) . PHP_EOL;
    var_dump($grades);

    if (is_array ($grades)) {
        echo 'Yes, it is an array';
    }

    var_dump(array_is_list($grades));

    echo 'Mary took the test:' . PHP_EOL;
    var_dump (isset($grades['Mary']));

    echo 'Someone got 9?' . PHP_EOL;
    var_dump (in_array (9, $grades, true));

    echo 'Who got 9?' . PHP_EOL;
    var_dump (array_search(9, $grades, true));

    // function is_array verifies if the parameter is an array
    // array_key_exists sees if the key exist (independent of its value)
    // isset sees if the content exists, if is null, then it will return false
    // in_array verifies if the value exist