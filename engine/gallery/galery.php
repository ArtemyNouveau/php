<?php
$dir = './public/img/';
if (!file_exists($dir)) {
    echo "Папка <b>{$dir}</b> не существует!";
    exit();
}
$aFiles = scandir($dir);

include_once "GaleryItem.php";
$galery = new GaleryItem(CATS_DIR);

foreach ($aFiles as $key => $fileName) {
    $cats[$key] = new CatItem($fileName);
}
?>
<div class="row">
    <?php foreach ($galery->cats as $key => $cat) : ?>
        <div class="col s12 m6 l4">
            <div class="card">
                <div class="card-image">
                    <img src="
                    <?php
                    if (strpos($cat->picName, '404') === 0)
                        echo IMG_DIR . $cat->picName;
                    else echo CATS_DIR . $cat->picName
                    ?>">
                    <span class="card-title"><?= explode('.', $cat->picName)[0] ?></span>
                    <a class="btn-floating halfway-fab waves-effect waves-light red modal-trigger"
                       href="#modal<?= $key ?>"><i class="material-icons">add</i></a>
                </div>
                <div class="card-content">
                    <p><a href="#">Check out my profile</a></p>
                </div>
            </div>
        </div>
        <div id="modal<?= $key ?>" class="modal">
            <div class="modal-content">
                <h4><?= explode('.', $cat->picName)[0] ?></h4>
                <img class="modalImg" src="<?= CATS_DIR . $cat->picName ?>">
            </div>
            <div class="modal-footer">
                <a href="#!" class="modal-close waves-effect waves-green btn-flat">Nice cat</a>
            </div>
        </div>
        <?php
        if (strpos($cat->picName, '404') === 0) break;
    endforeach;
    ?>
</div>

