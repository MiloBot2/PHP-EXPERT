<?php
final class Auto
{
    public $merk;
    public $kleur;
    public $type;
    public $uitvoering;
    public $brandstof;

    function maakAuto()
    {
        $nieuweAuto = new Auto();
        $nogEenAndereAuto = $nieuweAuto;

        if ($nieuweAuto == $nogEenAndereAuto) {
            echo "nieuweAuto was identical to nogEenAndereAuto!";
            return true;
        }
        echo "an error occurred.";
        return false;
    }
}
