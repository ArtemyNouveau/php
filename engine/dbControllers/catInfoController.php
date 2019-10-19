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

function getLikestByID ($ID):int {
    return intval(getQueryResult("select likes from catagram.cat_info where ID = $ID;")[0]['likes']);
}

function getDiislikestByID ($ID) {
    return intval(getQueryResult("select dislikes from catagram.cat_info where ID = $ID;")[0]['dislikes']);
}

function likeCat($ID) {
    $likes = getLikestByID($ID)+1;
    execQuery("UPDATE catagram.cat_info SET likes = $likes WHERE (ID = $ID);");
}

function dislikeCat($ID) {
    $dislikes = getDiislikestByID($ID)+1;
    execQuery("UPDATE catagram.cat_info SET dislikes = $dislikes WHERE (ID = $ID);");
}
