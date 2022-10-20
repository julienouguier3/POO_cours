<?php

namespace App;


use App\Interfaces\CanSwim;

class Enclosure
{
    /**@var Animal[] $animal */
    private $animals = [];

    public function addAnimal(Animal $animal): void
    {
        $this->animals[] = $animal;
    }

    public function __toString(): string
    {
        foreach ($animals as $index => $value) {
            echo $value->noise() . PHP_EOL;
        }
    }
}