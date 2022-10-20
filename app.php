<?php

use App\Animals\BubbleFish;
use App\Animals\CatFish;
use App\Animals\ClownFish;
use App\Animals\Dove;
use App\Animals\Elephant;
use App\Animals\Fish;
use App\Animals\Parrot;
use App\Animals\Zebra;

require_once 'vendor/autoload.php';

$animals = array(
    Fish::class => ['count' => 5,
        'name' => "poisson"],
    BubbleFish::class => ['count' => 3,
        'name' => 'poisson bulle'],
    CatFish::class => ['count' => 2,
        'name' => "poisson chat"],
    ClownFish::class => ['count' => 1,
        'name' =>'poisson clown'],
    Elephant::class =>['count' =>2,
        'name'=> 'elephant'],
    Zebra::class=> ['count' =>1,
        'name'=> 'zebre'],
    Parrot::class => ['count'=>10,
        'name'=>"perroquet"],
    Dove::class =>['count'=>2,
        'name'=>'colombe']);
var_dump($animals);

$enclos = new \App\Enclosure();

foreach ($animals as $index => $value) {
    /** @var App\Animal $index */
    for ($i = 0; $i < $value['count']; $i++) {
        $a = new $index($value['name']);
//        echo $a->getName() . " " . (string)($i + 1) . " | " . $a->noise() . PHP_EOL;
//        $enclos->addAnimal($instance);
//        /App\Zoo::addAnimal($index);
    }

}
echo $enclos;

//$bubble = new \App\Animals\BubbleFish('dora');
//$catf = new \App\Animals\CatFish('')
//echo $fish->getName()." : ".$fish->noise()."\n";





