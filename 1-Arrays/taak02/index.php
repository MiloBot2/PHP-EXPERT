<?php

$medewerkers = [
    [
        'voornaam' => 'Willem',
        'achternaam' => 'van Oranje',
        'functie'  => 'koning'
    ],
    [
        'voornaam' => 'Donald',
        'achternaam' => 'Trump',
        'functie'  => 'president'
    ],
    [
        'voornaam' => 'Homer',
        'achternaam' => 'Simpson',
        'functie'  => 'fabrieksarbeider'
    ],
    [
        'voornaam' => 'Johan',
        'achternaam' => 'Cruyff',
        'functie'  => 'voetbalicoon'
    ],
    [
        'voornaam' => 'Badr',
        'achternaam' => 'Hari',
        'functie'  => 'Kickboxer'
    ]
];

for ($i = 0; $i < count($medewerkers); $i++) {
    echo $medewerkers[$i]['voornaam'] . " " . $medewerkers[$i]['achternaam'] . " " . $medewerkers[$i]['functie'] . "<br>";
}
