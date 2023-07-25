<?php

$gradesBimester1 = [
    'Mary' => 6,
    'Karen' => 8,
    'Michael' => 7,
    'Albert' => 7,
    'Charles' => 9,
];

$gradesBimester2 = [
    'Karen' => 8,
    'Albert' => 7,
    'Charles' => 9,
];

//array_diff is a function that will compare the arrays, only seeing the values (grades in this case)
//array_diff_key it ignores the values and sees only the keys
//array_diff_assoc sees the keys and the values 
//see php documentation for more array_diff 
//array_combine do the same as array_flip

$missedTestStudents = array_diff_key($gradesBimester1, $gradesBimester2); 
var_dump (array_keys ($missedTestStudents));
var_dump(array_values($missedTestStudents));