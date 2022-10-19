<?php

namespace App;

abstract class Animal
{
    //=============================Attribut 'private', lecture seulement 'readonly'===========//
    private readonly string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    //==================================Signature de la methode
    abstract protected function getNoise(): string;

    public function noise(): string
    {
        return $this->getNoise();
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }


}