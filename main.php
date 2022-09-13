<?php 
//автозагрузка
require_once('vendor/autoload.php');


use App\Farm;

$farm=new Farm();  //создание экземпляра класса farm
$farm->addAnimal(App\Cow::class,10);  // добавление животных 
$farm->addAnimal(App\Chiken::class,20);
$farm->getInfo(); // вывод информации о количестве животных
$farm->harvest(7); // сбор продуктов в качестве аргумента принимается количество дней 
$farm->showGoodsAmount(); // вывод количества собранных продуктов 
$farm->addAnimal(App\Cow::class,1);
$farm->addAnimal(App\Chiken::class,5);
$farm->getInfo();
$farm->harvest(7);
$farm->showGoodsAmount();



?>