<?php

namespace App;

class Chiken extends Animal
{
    public $id;
    public $name = 'Chiken';
    public $goodsType = 'Egg';
    public function __construct($id)
    {
        $this->id = $id;
    }
    public function giveGoods():int
    {
        return random_int(0,1);
    }
    public function setNewId($id):void
    {
        $this->id=$id;
    }
}
