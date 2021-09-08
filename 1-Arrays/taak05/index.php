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

$j = 1;

foreach ($medewerkers as $object => $key)
    foreach ($key as $subValue) {
        echo $subValue . ($j % 3 == 0 ? "<br><br>" : "<br>");
        $j++;
    }
