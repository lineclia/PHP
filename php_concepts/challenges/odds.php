<?php
$i = 1; //counter can be represented with an i
$division = $i / 2;
$restOfDivision = $i % 2;

/* FIRST CHALLENGE WILL BE RUNNING A PROGRAM THAT DISPLAYS, ON THE USER'S SCREEN,
     ALL ODD NUMBERS FROM 0 TO 100. TIP: TO KNOW IF A NUMBER IS ODD OR NOT IN PHP,
     WE CAN USE THE DIVISION BY 2 REMAINDER OPERATOR - IF THE REMAINDER IS EQUAL TO ZERO, THE NUMBER IS EVEN,
     OTHERWISE, IT IS ODD
    */



for ($i =1; $i <= 100; $i++) {
   $restOfDivision = $i % 2;
    
   if ($restOfDivision == 0) {
        continue;
    } else {
        echo "#$i" . PHP_EOL;
    }
}

/* Teacher's solution:

for ($counter = 1; $counter < 100; $counter++) {
     if ($counter % 2 !=0) {
         echo $counter . PHP_EOL;
    }
}