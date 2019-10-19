<?php
$dir = PUBLIC_DIR.'img/';
if (!file_exists($dir)) {
    echo "Папка <b>{$dir}</b> не существует!";
    exit();
}
$aFiles = scandir($dir);

require_once "GaleryItem.php";
$galery = new GaleryItem($aFiles);

?>
<div class="row">
    <?php foreach ($galery->cats as $key => $cat) : ?>
        <div class="col s12 m6 l4">
            <div class="card">
                <div class="card-image">
                    <img src="
                    <?= CATS_DIR . $cat->getMainPic() ?>">
                    <span class="card-title"><?= $cat->name ?></span>
                    <a class="btn-floating halfway-fab waves-effect waves-light red modal-trigger"
                       href="#modal<?= $key ?>"><i class="material-icons">add</i></a>
                </div>
                <div class="card-content activator">
                    <span class="card-title activator grey-text text-darken-4">Look up details<i
                                class="material-icons right">more_vert</i></span>
                </div>
                <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4">Hi, I'm <?= $cat->name ?>!<i
                                class="material-icons right">close</i></span>
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
        <div style="max-height: 90%" id="modal<?= $key ?>" class="modal">
            <div class="modal-content">
                <div id="car-<?=$cat->ID?>"
                     style="min-height: 40vh; max-height: 100%"
                     class="carousel carousel-slider center">
                    <?php if (count($cat->picNames) > 1) : ?>
                        <div class="carousel-fixed-item center">
                            <a class="prev arrow-btn btn-floating waves-effect waves-light left"
                               herf="#prev"><i class="material-icons">keyboard_arrow_left</i></a>

                            <a class="next arrow-btn btn-floating waves-effect waves-light right"
                               herf="#next"><i class="material-icons">keyboard_arrow_right</i></a>
                        </div>
                    <?php endif; ?>
                    <?php foreach ($cat->picNames as $key => $picName): ?>
                        <div class="carousel-item white-text"
                             href="#!" style="background: #fafafa">
                            <p class="grey-text text-darken-4">
                                <button onclick="like(<?=$cat->ID?>, this)"
                                        class="like btn waves-effect waves-light"
                                        key="<?=$cat->ID?>"
                                        type="submit"
                                        name="action"><?=$cat->likes?>
                                    <i class="material-icons right">thumb_up</i>
                                </button>
                                <button onclick="dislike(<?=$cat->ID?>, this)"
                                        class="dislike btn waves-effect waves-light"
                                        type="submit"
                                        key="<?=$cat->ID?>"
                                        name="action"><?=$cat->dislikes?>
                                    <i class="material-icons left">thumb_down</i>
                                </button>
                            </p>
                            <img class="modal-img" src="<?= CATS_DIR . $picName ?>">
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <script async>
                initCarouselBtn(<?=$cat->ID?>)
            </script>
            <div class="modal-footer">
                <a href="#" class="modal-close waves-effect waves-green btn-flat">Nice cat</a>
            </div>
        </div>
        <?php endforeach; ?>
</div>

