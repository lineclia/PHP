<?php

$grades = [
   [
    'student' => 'Jack',
    'grade' => 10,
   ],
   [
    'student' => 'Mary',
    'grade' => 6,
   ],
   [
    'student' => 'Anna',
    'grade' => 8,
   ],
];


usort($grades, function (array $grade1, array $grade2): int {
    return $grade1 ['grade'] <=> $grade2 ['grade'];
});
var_dump ($grades);

  /* the return above means the same as the code below:
     if ($grade1 ['grade'] > $grade2 ['grade']){
        return -1;
    }
    if ($grade1 ['grade'] < $grade2 ['grade']){
        return 1;
    }

    return 0; */
