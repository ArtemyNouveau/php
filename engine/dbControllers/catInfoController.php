<?php
include_once DB_DIR.'db.php';
include DB_DIR.'catImgController.php';
include DB_DIR.'catBreedController.php';

function getAllCats () {
    return getQueryResult('select * from catagram.cat_info;');
}

function getCatByID ($ID) {
    return getQueryResult("select * from catagram.cat_info where ID = $ID;");
}

function getCatsByPopularity ($popularFirst) {
    if ($popularFirst) return getQueryResult('select * from catagram.cat_info order by likes desc;');
    return getQueryResult('select * from catagram.cat_info order by likes asc;');
}

function getCatsByPrice ($cheapFirst) {
    if ($cheapFirst) return getQueryResult('select * from catagram.cat_info order by price asc;');
    return getQueryResult('select * from catagram.cat_info order by price desc;');
}

function getCatsByAge ($youngFirst) {
    if ($youngFirst) return getQueryResult('select * from catagram.cat_info order by date_of_birth asc;');
    return getQueryResult('select * from catagram.cat_info order by date_of_birth desc;');
}

function getCats ($order = 'cheap') {
    switch ($order) {
        case 'cheap':
            $cats = getCatsByPrice(true);
            break;
        case 'expensive':
            $cats = getCatsByPrice(false);
            break;
        case 'popular':
            $cats = getCatsByPopularity(true);
            break;
        case 'unpopular':
            $cats = getCatsByPopularity(false);
            break;
        case 'young':
            $cats = getCatsByAge(true);
            break;
        case 'old':
            $cats = getCatsByAge(false);
            break;
        default:
            $cats = getCatsByPopularity(true);
    }
    foreach ($cats as $key => $cat) {
        $cats[$key]['img'] = getImgByCatID($cats[$key]['ID']);
        $cats[$key]['breed'] = getBreedByID($cats[$key]['breed_ID']);
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
