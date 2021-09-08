<?php
$provincies = [
    [
        'provincie' => 'Noord-Holland',
        'hoofdstad' => 'Haarlem',
        'bevolking' => 'Westers',
        'inwoners_gemeente' => '235.141',
    ],
];

foreach ($provincies as $provincie) {
    echo '<h2>' . $provincie['provincie'] . '</h2>';
    echo '<ul>';
    echo '<li>hoofdstad: ' . $provincie['hoofdstad'] . '</li>';
    echo '<li>bevolking: ' . $provincie['bevolking'] . '</li>';
    echo '<li>meeste inwoners: ' . $provincie['inwoners_gemeente'] . '</li>';
    echo '</ul>';
}
