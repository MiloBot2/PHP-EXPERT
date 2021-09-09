<?php
final class Robot
{
    public $naam;
    public $geluid;
    public $voorstuwing;

    public function getNaam()
    {
        return $this->naam;
    }

    public function setNaam($naam)
    {
        $this->naam = $naam;

        return $this;
    }

    public function getSound()
    {
        return $this->geluid;
    }

    public function setGeluid($geluid)
    {
        $this->geluid = $geluid;

        return $this;
    }

    public function getVoorstuwing()
    {
        return $this->voorstuwing;
    }

    public function setVoorstuwing($voorstuwing)
    {
        $this->voorstuwing = $voorstuwing;

        return $this;
    }
}

//Wally

$wally = new Robot();

$wally->setNaam("wal-e");
$wally->setGeluid("beepboop");
$wally->setVoorstuwing("rollend");

//Wolly

$wolly = new Robot();

$wolly->setNaam("wol-e");
$wolly->setGeluid("boopbeep");
$wolly->setVoorstuwing("lopend");

echo "Wally's geluid: " . $wally->getSound() . "<br>Wolly's geluid: " . $wolly->getSound();
