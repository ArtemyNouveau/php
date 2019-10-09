<?php

$i = -1;

do {
    $i++;
    if ($i == 0) {
        echo "$i is Zero</br>";
        continue;
    }
    switch ($i % 2){
        case 0:
            echo "$i is even</br>";
            break;
        case 1:
            echo "$i is not even</br>";
            break;
        default:
            echo "Something wrong with number '$i'</br>";
    }
} while ($i < 10);
