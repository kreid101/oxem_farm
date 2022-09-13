<?php

namespace App;

class Farm
{
    protected $animals;  // массив хранит всех добавленных животных в хлеву
    protected $AnimalAmount; // свойство для подсчета животных
    protected $goods; // массив хранит продукты 

    /*
    *метод для добавления животных 
    *$animal - имя класса 
    *$amount - количество
    */
    public function addAnimal(string $animal, int $amount = 1)
    {
        for ($i = 0; $i < $amount; $i++) {
            $this->animals[] = new $animal(uniqid());
        }
    }
    /*
    *Метод для вывода информации по количеству животных
    */
    public function getInfo()
    {
        $this->AnimalAmount = [];
        foreach ($this->animals as $animal) {
            if (!isset($this->AnimalAmount[$animal->name])) {
                $this->AnimalAmount[$animal->name] = 0;
            }
            $this->AnimalAmount[$animal->name] += 1;
        }
        foreach ($this->AnimalAmount as $key => $number) {
            print($key . '=' . $number . "\r\n");
        }
    }
    /*
    *методо для сбора продуктов 
    *$days- количество дней 
    */
    public function harvest(int $days = 1)
    {
        for ($i = 0; $i < $days; $i++)
            foreach ($this->animals as $animal) {
                if (!isset($this->goods[$animal->goodsType])) {
                    $this->goods[$animal->goodsType] = 0;
                }
                $this->goods[$animal->goodsType] += $animal->giveGoods();
            }
    }
    /*
    *Вывод информации по количеству собранных продуктов
    */
    public function showGoodsAmount()
    {

        foreach ($this->goods as $key => $good) {
            print($key . '=' . $good . "\r\n");
        }
    }
}
