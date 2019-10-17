<?php

function getImgByCatID ($ID) {
    $imgs = [];
    $queryResult = getQueryResult("select img_name from catagram.cat_img where cat_ID = $ID;");

    foreach ($queryResult as $img) {
        $imgs[] = $img['img_name'];
    }
    return $imgs;
}
