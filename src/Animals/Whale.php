<?php

namespace App\Animals;


use App\Interfaces\CanSwim;

class Whale extends \App\Animal implements CanSwim
{
    protected function getNoise(): string
    {
        return 'splash';
    }
}