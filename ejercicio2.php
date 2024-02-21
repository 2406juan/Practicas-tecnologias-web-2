<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Par o Impar</title>
</head>
<body>
    <h2>Determinar si un número es par o impar</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Ingresa un número: <input type="number" name="numero">
        <input type="submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['numero']) && !empty($_POST['numero'])) {
            $numero = $_POST['numero'];
            
            if ($numero % 2 == 0) {
                echo "<p>El número $numero es par.</p>";
            } else {
                echo "<p>El número $numero es impar.</p>";
            }
        } else {
            echo "<p>Por favor ingresa un número.</p>";
        }
    }
    ?>
</body>
</html>