<?php
require_once 'CatItem.php';

class catItemBuilder
{
    var $ID;
    var $name;
    var $likes;
    var $desc;
    var $price;
    var $isActual;
    var $breed;
    var $dateOfBirth;
    var $picNames;

    /**
     * CatItemBuilder constructor.
     */
    public function __construct()
    {
        $this->reset();
    }

    public function reset(): void
    {
        $this->ID = false;
        $this->name = false;
        $this->likes = false;
        $this->desc = false;
        $this->price = false;
        $this->isActual = false;
        $this->breed = false;
        $this->dateOfBirth = false;
        $this->picNames = false;
    }

    /**
     * @param mixed $ID
     */
    public function withID($ID): void
    {
        if (!is_numeric($ID)) return;
        $this->ID = intval($ID);
    }

    /**
     * @param mixed $name
     */
    public function withName($name): void
    {
        $this->name = $name;
    }

    /**
     * @param mixed $likes
     */
    public function withLikes($likes): void
    {
        if (!is_numeric($likes)) return;
        $this->likes = intval($likes);
    }

    /**
     * @param mixed $desc
     */
    public function withDesc($desc): void
    {
        $this->desc = $desc;
    }

    /**
     * @param mixed $price
     */
    public function withPrice($price): void
    {
        if (!is_numeric($price)) return;
        $this->price = intval($price);
    }

    /**
     * @param mixed $isActual
     */
    public function withIsActual($isActual): void
    {
        $this->isActual = boolval($isActual);
    }

    /**
     * @param mixed $breed
     */
    public function withBreed($breed): void
    {
        if ($breed == NULL) return;
        $this->breed = $breed;
    }

    /**
     * @param mixed $dateOfBirth
     */
    public function withDateOfBirth($dateOfBirth): void
    {
        $this->dateOfBirth = DateTime::createFromFormat('Y-m-j', $dateOfBirth);
    }

    /**
     * @param mixed $picNames
     */
    public function withPicNames($picNames, $includeFiles): void
    {
        foreach ($picNames as $picName) {
            if (in_array($picName, $includeFiles)) continue;
            $this->picNames[] = $picName;
        }
    }


    public function build()
    {
        if (
            $this->ID !== false &&
            $this->name !== false &&
            $this->likes !== false &&
            $this->desc !== false &&
            $this->price !== false &&
            $this->picNames !== false
        ) return new CatItem($this);

        return false;
    }


}
