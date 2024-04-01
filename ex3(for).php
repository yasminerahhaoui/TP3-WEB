<?php
$N = rand(100, 999);

for ($essais = 1; ; $essais++) {
    $tirage = rand(100, 999);
    if ($tirage === $N) {
        break;
    }
}

// Afficher le nombre d'essais réalisés
echo "Le nombre $N a été réobtenu après $essais essais.";
?>
