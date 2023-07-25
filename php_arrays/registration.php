<?php

$students2022 = [
    0 => 'Mary',
    1 =>'Karen',
    2 =>'Michael',
    3 =>'Albert',
    4 =>'Charles',
];

$newStudents = [
    5 =>'Johnny',
    6 =>'Phillip',
    7 =>'Edward',
    8 =>'Patricia',
];

$students2023 = [...$students2022, 'Vinicius', ...$newStudents]; //the ... is an unpacker operator; can mean other things in other contexts, like spread operator 

array_push ($students2022, 'Alice', 'Bob', 'Newton'); // one way of adding new elements to the end of the array
$students2022[] = 'Marley';

array_unshift($students2022, 'Stephan', 'Stella'); //adds a new element to the beginning of the array

echo array_shift($students2022) . PHP_EOL;

echo array_pop ($students2022) . PHP_EOL; //removes the last element and returns this element

var_dump($students2022);




//array_merge merges the arrays in a new array ; can be used with string as keys, when the keys are duplicated it overwrite the values of the first arrays with the values of the same keys in post arrays

//another way to merge arrays is using the operator + always use the keys of the first array e never overwrite its values with the second one