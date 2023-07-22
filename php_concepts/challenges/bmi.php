<?php

/* For this challenge we must display if a user is below, in or above the recommended BMI level

    To make this BMI calculation we need the weigh in kg splited by the height x height in m, 
    i.e : WEIGHT / HEIGHT ^2
    
    */

$height = 1.73;
$weight = 70;
$bmi = $weight / $height ** 2;

echo "Let's find out if your BMI is below, in or above the recommended level." . PHP_EOL;
echo "The result of your BMI is #bmi, in other words,";

    if ($imc < 18.5) {
        echo "below 18.5. You are with low weight.";
    } else if ($imc >= 18.5 && $imc < 25) {
        echo "it's between 18,5 e 24,9, so it's normal.";
    } else if ($imc >= 25) {
        echo "above 25, what means overweight.";
    }

    