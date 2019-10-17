<?php

class CatItem
{
    var $likes;
    var $picName;

    /**
     * Cat constructor.
     * @param $likes
     * @param $picPath
     */
    public function __construct($picPath)
    {
        $this->likes = rand(3, 20);
        $this->picName = $picPath;
    }

    /**
     * @return int
     */
    public function getLikes(): int
    {
        return $this->likes;
    }

    /**
     * @return mixed
     */
    public function getPicName() : string
    {
        return $this->picName;
    }

    /**
     * @param int $likes
     */
    public function addlike()
    {
        $this->likes++;
    }
}

$cat = new CatItem('as');
$cat->getPicName();
