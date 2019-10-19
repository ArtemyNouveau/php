<?php
include_once "CatItemBuilder.php";

class GaleryItem
{
    var $cats = [];

    /**
     * GaleryItem constructor.
     * @param $includeFiles
     */
    public function __construct($includeFiles)
    {
        $this->cats = [];

//        $aFiles = scandir($catImgDir);
//        unset($aFiles[0], $aFiles[1]);
//        foreach ($aFiles as $key => $fileName) {
//            if (strpos($fileName, '404') === 0) continue;
//            if (strpos(mime_content_type($catImgDir.$fileName), 'image') === 0)
//                $this->cats[$key] = new CatItem($fileName);
//        }
        $this->buildCats(getCatsWithIMG(), $includeFiles);
    }

    public function buildCats ($queryCatsResult, $includeFiles): void {
        $catBuilder = new CatItemBuilder();
        foreach ($queryCatsResult as $cat) {
            $catBuilder->reset();

            $catBuilder->withID($cat['ID']);
            $catBuilder->withName($cat['name']);
            $catBuilder->withLikes($cat['likes']);
            $catBuilder->withDislikes(($cat['dislikes']));
            $catBuilder->withDesc($cat['description']);
            $catBuilder->withPrice($cat['price']);
            $catBuilder->withIsActual($cat['is_actual']);
            $catBuilder->withBreed($cat['breed']);
            $catBuilder->withDateOfBirth($cat['date_of_birth']);
            $catBuilder->withPicNames($cat['img'], $includeFiles);

            $catItem = $catBuilder->build();
            if ($catItem !== false)
                $this->cats[] = $catItem;
        }
    }
}
