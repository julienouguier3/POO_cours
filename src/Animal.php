<?php

namespace App;

abstract class Animal
{
    //=============================Attribut name privé
    private string $main;

    //==========================Get()lecture
    public function getAnimal()
    {
        return $this->main;
    }

    protected abstract function getNoise()
    {
        return $this->main;
    }
//    public function setAnimal($main)
//    {
//        $this->main = $main;
//    }


}