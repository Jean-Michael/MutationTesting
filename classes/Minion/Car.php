<?php

namespace Minion;

class Car
{
    private $capacity;
    public $minions = [];

    public function __construct($capacity)
    {
        $this->capacity = $capacity;
    }

    public function addMinion(Minion $minion)
    {
        if (count($this->minions) < $this->capacity) {
            $this->minions[] = $minion;
        }
    }
}