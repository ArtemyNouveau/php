<?php
include_once "CatItem.php";
include_once "const.php";

class GaleryItem
{
    var $cats = [];

    /**
     * GaleryItem constructor.
     */
    public function __construct()
    {
        $dir = CATS_DIR;
        if (!file_exists($dir)) {
            echo "Папка <b>{$dir}</b> не существует!";
            $this->cats[] = new CatItem('404.jpg');
            return;
        }

        $aFiles = scandir($dir);
        unset($aFiles[0], $aFiles[1]);
        foreach ($aFiles as $key => $fileName) {
            if (strpos($fileName, '404') === 0) continue;
            if (strpos(mime_content_type($dir.$fileName), 'image') === 0)
                $this->cats[$key] = new CatItem($fileName);
        }
    }


}
