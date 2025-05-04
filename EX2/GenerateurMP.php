<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Générateur de mot de passe</title>
</head>
<body>
    <center>
    <h2>Générateur de mot de passe</h2>

    <form method="POST">
        <label>Longueur  :</label>
        <input type="number" name="longueur"  required>
        <input type="submit" value="Générer">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $longueur = intval($_POST['longueur']);


        $lettres = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $chiffres = '0123456789';
        $speciaux = '!@#$%^&*()-_=+[]{};:,.<>?';

        $tous_les_caracteres = $lettres . $chiffres . $speciaux;
        $mot_de_passe = '';

        for ($i = 0; $i < $longueur; $i++) {
            $mot_de_passe .= $tous_les_caracteres[random_int(0, strlen($tous_les_caracteres) - 1)];
        }

        echo "<h3>Mot de passe généré :</h3>";
        echo "<p style='font-weight: bold; font-size: 18px;'>$mot_de_passe</p>";
    }
    ?>
    </center>
</body>
</html>
