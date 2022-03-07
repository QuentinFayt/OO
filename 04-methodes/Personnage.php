<?php

class Personnage
{
    private  $nom;
    private  $forcePerso;
    private  $degats;
    private  $niveau;
    private  $experience;
    private  $vie;

    const DE_DE_VIE = 8;

    public function __construct(string $nom)
    {

        $this->setNom($nom);
        $this->setRandom();
    }

    public function getNom()
    {
        // récupération du nom de l'instance
        return $this->nom;
    }
    public function getForcePerso()
    {
        return $this->forcePerso;
    }
    public function getDegats()
    {
        return $this->degats;
    }
    public function getNiveau()
    {
        return $this->niveau;
    }
    public function getExperience()
    {
        return $this->experience;
    }
    public function getVie()
    {
        return $this->vie;
    }
    public function setNom($s)
    {
        if (is_string($s) && strlen($s) > 4 && strlen($s) < 100) {
            $this->nom = $s;
        } else {
            trigger_error("Nom non conforme", E_USER_NOTICE);
        }
    }
    public function setForcePerso($f)
    {
        if (is_int($f) && !empty($f)) {
            $this->forcePerso = $f;
        } else {
            trigger_error("Force non conforme", E_USER_NOTICE);
        }
    }
    public function setDegats(float $d)
    {
        if ($d >= 0) {
            $this->degats = $d;
        }
    }
    public function setNiveau(int $n)
    {
        $this->niveau = $n;
    }
    public function setExperience(int $e)
    {
        $this->experience = $e;
    }
    public function setVie(int $v)
    {
        $this->vie = $v;
    }

    private function setRandom()
    {
        $this->niveau = 1;
        $this->experience = 0;
        $this->forcePerso = mt_rand(0, 5);
        $this->degats = "+" . $this->forcePerso;
        $this->vie = mt_rand(1, self::DE_DE_VIE);
    }
}
