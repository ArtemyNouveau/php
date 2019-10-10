<?php
include_once "ThirdTask.php";

function filter($regions) {
    foreach ($regions as $key => $innerArr)
    {
        echo "Область $key";
        echo 'Города:';
        foreach ($innerArr as $val){
            mb_internal_encoding("UTF-8");
            $firstLetter = mb_substr($val, 0, 1);
            if ($firstLetter == "К") {
                echo ", $val";
            }
        }
        echo ". </br>";
    }
}

filter($regions);
