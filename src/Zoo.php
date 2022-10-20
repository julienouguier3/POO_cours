<?php

namespace App;

use App\Interfaces\CanSwim;

class Zoo
{
    private static ?Enclosure $aquarium = null;
    private static ?Enclosure $aviary = null;
    private static ?Enclosure $fence = null;

    /**
     * @return Enclosure|null
     */
    public static function getAquarium(): ?Enclosure
    {
        return self::$aquarium;
    }

    public static function getAviary(): ?Enclosure
    {
        return self::$aquarium;
    }

    public static function getFence(): ?Enclosure
    {
        return self::$aquarium;
    }

    /**
     * @param Enclosure|null $aquarium
     */
    public static function addAnimal(Animal $a): void
    {
        if ($a instanceof CanSwim) {
            if (is_null(self::$aquarium)) {
                self::$aquarium = new Enclosure;
            }
            self::$fence->addAnimal($a);
        }

    }
    public function visitTheZoo():void{
        echo self::$fence . PHP_EOL . self::$aquarium . PHP_EOL . self::$aviary;}


}