<?php

$cars = [
    'LMS-2312' => [
    'brand' => 'Chevrolet',
    'model' => 'Onix',
    ],
    'ABC-4321' => [
    'brand' => 'VW',
    'model' => 'Golf',
    ],
    'CDB-0420'=> [
    'brand' => 'Honda',
    'model' => 'Civic',
    ]
];

foreach ($cars as $licensed_plate => $cars) {
    echo $licensed_plate . ':' . $cars ['brand'] . ',' . $cars ['model'] . PHP_EOL;
}

