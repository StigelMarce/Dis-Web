<?php
function descomponerNumero($numero) {
    $longitud = strlen($numero);
    $resultado = [];

    for ($i = 0; $i < $longitud; $i++) {
        $posicion = $longitud - $i - 1;
        $valor = (int)$numero[$i] * pow(10, $posicion);
        $resultado[] = $valor;
    }

    return $resultado;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = isset($_POST['numero']) ? $_POST['numero'] : '';
    $error = '';
    $resultado = [];

    if (!is_numeric($numero)) {
        $error = "Ingrese um número válido.";
    } else {
        $resultado = descomponerNumero($numero);
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <h1>El numero descompuesto es</h1>

    <?php
    if (!empty($error)) {
        echo "<p style='color:red;'>$error</p>";
    }

    if (!empty($resultado)) {
        echo "<table border='1'>";
        echo "<tr><th>Posición</th><th>Valor</th></tr>";
        foreach ($resultado as $posicion => $valor) {
            echo "<tr><td> El numero en la posición $posicion</td><td> es $valor</td></tr>";
        }
        echo "</table>";
    }
    ?>

    <a href="punto4.html">Volver</a>
</body>
</html>
