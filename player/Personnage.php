<?php

namespace character;

abstract class Personnage
{
    private $name;
    private $experience_treshold;
    private $ratio = 300;

    protected $level = 1;
    protected $experience;
    protected $life;
    protected $strength;

    public function __construct(string $name)
    {
        $this->name = $name;
        $this->experience_treshold = 300;
    }

    public function __get(string $property): string
    {
        return property_exists($this, $property) ? $this->$property : "Not an existing property!";
    }

    public function strike(Personnage $target)
    {
    }

    protected function gainExp(int $exp)
    {
        if ($this->level < 20) {
            $this->experience += $exp;
            if ($this->experience >= $this->experience_treshold) {
                $this->gainLvl();
            }
        } else {
            $this->experience = 0;
        }
    }
    private function gainLvl()
    {
        if ($this->level < 20) {
            $this->level++;
            $this->experience -= $this->experience_treshold;
            $this->moveExpTreshold();

            echo $this->name . " levels up! He is now level " . $this->level . "</br>";

            if ($this->experience >= $this->experience_treshold) {
                $this->gainLvl();
            }
        } else {
            $this->experience = 0;
        }
    }
    private function moveExpTreshold()
    {
        $expXTresh = ($this->level - 1) * $this->ratio;
        $this->experience_treshold = ($expXTresh + ($expXTresh / 2)) * 2;
    }
}
