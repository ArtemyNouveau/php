<?php

function changeStr($string) : string {
    $string = preg_replace('/,/', "", $string);
    $arr = preg_split('/ /', $string);
    if (!$arr) return '';
    return implode("_", $arr);
}

echo changeStr("Lorem ipsum dolor sit amet, consectetur adipiscing elit.");
