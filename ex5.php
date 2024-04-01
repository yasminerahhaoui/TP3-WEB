<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Résolution d'une équation du second degré</title>
</head>
<body>
    <h2>Résolution d'une équation du second degré</h2>
    <form method="post">
        <label for="a">Coefficient a :</label>
        <input type="number" id="a" name="a" required><br><br>
        
        <label for="b">Coefficient b :</label>
        <input type="number" id="b" name="b" required><br><br>
        
        <label for="c">Coefficient c :</label>
        <input type="number" id="c" name="c" required><br><br>
        
        <button type="submit" name="submit">Résoudre</button>
    </form>

    <?php
    // Vérifier si le formulaire a été soumis
    if (isset($_POST['submit'])) {
        // Récupérer les coefficients a, b et c depuis le formulaire
        $a = $_POST['a'];
        $b = $_POST['b'];
        $c = $_POST['c'];

        // Calculer le discriminant
        $delta = $b * $b - 4 * $a * $c;

        // Vérifier si l'équation a des solutions réelles
        if ($delta > 0) {
            $x1 = (-$b + sqrt($delta)) / (2 * $a);
            $x2 = (-$b - sqrt($delta)) / (2 * $a);
            echo "<p>Les solutions de l'équation sont : x1 = $x1 et x2 = $x2</p>";
        } elseif ($delta == 0) {
            $x = -$b / (2 * $a);
            echo "<p>L'équation admet une solution double : x = $x</p>";
        } else {
            echo "<p>L'équation n'a pas de solution réelle</p>";
        }
    }
    ?>
</body>
</html>
