<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nombres d'Armstrong</title>
</head>
<body>
  <h1>Nombres d'Armstrong inférieurs à 1000 :</h1>
  <ul>
    <?php
    // Fonction pour vérifier si un nombre est un nombre d'Armstrong
    function estNombreArmstrong($nombre) {
        $nombreOriginal = $nombre;
        $somme = 0;
        while ($nombre > 0) {
            $chiffre = $nombre % 10;
            $somme += $chiffre ** 3;
            $nombre = (int)($nombre / 10);
        }
        return $somme === $nombreOriginal;
    }

    // Parcourir les nombres de 1 à 999 pour trouver les nombres d'Armstrong
    for ($i = 1; $i < 1000; $i++) {
        if (estNombreArmstrong($i)) {
            echo "<li>$i</li>";
        }
    }
    ?>
  </ul>
</body>
</html>
