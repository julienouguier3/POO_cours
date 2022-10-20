<?php

namespace App\Animals;

use App\Interfaces\CanFly;
use App\Interfaces\CanWalk;

class Dove extends \App\Animal implements CanFly,CanWalk
{

    protected function getNoise(): string
    {
        return 'Rou Rouuu';
    }
}