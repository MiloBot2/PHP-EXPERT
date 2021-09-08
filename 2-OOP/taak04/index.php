<?php

final class Scooter
{
    public $kleur;
    public $merk;
    public $inhoudTank;

    function isLeeg()
    {
        if ($this->inhoudTank == 0) {
            return "De inhoudtank is leeg!";
        }
        return "De inhoudtank is nog niet leeg.";
    }
}

$piago = new Scooter();
$piago->merk = "piago";
$piago->kleur = "rood";
$piago->inhoudTank = 6;


$peugeot = new Scooter();
$peugeot->merk = "peugeot";
$peugeot->kleur = "zwart";
$peugeot->inhoudTank = 7;

echo "Piago status: " . $piago->isLeeg() . "<br>";
echo "Peugeot status: " . $peugeot->isLeeg();
