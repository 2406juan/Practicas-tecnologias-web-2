<?php
session_start();


if (!isset($_SESSION['lista_compras'])) {
    $_SESSION['lista_compras'] = array();
}


if (isset($_POST['agregar'])) {
    $nuevo_producto = $_POST['nuevo_producto'];
    if (!empty($nuevo_producto)) {
        $_SESSION['lista_compras'][] = $nuevo_producto;
    }
}


if (isset($_POST['eliminar'])) {
    $indice = $_POST['indice'];
    unset($_SESSION['lista_compras'][$indice]);
}


function mostrarListaCompras() {
    if (!empty($_SESSION['lista_compras'])) {
        echo "<ul>";
        foreach ($_SESSION['lista_compras'] as $indice => $producto) {
            echo "<li>$producto <form method='post'><input type='hidden' name='indice' value='$indice'><input type='submit' name='eliminar' value='Eliminar'></form></li>";
        }
        echo "</ul>";
    } else {
        echo "La lista de compras está vacía.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Compras</title>
</head>
<body>
    <h1>Lista de Compras</h1>
    
    <h2>Agregar Nuevo Producto</h2>
    <form method="post">
        <label for="nuevo_producto">Producto:</label>
        <input type="text" id="nuevo_producto" name="nuevo_producto">
        <input type="submit" name="agregar" value="Agregar">
    </form>
    
    <h2>Lista Actual de Compras</h2>
    <?php mostrarListaCompras(); ?>
</body>
</html>
