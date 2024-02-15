<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calculadora Básica jf</title>
</head>
<body>
    <h2>Calculadora Básica</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label for="numero1">Dijite el Primer número:</label>
        <input type="number" name="numero1" id="numero1" required>
        <br><br>
        <label for="numero2">Dijite el Segundo número:</label>
        <input type="number" name="numero2" id="numero2" required>
        <br><br>
        <input type="submit" name="submit" value="Calcular">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero1 = $_POST["numero1"];
        $numero2 = $_POST["numero2"];

        echo "<h3>Resultados:</h3>";
        echo "Suma: " . ($numero1 + $numero2) . "<br>";
        echo "Resta: " . ($numero1 - $numero2) . "<br>";
        echo "Multiplicación: " . ($numero1 * $numero2) . "<br>";
        if ($numero2 != 0) {
            echo "División: " . ($numero1 / $numero2) . "<br>";
        } else {
            echo "División: No se puede dividir por cero.<br>";
        }
    }
    ?>
</body>
</html>