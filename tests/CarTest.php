<?php

use Minion\Minion;
use Minion\Car;

class CarTest extends \PHPUnit\Framework\TestCase
{
    public function testAddMinion()
    {
        $car = new Car(1);

        $car->addMinion(new Minion());

        $this->assertCount(1, $car->minions);
    }
}
