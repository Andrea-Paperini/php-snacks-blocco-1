<?php
// Creo le due variabili per identificare i caratteri obbligatori
$chiocciola = "@";
$punto = ".";
// controllo se il nome è maggiore di 3
$check1 = strlen($_GET["nome"]) > 3;
// controllo se la email contiene il punto
$check2_1 = strpos($_GET["email"], $punto,);
// controllo se la email contiene la chiocciola
$check2_2 = strpos($_GET['email'], $chiocciola);
// controllo se il dato ricevuto è un numero
$check3 = is_numeric ( mixed "eta" ) : bool;
// se tutto è regolare in contemporanea stampo l'accesso riuscito, altrimenti negato
if ($check1 && $check2_1 && $check2_2 && $check3) {
    echo "Accesso riuscito";
} else {
    echo "Accesso negato";
}
?>
