<?php

namespace character;

abstract class Personnage
{
    protected $name;
    protected $level = 1;
    protected $life;
    protected $strength;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function __get($property)
    {
        return $this->$property;
    }

    protected function strike()
    {
    }
    protected function walk()
    {
    }
    protected function xpGain()
    {
    }
}
