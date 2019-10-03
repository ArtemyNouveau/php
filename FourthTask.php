<?php
include_once 'ThirdTask.php';

function calc(int $a = 0, $operator = '+', int $b = 0) : float {
    switch ($operator){
        case '+':
            return plus($a, $b);
        case '-':
            return minus($a, $b);
        case '*':
            return multiply($a, $b);
        case '/':
            return div($a, $b);
        default:
            return 0;
    }
}
