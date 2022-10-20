<?php

namespace App\Animals;




use App\Interfaces\CanWalk;

class Elephant extends \App\Animal implements CanWalk
{
    protected function getNoise(): string
    {
        return 'toooooout';
    }
}