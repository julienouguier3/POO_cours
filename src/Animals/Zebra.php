<?php

namespace App\Animals;


use App\Interfaces\CanWalk;

class Zebra extends \App\Animal implements CanWalk
{
    protected function getNoise(): string
    {
        return 'hiiiii';
    }
}