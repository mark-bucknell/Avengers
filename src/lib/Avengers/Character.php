<?php

namespace Avengers;

class Character{

    private $name;
    private $weapon;

    public function __construct(string $name, Weapon $weapon = null)
    {
        $this->name = $name;

        if(!is_null($weapon)){
            $this->weapon = $weapon;
        }
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setWeapon(Weapon $weapon): void
    {
        $this->weapon = $weapon;
    }

    public function getWeapon(): Weapon
    {
        return $this->weapon;
    }
}