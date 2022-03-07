<?php

abstract class Personnage
{
    protected $nom;

    protected $level;
    protected $experience;

    protected $strength;
    protected $dexterity;
    protected $constitution;
    protected $intelligence;
    protected $wisdom;
    protected $charisma;

    protected $strengthBonus;
    protected $dexterityBonus;
    protected $constitutionBonus;
    protected $intelligenceBonus;
    protected $wisdomBonus;
    protected $charismaBonus;

    protected $mastery;
    protected $ArmorClass;
    protected $initiative;
    protected $speed;

    protected $SavingThrowDtrength;
    protected $SavingThrowDexterity;
    protected $SavingThrowConstitution;
    protected $SavingThrowIntelligence;
    protected $SavingThrowWisdom;
    protected $SavingThrowCharisma;

    protected $passiveWisdom;

    protected $life;
    protected $tempLife;
    protected $lifeDice;

    protected $strengthSkills = ["athletics" => null];
    protected $dexteritySkills = ["acrobatics" => null, "sleightOfHand" => null, "stealth" => null];
    protected $intelligenceSkills = ["arcana" => null, "history" => null, "investigation" => null, "nature" => null, "religion" => null];
    protected $wisdomSkills = ["animalHandling" => null, "insight" => null, "medecine" => null, "perception" => null, "survival" => null];
    protected $charismaSkills = ["deception" => null, "intimidation" => null, "performance" => null, "persuasion" => null];

    protected $selectedSkills = [];

    public function __construct()
    {
    }
    public function getNom()
    {
        return $this->nom;
    }
    public function setExperience($experience)
    {
        $this->experience = $experience;

        return $this;
    }
    public function getStrength()
    {
        return $this->strength;
    }
    public function setStrength($strength)
    {
        $this->strength = $strength;

        return $this;
    }
    public function getDexterity()
    {
        return $this->dexterity;
    }
    public function setDexterity($dexterity)
    {
        $this->dexterity = $dexterity;

        return $this;
    }
    public function getConstitution()
    {
        return $this->constitution;
    }
    public function setConstitution($constitution)
    {
        $this->constitution = $constitution;

        return $this;
    }
    public function getIntelligence()
    {
        return $this->intelligence;
    }
    public function setIntelligence($intelligence)
    {
        $this->intelligence = $intelligence;

        return $this;
    }
    public function getWisdom()
    {
        return $this->wisdom;
    }
    public function setWisdom($wisdom)
    {
        $this->wisdom = $wisdom;

        return $this;
    }
    public function getCharismaBonus()
    {
        return $this->charismaBonus;
    }
    public function setCharismaBonus($charismaBonus)
    {
        $this->charismaBonus = $charismaBonus;

        return $this;
    }

    /**
     * Get the value of initiative
     */
    public function getInitiative()
    {
        return $this->initiative;
    }

    /**
     * Get the value of ArmorClass
     */
    public function getArmorClass()
    {
        return $this->ArmorClass;
    }

    /**
     * Get the value of passiveWisdom
     */
    public function getPassiveWisdom()
    {
        return $this->passiveWisdom;
    }

    /**
     * Get the value of life
     */
    public function getLife()
    {
        return $this->life;
    }

    /**
     * Set the value of life
     *
     * @return  self
     */
    public function setLife($life)
    {
        $this->life = $life;

        return $this;
    }

    /**
     * Get the value of tempLife
     */
    public function getTempLife()
    {
        return $this->tempLife;
    }

    /**
     * Set the value of tempLife
     *
     * @return  self
     */
    public function setTempLife($tempLife)
    {
        $this->tempLife = $tempLife;

        return $this;
    }
}
