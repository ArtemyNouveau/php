<?php
function plus(int $a, int $b) : float {
    return $a+$b;
}

function minus(int $a, int $b) : float {
    return $a-$b;
}

function multiply(int $a, int $b) : float {
    return $a*$b;
}

function div(int $a, int $b) : float {
    if ($b == 0) return 0;
    return $a/$b;
}
