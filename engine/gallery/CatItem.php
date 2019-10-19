<?php

class CatItem
{
    var $ID;
    var $name;
    var $likes;
    var $dislikes;
    var $desc;
    var $price;
    var $isActual;
    var $breed;
    var $dateOfBirth;
    var $picNames;

    /**
     * CatItem constructor.
     * @param CatItemBuilder $catItemBuilder
     */
    public function __construct(CatItemBuilder $catItemBuilder)
    {
        $this->ID = $catItemBuilder->ID;
        $this->name = $catItemBuilder->name;
        $this->likes = $catItemBuilder->likes;
        $this->dislikes = $catItemBuilder->dislikes;
        $this->desc = $catItemBuilder->desc;
        $this->price = $catItemBuilder->price;
        $this->isActual = $catItemBuilder->isActual;
        $this->breed = $catItemBuilder->breed;
        $this->dateOfBirth = $catItemBuilder->dateOfBirth;
        $this->picNames = $catItemBuilder->picNames;
    }


    /**
     * @param mixed $ID
     */
    public function setID($ID): void
    {
        $this->ID = $ID;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @param mixed $likes
     */
    public function setLikes($likes): void
    {
        $this->likes = $likes;
    }

    /**
     * @param mixed $desc
     */
    public function setDesc($desc): void
    {
        $this->desc = $desc;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price): void
    {
        $this->price = $price;
    }

    /**
     * @param mixed $isActual
     */
    public function setIsActual($isActual): void
    {
        $this->isActual = $isActual;
    }

    /**
     * @param mixed $breed
     */
    public function setBreed($breed): void
    {
        $this->breed = $breed;
    }

    /**
     * @param mixed $dateOfBirth
     */
    public function setDateOfBirth($dateOfBirth): void
    {
        $this->dateOfBirth = $dateOfBirth;
    }

    /**
     * @param mixed $picNames
     */
    public function setPicNames($picNames): void
    {
        $this->picNames = $picNames;
    }

    /**
     * @return mixed
     */
    public function getMainPic()
    {
        return $this->picNames[0];
    }

    public function getAge()
    {
        if (!$this->dateOfBirth) return 0;
        $now = new DateTime("now");
        $interval = date_diff($now, $this->dateOfBirth);
        return $interval->format('%y%');
    }

    public function like(){

    }
}
