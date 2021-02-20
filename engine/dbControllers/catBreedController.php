<?php
include_once DB_DIR.'db.php';

function getBreedByID ($ID) {
    if (is_null($ID)) return null;
    $queryResult = getQueryResult("select breed_name from catagram.cat_breed where ID = $ID;");
    return $queryResult[0]['breed_name'];
}

function getBreedList () {
    return getQueryResult("select breed_name from catagram.cat_breed");
}
