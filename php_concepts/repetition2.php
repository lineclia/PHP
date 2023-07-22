<?php

//$counter + 1 use counter++

for ($counter = 1; $counter <= 15; $counter++) {
    if ($counter == 13){
        continue; //means ignore the 13
    }
    echo "#$counter" . PHP_EOL;
}
