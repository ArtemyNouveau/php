<?php
include_once 'FourthTask.php';

$a = mt_rand(-10, 10);
$b = mt_rand(-10, 10);

if ($a >= 0 && $b >= 0) {
    echo "$a - $b = ";
    echo calc($a, '-', $b);
} elseif ($a < 0 && $b < 0) {
    echo "($a) * ($b) = ";
    echo calc($a, '*', $b);
} elseif ($a < 0) {
    echo "$a + $b = ";
    echo calc($a, '+', $b);
} else {
    echo "$b + $a = ";
    echo calc($a, '+', $b);
}
