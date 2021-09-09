<?php
final class Lamp
{
    public $kleur;
    public $helderheid;
    public $isAan;

    public function setStatus($status)
    {
        $this->isAan = $status;
    }

    public function isAanVal($booleantje)
    {
        return $booleantje || $booleantje == "true" ? "true" : "false";
    }
}

$woonkamerLamp = new Lamp();
$woonkamerLamp->kleur = "geel";
$woonkamerLamp->helderheid = "zacht";
$woonkamerLamp->isAan = true;

$woonkamerLamp->setStatus(false);

echo "Woonkamerlamp staat: " . $woonkamerLamp->isAanVal($woonkamerLamp->isAan);

$keukenLamp = new Lamp();
$keukenLamp->kleur = "wit";
$keukenLamp->helderheid = "vel";
$keukenLamp->isAan = false;
