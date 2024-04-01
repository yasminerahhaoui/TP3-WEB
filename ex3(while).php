<?php
// Générer aléatoirement un nombre à trois chiffres N
$N = rand(100, 999);
$essais = 0;

$i = null;
while ($i !== $N) {
    $i = rand(100, 999);
    $essais++;
}

// Afficher le nombre d'essais réalisés
echo "Le nombre $N a été réobtenu après $i essais.";
?>
