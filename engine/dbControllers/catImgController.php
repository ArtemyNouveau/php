<?php
include_once DB_DIR.'db.php';

function getImgByCatID ($ID) {
    if (is_null($ID)) return null;

    $imgs = [];
    $queryResult = getQueryResult("select img_name from catagram.cat_img where cat_ID = $ID;");

    foreach ($queryResult as $img) {
        $imgs[] = $img['img_name'];
    }
    return $imgs;
}
