<?php

class Auto
{
    public $merk = "Tesla";
    public $kleur = "rood";
    public $type = "model 3";
    public $uitvoering = "cabrio";
    public $brandstof = "elektriciteit";

    public function loggProperties()
    {
        echo "Auto merk: " . $this->merk . "<br>";
        echo "Kleur van de auto: " . $this->kleur . "<br>";
        echo "Auto type: " . $this->type . "<br>";
        echo "Uitvoering van de auto: " . $this->uitvoering . "<br>";
        echo "Brandstof van de auto: " . $this->brandstof . "<br>";
    }
}

$autootje = new Auto();
$autootje->loggProperties();
