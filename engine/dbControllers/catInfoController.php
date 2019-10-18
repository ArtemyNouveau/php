<?php

function getAllCats () {
    return getQueryResult('select * from catagram.cat_info;');
}

function getCatByID ($ID) {
    return getQueryResult("select * from catagram.cat_info where ID = $ID;");
}

function getCheepCatsFirst () {
    return getQueryResult('select * from catagram.cat_info order by price asc;');
}

function getCatsWithIMG () {
    $cats = getAllCats();
    foreach ($cats as $key => $cat) {
        $cats[$key]['img'] = getImgByCatID($cats[$key]['ID']);
    }
    return $cats;
}

function getCatWithIMGByID ($ID) {
    $cat = getCatByID($ID);
    $cat[0]['img'] = getImgByCatID($cat[0]['ID']);

    return $cat;
}
