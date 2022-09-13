<?php

namespace App;

class Cow extends Animal
{
    public $id;
    public $name = 'COW';
    public $goodsType = 'Milk';
    public function __construct($id)
    {
        $this->id = $id;
    }
    public function giveGoods():int
    {
        return random_int(8, 12);
    }
    public function setNewId($id):void
    {
        $this->id = $id;
    }
}
