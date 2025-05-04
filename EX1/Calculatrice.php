<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Calculatrice PHP</title>
</head>
<body><center>
    <h2>Calculatrice en PHP</h2>

    <form method="POST">
        <label>Nombre 1 :</label>
        <input type="number" name="nombre1" required><br><br>

        <label>Opération :</label>
        <select name="operation">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select><br><br>

        <label>Nombre 2 :</label>
        <input type="number" name="nombre2" required><br><br>

        <input type="submit" value="Calculer">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $n1 = $_POST['nombre1'];
        $n2 = $_POST['nombre2'];
        $op = $_POST['operation'];

        echo "<h3>Résultat :</h3>";

        switch ($op) {
            case '+':
                echo "$n1 + $n2 = " . ($n1 + $n2);
                break;
            case '-':
                echo "$n1 - $n2 = " . ($n1 - $n2);
                break;
            case '*':
                echo "$n1 * $n2 = " . ($n1 * $n2);
                break;
            case '/':
                if ($n2 != 0) {
                    echo "$n1 / $n2 = " . ($n1 / $n2);
                } else {
                    echo "Erreur :  impossible.";
                }
                break;
            default:
                echo "invalide";
        }
    }
    ?>
    </center>
</body>
</html>
