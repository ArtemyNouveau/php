<?php

function getAllCats () {
    return getQueryResult('select * from catagram.cat_info;');
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
