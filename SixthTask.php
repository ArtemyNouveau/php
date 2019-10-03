<?php
function power(float $val, $pow) : float {
    if ($pow > 0) return $val*power($val, $pow-1);
    return 1;
}
