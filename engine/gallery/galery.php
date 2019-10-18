<?php
$dir = './public/img/';
if (!file_exists($dir)) {
    echo "Папка <b>{$dir}</b> не существует!";
    exit();
}
$aFiles = scandir($dir);

require_once "GaleryItem.php";
$galery = new GaleryItem($aFiles);

//foreach ($aFiles as $key => $fileName) {
//    $cats[$key] = new CatItem($fileName);
//}
var_dump($galery);
?>
<div class="row">
    <?php foreach ($galery->cats as $key => $cat) : ?>
        <div class="col s12 m6 l4">
            <div class="card">
                <div class="card-image">
                    <img src="
                    <?=
                    CATS_DIR . $cat->getMainPic()
                    ?>">
                    <span class="card-title"><?= $cat->name ?></span>
                    <a class="btn-floating halfway-fab waves-effect waves-light red modal-trigger"
                       href="#modal<?= $key ?>"><i class="material-icons">add</i></a>
                </div>
                <div class="card-content activator">
                    <span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">more_vert</i></span>
                    <p>Look up details</p>
                </div>
                <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4">Hi, I'm <?= $cat->name ?>!<i class="material-icons right">close</i></span>
                    <table>
                        <tbody>
                        <tr>
                            <td>Description</td>
                            <td><?= $cat->desc ?></td>
                        </tr>
                        <?php if ($cat->breed) : ?>
                        <tr>
                            <td>Breed</td>
                            <td><?= $cat->breed ?></td>
                        </tr>
                        <?php endif; ?>
                        <?php if ($cat->dateOfBirth) : ?>
                            <tr>
                                <td>Age</td>
                                <td><?= $cat->getAge() ?></td>
                            </tr>
                        <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div id="modal<?= $key ?>" class="modal">
            <div class="modal-content">
                <div style="min-height: 40vh; max-height: 100%"
                        class="carousel carousel-slider center">
                <?foreach ($cat->picNames as $key => $picName):?>
                    <div class="carousel-item white-text"
                    href="#<?= $key ?>!">
                        <h2>First Panel</h2>
                        <img src="<?= CATS_DIR.$picName?>">
                        <p class="white-text">This is your first panel</p>
                    </div>
                <?php endforeach;?>
                </div>
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

