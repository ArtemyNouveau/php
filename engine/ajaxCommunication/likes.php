<?php
include_once '../dbControllers/db.php';
include_once '../dbControllers/catInfoController.php';

if($_POST['isLike']){
    if ($_POST['isLike'] != 'false') {
        likeCat($_POST['catID']);
        echo getLikestByID($_POST['catID']);
    } else {
        dislikeCat($_POST['catID']);
        echo getDiislikestByID($_POST['catID']);
    }
}
