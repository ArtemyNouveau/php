<?php

function getNums($left, $right, $num){
    if ($left > $right) return;

    while ($left < $right){
        if (($left % $num) == 0) echo "$left, ";
        $left++;
    }
}

getNums(3, 20, 4);
