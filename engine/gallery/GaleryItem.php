<?php
include_once "CatItem.php";

class GaleryItem
{
    var $cats = [];

    /**
     * GaleryItem constructor.
     * @param string $dir
     */
    public function __construct(string $dir)
    {
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
