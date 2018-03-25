<?php

namespace Tests\Unit\Avengers;
use PHPUnit\Framework\TestCase;
use Avengers\AvengersFactory as AvengersFactory;

class AvengersFactoryTest extends TestCase{

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Invalid character name
     */
    public function createShouldReturnInvalidArgumentExceptionWhenAFakeAvengerIsGiven(){
        AvengersFactory::create('Bob');
    }

    //@todo need to install some php-extensions before phpunit is installable
    public function createShouldReturnThorWhenNameThorIsProvided(){
        $result = AvengersFactory::create('Thor');
        //$this->assert();
    }
}