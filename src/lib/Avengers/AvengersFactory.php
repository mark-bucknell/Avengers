<?php

namespace Avengers;

class AvengersFactory implements Factorable{

    const THOR = 'Thor';
    const IRON_MAN = 'Iron Man';
    const HULK = 'Hulk';

    public static function create($name): Character{

        switch($name){
            case self::THOR:
                $character = new Character($name);
                $weapon = new Weapon('Hammer');
                $character->setWeapon($weapon);
                break;
            case self::IRON_MAN:
                $character = new Character($name);
                $weapon = new Weapon('Iron Man Suit');
                $character->setWeapon($weapon);
                break;
            case self::HULK;
                $character = new Character($name);
               break;
            default:
                throw new \InvalidArgumentException('Invalid character name');
        }

        return $character;
    }
}