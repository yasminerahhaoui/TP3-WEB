<?php

function nombreAleatoirePair() {
    return rand(1, 50) * 2; // Multiplie par 2 pour garantir un nombre pair entre 2 et 100
}


function nombreAleatoireImpair() {
    return rand(1, 50) * 2 - 1; // Soustrait 1 pour garantir un nombre impair entre 1 et 99
}
 
// Effectuer des tirages jusqu'à obtenir la suite désirée
do {
    $nombre1 = nombreAleatoirePair();
    $nombre2 = nombreAleatoirePair();
    $nombre3 = nombreAleatoireImpair();
} while ($nombre1 % 2 !== 0 || $nombre2 % 2 !== 0 || $nombre3 % 2 === 0);

echo "Suite composée de deux nombres pairs suivis d'un nombre impair : $nombre1, $nombre2, $nombre3";
?>
