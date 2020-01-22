<?php
$array = [
    "10/01/2019" => [
        [
            'titolo' => 'Post 1',
            'autore' => 'Andrea Paperini',
            'testo' => 'Testo post 1'
        ],
        [
            'titolo' => 'Post 2',
            'autore' => 'Emanuele Fantozzi',
            'testo' => 'Testo post 2'
        ]
    ],
    "10/02/2019" => [
        [
            'titolo' => 'Post 3',
            'autore' => 'Fabio Burelli',
            'testo' => 'Testo post 3'
        ]
    ],
    "10/03/2019" => [
        [
            'titolo' => 'Post 4',
            'autore' => 'Marco Costa',
            'testo' => 'Testo post 4'
        ],
        [
            'titolo' => 'Post 5',
            'autore' => 'Alessandro Cintoi',
            'testo' => 'Testo post 5'
        ],
        [
            'titolo' => 'Post 6',
            'autore' => 'Marcello Palla',
            'testo' => 'Testo post 6'
        ]
    ],
];
// uso un foreach per prendere tutti i dati, prima il chiave/valore, poi prendo la chiave del valore preso in precedenza e stampo gli elementi in schermo presi dalla chiave 2, utilizzo molti br per separare tutti i reparti tra loro
foreach ($array as $chiave => $valore) {
    echo $chiave;
    echo "<br>";
    foreach ($valore as $chiave2) {
        echo "<br>";
        foreach ($chiave2 as $elemento => $valore) {
            echo $elemento. ": ".$valore;
            echo "<br>";
        }
    }
    echo "<br>";
}
?>
