<?php

$data = [
    'name' =>'Mary',
    'grade' => 10,
    'age' => 24
];

extract($data);
var_dump($name, $grade, $age); // var_dump(compact('name', 'grade', 'age')); --> this is normally used when you want to add some values in html; in resume it creates an array

/* 
another way to make a list would be :

$data = [
    'name' => 'Mary',
    'grade' => 10,
    'age' => 24,
];
['name' => $name, 'grade' => $grade, 'age' => $age] = $data;

]

*/