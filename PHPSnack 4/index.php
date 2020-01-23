<?
// ciclo 15 volte e uso la funzione rand per generare numeri casuali
$numeriestratti = [];

while (count($numeriestratti) < 15) {
    // genero un numero casuale
    $numero = rand(0,100);
    // controllo se il numero non è già stato estratto
    if (in_array($numero, $numeriestratti)== false) {
        // se è vero, lo aggiungo ai numeri estratti
        $numeriestratti [] = $numero;
    }
}
foreach ($numeriestratti as $numeroestratto) {
    echo $numeroestratto."<br>";
}
?>
